<?php
if(isset($_GET['a']) && isset($_GET['id'])){
  $level = $_GET['a'];
  $level = strtolower($level);
  $id = $_GET['id'];
  $existLevel = array('user', 'admin', 'superadmin');
  if(!in_array($level, $existLevel)){
    return;
  }
  if(!is_numeric($id) && !empty($id)){
    display('Id nije validan');
    return;
  }

  $user = new Users();
  if($user->updateUser($level, $id)){
    $res = $user->showUpdate($id);
    display($res['name'] . ' ' . $res['lastName'] .' je postavljen za: ' . $level, 'green');
  }else{
    display('Doslo je do greske.');
  }
}
?>
