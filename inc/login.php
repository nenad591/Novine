<?php
//Ako je pocela sesija ne dozvoliti opet prijavljivanje..
if($session->sessionExists('user_id')){
  header('Location: index.php');
}
//ucitavanje izvrsavanje skripte...
require_once 'app/login.php';
?>
<div class="forme">
  <h2>Prijavi se</h2>
  <form method="post" action='<?php $_SERVER['PHP_SELF']?>'>
    <table>
      <tr>
        <td><label for="email">E-mail:</label></td>
        <td><input type="email" name="lg_email" id="email"></td>
      </tr>
      <tr>
        <td><label for="pass">Sifra:</label></td>
        <td><input type="password" name="lg_pass" id="pass"></td>
      </tr>
    </table>
    <input type="submit" name="lg_submit" value="Login">
  </form>
  <a href='?p=register'>Nemate nalog? Registrujte se.</a>
</div>
