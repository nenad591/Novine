<?php
if(isset($_POST['ci_submit'])){
  if(Checks::iE($_POST['ci_name']) && Checks::iE($_POST['ci_lastName']) && Checks::iE($_POST['ci_year']) && Checks::iE($_POST['ci_month']) && Checks::iE($_POST['ci_day'])) {
    $name = $_POST['ci_name'];
    $lastName = $_POST['ci_lastName'];
    $date = $_POST['ci_year'] . '-' . $_POST['ci_month'] . '-' . $_POST['ci_day'];
    if(!Checks::text($name)){
      display('Ime sme da sadrzi samo slova.');
      return;
    }
    if(!Checks::text($lastName)) {
      display('Prezime sme da sadrzi slova.');
      return;
    }
    if(!Checks::date($date)) {
      return;
    }
    $name = trim($name);
    $lastName = trim($lastName);
    $id = $session->getSession('user_id');
    $cI = new ChangeInfo($name, $lastName, $date, $id);
    if($cI->update()){
      if($cI->show_update($id)){
        header('Location: index.php?p=profil');
      }else {
        display('Doslo je do neke greske pokusajte opet.');
      }
    }
  }else {
    display('Popunite sva polja.');
  }
}
?>
