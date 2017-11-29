<?php
if(isset($_POST['cc_submit'])){
  if(Checks::iE($_POST['cc_name']) && Checks::iE($_POST['cc_category'])){
    $name = $_POST['cc_name'];
    $category = $_POST['cc_category'];
    if($category == -1){
      display('Niste izabrali kategoriju.');
      return;
    }
    if(!Checks::text($name)){
      display('Kategorija sme da sadrzi slova.');
      return;
    }
    $updateCategory = new Category($name);
    //id kategorije dobavljen..
    $id = $updateCategory->getId($category)['category_id'];
    if($updateCategory->updateCategory($id)){
      display('Uspesno ste izmenili kategoriju.', 'green');
      $ccname = '';
    }else {
      display('Doslo je do greske prilikom izmene.');
    }

  }else{
    display('Popunite polje');
  }
}
?>
