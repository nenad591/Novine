<?php
if(isset($_POST['n_submit'])) {
  if(Checks::iE($_POST['n_title']) && Checks::iE($_POST['n_content']) && Checks::iE($_POST['n_category'])){
    $title = $_POST['n_title'];
    $content = $_POST['n_content'];
    $category = $_POST['n_category'];

    if(!empty($_POST['n_tags'])){
      $tags = $_POST['n_tags'];
    }else{
      $tags = null;
    }

    //datum trenutno vreme
    $dateTime = date('Y-m-d H:i:s');

    $title = trim($title);
    $content = trim($content);
    $tags = trim($tags);

    //ako polje za sliku nije prazno, proverava se format, u slucajnom slika je null..
    //IZMENITI SLIKU....

    if($_FILES['n_img']['size'] != 0){
      $img = addslashes(file_get_contents($_FILES['n_img']['tmp_name']));
      $image = $_FILES['n_img'];
      if(!Checks::image($image)){
        display('Slika nije odgovarajuceg formata.');
        return;
      }
    }else{
      $img = null;
    }
    if(!Checks::text($tags)){
      display('Tagovi treba da sadrze samo tekst.');
      return;
    }
    //Id korinika koji unosi post
    $userId = $session->getSession('user_id');

    $news = new News($title, $content, $dateTime, $category, $tags, $img, $userId);
    if($news->insert()){
      display('Uspesno ste dodali vest.', 'green');
    }else{
      display('Doslo je do greske.');
    }
  }else{
    display('Obavezna polja su oznacene sa zvezdicom. *');
  }
}
?>
