<?php
require_once 'DB.php';
class Register{

  private $name;
  private $lastName;
  private $email;
  private $pass;
  private $date;
  private $gender;
  private $token;

  public function __construct($name, $lastName, $email, $pass, $date, $gender, $token){
    $this->name = $name;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->pass = $pass;
    $this->date = $date;
    $this->gender = $gender;
    $this->token = $token;
  }

  public function insert(){
    global $conn;
    $q = $conn->prepare("INSERT INTO users VALUES (null, :name, :lastName, :email, :pass, :datee, :gender, 'activ', :token, 'user')");
    $name = $q->bindParam(':name', $this->name);
    $lastName = $q->bindParam(':lastName', $this->lastName);
    $email = $q->bindParam(':email', $this->email);
    $pass = $q->bindParam(':pass', $this->pass);
    $date = $q->bindParam(':datee', $this->date);
    $gender = $q->bindParam(':gender', $this->gender);
    $token = $q->bindParam(':token', $this->token);
    $q->execute();
    return true;
  }
  public function existsEmail(){
    global $conn;
    $q = $conn->prepare('SELECT email FROM users WHERE email = :email');
    $email = $q->bindParam(":email", $this->email);
    $q->execute();
    $res = $q->rowCount();
    //ako rezultat 0 znaci da korisnik nije registovan
    if($res == 0){
      return true;
    }return false;
  }

}
?>
