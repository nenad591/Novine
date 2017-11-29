<?php
class Category{
  private $name;

  public function __construct($name){
    $this->name = $name;
  }

  public function insert(){
    global $conn;
    $q = $conn->prepare('INSERT INTO category VALUES(null, :name)');
    $name = $q->bindParam('name', $this->name);
    $q->execute();
    return true;
  }
  public function update($id){
    global $conn;
    $q = $conn->prepare('UPDATE category SET c_name = :name WHERE category_id = :id');
    $name = $q->bindParam('name', $this->name);
    $id = $q->bindParam('id', $id);
    $q->execute();
    return true;
  }

  public static function getCategory(){
    global $conn;
    $q = $conn->prepare('SELECT * FROM category');
    $q->execute();
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }

  public function getId($name){
    global $conn;
    $q = $conn->prepare('SELECT category_id FROM category WHERE c_name = :name');
    $category = $q->bindParam('name', $name);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }

  public function updateCategory($id){
    global $conn;
    $q = $conn->prepare('UPDATE category SET c_name = :name WHERE category_id = :id');
    $categoryName = $q->bindParam('name', $this->name);
    $category_id = $q->bindParam('id', $id);
    $q->execute();
    return true;
  }

  public static function delete($id){
    global $conn;
    $q = $conn->prepare('DELETE FROM category WHERE category_id = :id');
    $id = $q->bindParam('id', $id);
    $q->execute();
    return true;
  }

}

?>
