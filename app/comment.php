<?php
if(isset($_POST['comment_submit'])){
  if(!$session->sessionExists('user_id')){
    display('Morate da se prijavite kako biste komentarisali. <a href="?p=login">Prijavi se.</a>');
    return;
  }
  if(Checks::iE($_POST['comment']) && Checks::iE($_POST['news_id'])){

    $comment = $_POST['comment'];
    $news_id = $_POST['news_id'];
    $user_id = $session->getSession('user_id');
    $dateComment = date('Y-m-d H:i:s');

    //Ne vrsim filtriranje Komentara... uraditi kasnije..
    $comment = new Comment($comment, $news_id, $user_id, $dateComment);
    if($comment->insert()){
      display('Uspesno ste prokomentarisali.', 'green');
    }else{
      display('Doslo je do greske prilikom komentarisanja');
    }
  }else{
    display('Komentar ne moze da bude prazan.');
  }
}
?>
