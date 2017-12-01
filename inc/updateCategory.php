<?php
if(!$session->sessionExists('user_id') && !$session->sessionExists('level')){
  header('Location: index.php?p=login');
}
if($session->getSession('level') == 'user'){
  header('Location: index.php');
}
if(isset($_GET['c']) && !empty($_GET['c'])){
  $ccname = $_GET['c'];
}else{
  $ccname = '';
  display('Izaberite kategoriju.');
}
include_once 'app/updateCategory.php';
?>
<div class="forme">
  <h2>Izmeni kategoriju</h2>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <tr>
        <td><label for='name'>Ime:</label></td>
        <td><input type="text" name="cc_name" id='name' value="<?php echo $ccname; ?>"></td>
      </tr>
      <tr>
        <td><label for='category'>Kategorije:</lable></td>
        <td>
          <select name='cc_category' onchange="if(this.value == -1) return; window.location.href='?p=updateCategory&c='+this.value">
            <option value='-1'>Izaberi...</option>
          <?php
            $categorys = Category::getCategory();
            if(empty($categorys)){
              display('Trenutno nema kategorija. <a href="?p=category">Dodajte kategoriju</a>');
              return;
            }
            foreach ($categorys as $k => $v){
              if($ccname == $v['c_name']){
                $selected = 'selected';
              }else{
                $selected = '';
              }
              echo "<option value='{$v['c_name']}' {$selected}>{$v['c_name']}</option>";
            }
           ?>
         </select>
        </td>
      </tr>
    </table>
      <input type="submit" name="cc_submit" value="Izmeni"> <br>
      <a href="?p=addCategory">Dodaj kategoriju</a> | <a href="?p=deleteCategory">Obrisi kategoriju</a>
  </form>
</div>
