<?php
if(isset($_POST['pass_submit'])) {
  if(Checks::iE($_POST['oldPass']) && Checks::iE($_POST['newPass']) && Checks::iE($_POST['confirmPass']) && Checks::iE($_POST['email'])){
    //AKo se trenutna sifra ne podudara sa onom u bazi vratiti false..

    $oldPass = $_POST['oldPass'];
    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];
    $email = $_POST['email'];

    $oldPass = trim($oldPass);
    $newPass = trim($newPass);
    $confirmPass = trim($confirmPass);
    $email = trim($email);

    if(!Checks::pass($newPass)){
      display('Sifra mora da srdzi minimum jedno veliko slovo,jedno malo i jedan broj.');
      return;
    }

    //kriptovanje
    $oldPass = md5($oldPass);
    $newPass = md5($newPass);
    $confirmPass = md5($confirmPass);
    //ako niej ista kao ona u sesije, vrci nazad
    if($oldPass != $session->getSession('pass')){
      display('Stara sifra nije dobra.');
      return;
    }
    if($oldPass == $newPass){
      return;
    }
    if($session->sessionExists('user_id')){
      $email = $session->getSession('email');
    }
    $pass = new ChangePass($newPass, $confirmPass, $email);

      ///neznademstonevrcenista????
    if(!$pass->equalPass()){
        display('Nova sifra se ne podudara.');
        return;
    }else{
      $pass->update();
      $session->setSession('pass', $newPass);
      display('Uspesno ste promenili sifru','green');
    }

    var_dump($pass);

  }else {
    display('Popunite sva polja');
  }
}
?>
