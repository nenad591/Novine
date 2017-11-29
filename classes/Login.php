<?php
class Login{
  private $email;
  private $pass;

  public function __construct($email, $pass){
    $this->email = $email;
    $this->pass = $pass;
  }

  public function getUser(){
    global $conn;
    $q = $conn->prepare('SELECT * FROM users WHERE email = :email AND pass = :pass');
    $email = $q->bindParam(':email', $this->email);
    $pass = $q->bindParam(':pass', $this->pass);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }
  public function setLogin(){
    global $session;
    $res = $this->getUser();
    foreach($res as $key => $value){
      $session->setSession($key, $value);
    }
  }
}
?>
