<?php
class News{

  private $title;
  private $content;
  private $category;
  private $date;
  private $tags;
  private $id;

  public function __construct($title, $content, $date, $category, $tags, $id){
    $this->title = $title;
    $this->content = $content;
    $this->date = $date;
    $this->category = $category;
    $this->tags = $tags;
    $this->id = $id;
  }

  public function insert(){
    global $conn;
    $q = $conn->prepare('INSERT INTO news VALUES(null, :title, :content, :dateTime, :category, :tags, :id)');
    $title = $q->bindParam('title', $this->title);
    $content = $q->bindParam('content', $this->content);
    $date = $q->bindParam('dateTime', $this->date);
    $category = $q->bindParam('category', $this->category);
    $tags = $q->bindParam('tags', $this->tags);
    $id = $q->bindParam('id', $this->id);
    $q->execute();
    return true;
  }

  public function update($id){
    global $conn;
    $q = $conn->prepare('UPDATE news SET title = :tit, content = :con, category = :cat, tags = :tag WHERE news_id = :id');
    $tit = $q->bindParam(':tit', $this->title);
    $cot = $q->bindParam(':con', $this->content);
    $cat = $q->bindParam(':cat', $this->category);
    $tag = $q->bindParam(':tag', $this->tags);
    $newsId = $q->bindParam(':id', $id);
    $q->execute();
    return true;
  }

  public static function getNews($id){
    global $conn;
    $q = $conn->prepare('SELECT title, content, tags,c_name FROM news JOIN category ON news.category_id = category.category_id WHERE news_id = :id');
    $news_id = $q->bindParam('id', $id);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }


  public static function getAll(){
    global $conn;
    $q = $conn->prepare("SELECT news.news_id, news.title,news.content,news.dateTime,category.c_name,users.name, users.lastName  FROM news JOIN category ON news.category_id = category.category_id JOIN users ON news.user = users.user_id");
    $q->execute();
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function distinct(){
    global $conn;
    $q = $conn->prepare("SELECT  distinct(category.c_name) FROM news JOIN category ON news.category_id = category.category_id");
    $q->execute();
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function getOneFromAll($name){
    global $conn;
    $q = $conn->prepare("SELECT news.news_id, news.title,news.content,news.dateTime, users.name, users.lastName, category.c_name  FROM news
      JOIN category ON news.category_id = category.category_id JOIN users ON news.user_id = users.user_id
       WHERE category.c_name = :name ORDER BY news.dateTime DESC");
    $cat = $q->bindParam('name', $name);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function getOneNews($id){
    global $conn;
    $q = $conn->prepare(
      "SELECT news.news_id, news.title,news.content,news.dateTime,news.tags, users.name, users.lastName, category.c_name
       FROM news JOIN category
       ON news.category_id = category.category_id
       JOIN users ON news.user_id = users.user_id WHERE news.news_id = :id"
    );
    $news_id = $q->bindParam('id', $id);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function getLike($name){
    global $conn;
    $q = $conn->prepare("SELECT news.news_id, news.title,news.content,news.dateTime, users.name, users.lastName, category.c_name  FROM news JOIN category ON news.category_id = category.category_id JOIN users ON news.user_id = users.user_id WHERE news.title LIKE :name OR news.content LIKE :name OR category.c_name LIKE :name OR news.tags LIKE :name ORDER BY news.news_id DESC");
    $q->execute(array(':name' => '%'.$name.'%'));
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }
}
?>
