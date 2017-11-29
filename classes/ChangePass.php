<?php
class ChangePass{

  private $newPass;
  private $confirmPass;
  private $email;

  public function __construct($newPass, $confirmPass, $email){
      $this->newPass = $newPass;
      $this->confirmPass = $confirmPass;
      $this->email = $email;
  }

  public function equalPass(){
    if($this->newPass == $this->confirmPass){
      return true;
    }
  }

  public function update(){
    global $conn;
    $a = $conn->prepare('UPDATE users SET pass = :pass WHERE email = :email');
    $pass = $a->bindParam('pass', $this->newPass);
    $email = $a->bindParam('email',$this->email);
    $a->execute();
    return true;
  }
}
?>
