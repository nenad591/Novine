<?php
//ako postoji sesija ne dozvoliti registraciju...
if($session->sessionExists('user_id')){
  header('Location: index.php');
}
//ucitavanje app/register.php gde se izvrsava skripta...
require_once 'app/register.php';
?>
<div class="forme register">
  <h2>Registruj se</h2>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <tr>
        <td><label for="name">Ime:</label></td>
        <td><input type="text" name="rg_name"></td>
      </tr>
      <tr>
        <td><label for="lastName">Prezime:</label></td>
        <td><input type="text" name="rg_lastName"></td>
      </tr>
      <tr>
        <td><label for="email">E-mail:</label></td>
        <td><input type="email" name="rg_email"></td>
      </tr>
      <tr>
        <td><label for="pass">Sifra:</label></td>
        <td><input type="password" name="rg_pass"></td>
      </tr>
      <tr>
        <td colspan="2"><label>Datum rodjenja:</label></td>
      </tr>
      <tr>
        <td colspan="2">
          <?php
          echo "Godina:<select name='rg_year'>";
          for ($i=2017; $i >= 1970; $i--) {
            echo "<option value='{$i}'>{$i}</option>";
          }
          echo "</select>";
          echo "Mesec:<select name='rg_month'>";
          for ($i=12; $i >= 1; $i--) {
            echo "<option value='{$i}'>{$i}</option>";
          }
          echo "</select>";
          echo "Dan:<select name='rg_day'>";
          for ($i=31; $i >= 1; $i--) {
            echo "<option value='{$i}'>{$i}</option>";
          }
          echo "</select>";
          ?>
        </td>
      </tr>
      <tr>
        <td colspan="2"><label>Pol:</label></td>
      </tr>
      <tr>
        <td colspan="2">
          <label for="musko">Musko</label><input type="radio" name="rg_gender" id="musko" value='Musko' checked>
          <label for="zensko">Zensko</label><input type="radio" name="rg_gender" id="zensko" value="Zensko">
        </td>
      </tr>
    </table>
    <input type="hidden" name="rg_token" value="<?php echo md5(uniqid(rand(), true)); ?>">
    <input type="submit" name="rg_submit" value="Registruj se">
  </form>
  <a href="?p=login">Imate nalog? Prijavite se</a>
</div>
