<?php
if(!$session->sessionExists('user_id')){
  header('Location: index.php?p=login');
}
if($session->getSession('level') != 'superadmin'){
  header('Locati: index.php');
}
?>
<div class='users'>
  <ul>
    <li>Ime i Prezime:</li>
    <li>E-mail:</li>
    <li>Datum:</li>
    <li>Status:</li>
    <li>Level:</li>
  </ul>
</div>

<?php
include_once 'app/users.php';

$users = new Users();
$res = $users->selectAll();
foreach ($res as $key => $value) :
?>
<div class='users'>
  <ul>
      <li><?php echo $value['name'] . ' ' . $value['lastName'];?></li>
      <li colspan="2" class="email"><?php echo $value['email'];?></li>
      <li><?php echo $value['date']; ?></li>
      <li><?php echo $value['status'];?></li>
      <li>
        <?php
        if($value['level'] == 'superadmin'){
          echo "<a href='?p=users&a=admin&id=" . $value['user_id'] ."'>Admin</a>";
          echo "|";
          echo "<a href='?p=users&a=user&id=" . $value['user_id'] . "'>User</a>";
        }elseif($value['level'] == 'admin'){
          echo "<a href='?p=users&a=superadmin&id=" . $value['user_id'] ."'>Admin</a>";
          echo "|";
          echo "<a href='?p=users&a=user&id=" . $value['user_id'] . "'>User</a>";
        }else{
          echo "<a href='?p=users&a=admin&id=" . $value['user_id'] ."'>Admin</a>";
          echo "|";
          echo "<a href='?p=users&a=superadmin&id=" . $value['user_id'] . "'>SuperAdmin</a>";
        }
      ?>
    </li>
  </ul>
</div>

<?php endforeach; ?>
