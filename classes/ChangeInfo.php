<?php
class ChangeInfo{
  private $name;
  private $lastName;
  private $date;
  private $id;

  public function __construct($name, $lastName, $date, $id){
    $this->name = $name;
    $this->lastName = $lastName;
    $this->date = $date;
    $this->id = $id;
  }

  public function update(){
    global $conn;
    $a = $conn->prepare('UPDATE users SET name = :name, lastName = :lastName, date = :date WHERE user_id = :id');
    $name = $a->bindParam('name', $this->name);
    $lastName = $a->bindParam('lastName', $this->lastName);
    $date = $a->bindParam('date', $this->date);
    $id = $a->bindParam('id', $this->id);
    $a->execute();
    return true;
  }

  public function show_update(){
    global $conn;
    global $session;
    $q = $conn->prepare('SELECT * FROM users WHERE user_id = :id');
    $id = $q->bindParam(':id', $this->id);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    print_r($res);
    foreach ($res as $key => $value) {
      $session->setSession($key, $value);
    }
    return true;
  }
}
?>
