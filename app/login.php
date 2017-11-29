<?php

if(isset($_POST['lg_submit'])){
  if( Checks::iE($_POST['lg_email']) && Checks::iE($_POST['lg_pass']) ){
    $email = $_POST['lg_email'];
    $pass = $_POST['lg_pass'];
    //filtriranje podataka
    if(!Checks::email($email)){
      display('E-mail nije validan.');
      return;
    }
    //Provera dal sifra odgovara jedno veliko jedno malo slovo i broj.. cisto onako :D
    if(!Checks::pass($pass)){
      display('Sifra mora da srdzi minimum jedno veliko slovo,jedno malo i jedan broj.');
      return;
    }
    //pass dobar sad kriptovanje :D
    $email = trim($email);
    $email = strtolower($email);

    $pass = trim($pass);
    $pass = md5($pass);
    //spejsovi sa leva i desna ocisceni/obrisani...
    $login = new Login($email, $pass);
    //moglo bi da se proveri dali je status korisnika = aktiv, ako nije da potvrdi email, ili opet da mu se posalje novi token i tako to :D

    $res = $login->getUser();
    if(!empty($res)){
      $login->setLogin();
      header('Location: index.php');
    }else{
      display('Pogresan e-mail ili sifra.');
    }
  }else{
    display('Popunite sva polja.');
  }
}
?>
