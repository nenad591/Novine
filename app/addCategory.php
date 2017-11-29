<?php
if(isset($_POST['c_submit'])){
  if(Checks::iE($_POST['c_name'])){
    $category = $_POST['c_name'];
    $category = trim($category);
    if(!Checks::text($category)){
      display('Ime kategorije sme da sadrzi samo slova.');
      return;
    }
    $newCategory = new Category($category);

    if($newCategory->insert()){
      display('Uspesno ste dodali kategoriju. <a href="?p=categorys">Pogledaj sve kategorije</a>', 'green');
    }else{
      display('Doslo je do greske.');
    }
  }else{
    display('Popunite polje.');
  }
}

?>
