<?php
if($session->sessionExists('user_id')){
  $session->destroySession();
  header('Location: index.php');
}else{
  header('Location: index.php?p=login');
}
?>
