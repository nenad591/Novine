<?php
class News{

  private $title;
  private $content;
  private $category;
  private $date;
  private $tags;
  private $img;
  private $id;

  public function __construct($title, $content, $date, $category, $tags, $img, $id){
    $this->title = $title;
    $this->content = $content;
    $this->date = $date;
    $this->category = $category;
    $this->tags = $tags;
    $this->img = $img;
    $this->id = $id;
  }

  public function insert(){
    global $conn;
    $q = $conn->prepare('INSERT INTO news VALUES(null, :title, :content, :dateTime, :category, :tags, :img, :id)');
    $title = $q->bindParam('title', $this->title);
    $content = $q->bindParam('content', $this->content);
    $date = $q->bindParam('dateTime', $this->date);
    $category = $q->bindParam('category', $this->category);
    $tags = $q->bindParam('tags', $this->tags);
    $img = $q->bindParam('img', $this->img);
    $id = $q->bindParam('id', $this->id);
    $q->execute();
    return true;
  }

  public function update($id){
    global $conn;
    $q = $conn->prepare('UPDATE news SET title = :title, content = :content, dateTime = :dateTime, updateDate = :updateDate, category = :category, tags = :tags, img = :img WHERE news_id = :id');
    $title = $q->bindParam('title', $this->title);
    $content = $q->bindParam('content', $this->content);
    $date = $q->bindParam('dateTime', $this->date);
    $category = $q->bindParam('category', $this->category);
    $tags = $q->bindParam('tags', $this->tags);
    $img = $q->bindParam('img', $this->img);
    $id = $q->bindParam('id', $id);
    $q->execute();
    return true;
  }

  public static function getAll(){
    global $conn;
    $q = $conn->prepare("SELECT news.news_id, news.title,news.content,news.dateTime,category.c_name,users.name, users.lastName  FROM news JOIN category ON news.category = category.category_id JOIN users ON news.user = users.user_id");
    $q->execute();
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function distinct(){
    global $conn;
    $q = $conn->prepare("SELECT  distinct(category.c_name) FROM news JOIN category ON news.category = category.category_id");
    $q->execute();
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function getOneFromAll($name){
    global $conn;
    $q = $conn->prepare("SELECT news.news_id, news.title,news.content,news.dateTime, users.name, users.lastName, category.c_name  FROM news JOIN category ON news.category = category.category_id JOIN users ON news.user = users.user_id WHERE category.c_name = :name ORDER BY news_id DESC");
    $cat = $q->bindParam(':name', $name);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function getOneNews($id){
    global $conn;
    $q = $conn->prepare(
      "SELECT news.news_id, news.title,news.content,news.dateTime, users.name, users.lastName, category.c_name
       FROM news JOIN category
       ON news.category = category.category_id
       JOIN users ON news.user = users.user_id WHERE news.news_id = :id"
    );
    $news_id = $q->bindParam('id', $id);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }

  public static function getLike($name){
    global $conn;
    $q = $conn->prepare("SELECT news.news_id, news.title,news.content,news.dateTime, users.name, users.lastName, category.c_name  FROM news JOIN category ON news.category = category.category_id JOIN users ON news.user = users.user_id WHERE news.title LIKE :name OR news.content LIKE :name OR category.c_name LIKE :name");
    $q->execute(array(':name' => '%'.$name.'%'));
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }
}
?>
