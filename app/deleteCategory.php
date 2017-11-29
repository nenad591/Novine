<?php
if(isset($_POST['d_submit'])){
  if(Checks::iE($_POST['d_category'])){
    $id = $_POST['d_category'];
    if($name == -1){
      display('Izaberite kategoriju prvo.');
      return;
    }
    if(Category::delete($id)){
      display('Uspesno ste obrisali kategoriju.', 'green');
    }else{
      display('Doslo je do greske prilikom brisanja kategorije.');
    }
  }else{
    return;
  }
}
?>
