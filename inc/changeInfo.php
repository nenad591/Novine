<?php
if(!$session->sessionExists('user_id')){
  header('Location: index.php?p=login');
}
include_once 'app/changeInfo.php';
?>
<div class="forme profil-form change">
  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <table>
      <tr>
        <td><label for="name">Ime:</label></td>
        <td><input type="text" name="ci_name" value="<?php echo $session->getSession('name');?>" id="name"></td>
      </tr>
      <tr>
        <td><label for="lastName">Prezime:</label></td>
        <td><input type="text" name="ci_lastName" value="<?php echo $session->getSession('lastName');?>" id="lastName"></td>
      </tr>
      <tr>
        <td colspan="2"><label>Datum rodjenja:</label></td>
      </tr>
      <tr>
        <td colspan="2">
          <?php
            $date = $session->getSession('date');
            $fullDate = explode('-',$date);
            //imamo sad datume....
            echo "Godina:<select name='ci_year'>";
            for($i = 1970; $i <= 2017; $i++){
                if ($i == $fullDate[0]){
                    $select = 'selected';
                }else {
                    $select = '';
                }
                echo "<option value='{$i}' {$select}>$i</option>";
            }
            echo "</select>";

            echo "Mesec:<select name='ci_month'>";
            for($i = 1; $i <= 12; $i++){
                if ($i == $fullDate[1]){
                    $select = 'selected';
                }else {
                    $select = '';
                }
                echo "<option  value='{$i}' {$select}>$i</option>";
            }
            echo "</select>";

            echo "Dan:<select name='ci_day'>";
            for($i = 1; $i <= 31; $i++){
                if ($i == $fullDate[2]){
                    $select = 'selected';
                }else {
                    $select = '';
                }
                echo "<option value='{$i}' {$select}>$i</option>";
            }
            echo "</select>";
            ?>
        </td>
      </tr>
    </table>
    <input type="submit" name="ci_submit" value="Promeni">
  </form>
  <a href="?p=profil">Povratak do profila</a>
</div>
