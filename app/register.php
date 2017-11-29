<?php
if(isset($_POST['rg_submit'])){
  if (Checks::iE($_POST['rg_name']) && CHecks::iE($_POST['rg_lastName']) && Checks::iE($_POST['rg_email']) && Checks::iE($_POST['rg_pass']) && Checks::iE($_POST['rg_year']) && Checks::iE($_POST['rg_month']) && Checks::iE($_POST['rg_day']) && CHecks::iE($_POST['rg_gender']) && Checks::iE($_POST['rg_token'])) {
    $name = $_POST['rg_name'];
    $lastName = $_POST['rg_lastName'];
    $email = $_POST['rg_email'];
    $pass = $_POST['rg_pass'];
    $date = $_POST['rg_year'] . '-' . $_POST['rg_month'] . '-' . $_POST['rg_day'];
    $gender = $_POST['rg_gender'];
    $token = $_POST['rg_token'];
    //Poslati su svi parametri i nisu prazni..
    //Provera podataka dali su validni..
    if(!Checks::text($name)){
      display('Ime sme da sadrzi samo slova.');
      return;
    }
    if(!Checks::text($lastName)) {
      display('Prezime sme da sadrzi slova.');
      return;
    }
    if(!Checks::email($email)){
      display('E-mail nije validan.');
      return;
    }
    //ako je neko pokusao da se registuje (da me predje) a nije uneo podatke samo da se prekine izvrsavanje
    if(!Checks::pass($pass)){
      display('Sifra mora da srdzi minimum jedno veliko slovo,jedno malo i jedan broj.');
      return;
    }
    //sifra je ok sad se kriptuje..
    $name = trim($name);
    $lastName = trim($lastName);
    $email = strtolower($email);
    $email = trim($email);
    $pass = trim($pass);
    $pass = md5($pass);
    if(!Checks::date($date)) {
      return;
    }
    if(!Checks::gender($gender)){
      return;
    }
    $user = new Register($name,$lastName, $email, $pass, $date, $gender, $token);
    //ako ovde vrati 1 znaci ima vec email
    if($user->existsEmail()){
      //ako nema izvrsiti registrovanje
      if(!$user->insert()){
        display('Uspesno ste se registrovali.<a href="?p=login">Prijavite se</a>', '#04ff00');
        //posto se uspesno registruje mogo bi da se posalje token na email da se proveri dali je to zaista to taj korisnik..
      }else{
        display('Doslo je do greske...Pokusajte ponovo');
      }
    }else{
      display('E-mail je zauzet.<a href="?p=login">Prijavite se</a>');
    }

  }else{
    display('Popunite sva polja.');
  }
}
?>
