<?php
if(!$session->sessionExists('user_id') && !$session->sessionExists('level')){
  header('Location: index.php?p=login');
}
if($session->getSession('level') == 'user'){
  header('Location: index.php');
}
include_once 'app/deleteCategory.php';
?>
<div class="forme">
  <h2>Obrisi kategoriju</h2>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table>
      <tr>
        <td><label for="category">Kategorija:</label></td>
        <td>
          <select name='d_category'>
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
                echo "<option value='{$v['category_id']}' {$selected}>{$v['c_name']}</option>";
              }
             ?>
         </select>
       </td>
      </tr>
    </table>
    <input type="submit" name="d_submit" value="Obrisi"> <br>
    <a href="?p=addCategory">Dodaj kategoriju</a> | <a href="?p=updateCategory">Izmeni kategoriju</a>
  </form>
</div>
