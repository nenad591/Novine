<?php
if(!$session->sessionExists('user_id')){
  header('Location: index.php?p=login');
}
require_once 'app/changePass.php';
?>

<div class="forme profil-form">
  <h2>Promena sifre</h2>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <tr>
        <td><label for="currentPass">Trenutna sifra:</label></td>
        <td><input type="password" name="oldPass" id="currentPass"></td>
      </tr>
      <tr>
        <td><label for="newPass">Nova sifra:</label></td>
        <td><input type="password" name="newPass" id="newPass"></td>
      </tr>
      <tr>
        <td><label for="confirmPass">Potvrda sifre:</label></td>
        <td><input type="password" name="confirmPass" id="confirmPass"></td>
      </tr>
    </table>
    <input type="hidden" name="email" value="<?php echo $session->getSession('email'); ?>">
    <input type="submit" name="pass_submit" value="Promeni sifru">
  </form>
  <a href="?p=profil">Povratak do profila</a>
</div>
