<?php
class Users{

  public function selectAll(){
    global $conn;
    $q = $conn->prepare('SELECT user_id,name, lastName, email, date, status, level FROM users');
    $q->execute();
    $res = $q->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }
  public function updateUser($level, $id){
    global $conn;
    $q = $conn->prepare('UPDATE users SET level = :level WHERE user_id = :id');
    $user_level = $q->bindParam('level', $level);
    $user_id = $q->bindParam('id', $id);
    $q->execute();
    return true;
  }

  public function showUpdate($id){
    global $conn;
    $q = $conn->prepare('SELECT name, lastName FROM users WHERE user_id = :id');
    $user_id = $q->bindParam('id', $id);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
    }
}
?>
