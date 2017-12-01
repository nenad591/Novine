<?php
if(isset($_GET['idc']) && !empty($_GET['idc']) && is_numeric($_GET['idc'])){
  if(!$session->sessionExists('user_id') || !$session->sessionExists('level')){
    return;
  }
  $idc = $_GET['idc'];
  $user_id = $session->getSession('user_id');
  $userId = Comment::checkUser($idc);
  $userId = $userId['user_id'];
  //provera zasto nece..
  if($session->getSession('level') == 'admin' ||
  $session->getSession('level') == 'superadmin' ||
  $user_id == $userId){
    if(Comment::deleteComment($idc)){
      header('Location: index.php?p=comment&nid='.$_GET['nid']);
    }else{
      display('Doslo je do greske.');
    }
  }
  return;
}
?>
