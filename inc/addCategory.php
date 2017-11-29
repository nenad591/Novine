<?php
if(!$session->sessionExists('user_id') && !$session->sessionExists('level')){
  header('Location: index.php?p=login');
}
if($session->getSession('level') == 'user'){
  header('Location: index.php');
}
include_once 'app/addCategory.php';
?>

<div class="forme">
  <h2>Dodaj kategoriju</h2>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table>
      <tr>
        <td><label for='name'>Ime:</label></td>
        <td><input type="text" name="c_name" id='name'></td>
      </tr>
    </table>
    <input type="submit" name="c_submit" value="Dodaj"><br>
    <a href="?p=updateCategory">Izmeni kategoriju</a> | <a href="?p=deleteCategory">Obrisi kategoriju</a>
  </form>
</div>
