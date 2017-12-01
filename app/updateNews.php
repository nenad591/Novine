
<?php
if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
  $post = News::getNews($_GET['id']);
  $uTitle = $post['title'];
  $uContent = $post['content'];
  $uTags = $post['tags'];
  $uImage = $post['image'];

  if(isset($_POST['u_submit'])) {
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
      if($_FILES['n_img']['size'] != 0){
        $img = addslashes(file_get_contents($_FILES['n_img']['tmp_name']));
        $img = $_FILES['n_img'];
        if(!Checks::image($img)){
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
      if($news->update($_GET['id'])){
        display('Uspesno ste promenili vest.', 'green');
      }else{
        display('Doslo je do greske');
      }
    }else{
      display('Obavezna polja su oznacene sa zvezdicom. *');
    }
  }
}else{

  $uTitle = '';
  $uContent = '';
  $uTags = '';
  $uImg = '';
  return;
}
?>
