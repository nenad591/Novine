<?php
if(!$session->sessionExists('user_id') && !$session->sessionExists('lever')){
  header('Location: index.php?p=login');
}
if($session->getSession('level') == 'user'){
    header('Location: index.php');
}
include_once 'app/updateNews.php';
include_once 'app/news.php';
?>
<div class="forme">
  <h2>Dodaj novu vest</h2>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype=multipart/form-data>
    <table>
      <tr>
        <td><label for='title'>Naslov*:</label></td>
        <td><input type="text" name="n_title" id='title' value="<?=$uTitle?>"></td>
      </tr>
      <tr>
        <td><label for="content">Sadrzaj*:</label></td>
      </tr>
      <tr>
        <td colspan="2"><textarea name='n_content' id='content'><?=$uContent?></textarea></td>
      </tr>
      <tr>
        <td><label for='category'>Kategorije*:</label></td>
        <td>
          <select name="n_category">
          <?php
          $categorys = Category::getCategory();
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
      <tr>
        <td><label for="tags">Tagovi:</label</td>
        <td><input type="text" name="n_tags" id="tags" value='<?=$uTags?>'></td>
      </tr>
      <tr>
        <td><label for="img">Slika:</label></td>
      </tr>
      <tr>
        <td colspan="2"><input type='file' name='n_img' id="img" value='<?=$uImage?>'></td>
      </tr>
    </table>
    <input type="submit" name="n_submit" value="Dodaj vest">
    <input type="submit" name="u_submit" value="Izmeni vest">
  </form>
</div>
