<?php
if(isset($_GET['nid']) && !empty($_GET['nid'])){
  if(!is_numeric($_GET['nid'])){
    header('Location: index.php');
  }else{
    $id = $_GET['nid'];
    $res = News::getOneNews($id);
    if(empty($res)){
      display('Nepostojeca vest. <a href="index.php">Odaberi vest?</a>');
    }else{
      echo "<div class='new'>";
        echo "<div class='news'>";
            echo "<h4>" . $res['title'] . "</h4>";
            echo "<img src='' alt=''>";
            echo "<p>" . $res['content'] . "</p>";
            echo "<span class='time'>Vreme objave: " . $res['dateTime'] . "</span>";
            echo "<span class='autor'>Autor: " . $res['name'] . ' ' . $res['lastName'] . "</span>";
        echo "</div>";
      echo "</div>";
    }
  }
}else{
  header('Location: index.php');
}
include_once 'app/comment.php';
?>
<div class="forme">
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <tr>
        <td><label for="comment"><h2>Komentar<h2></label></td>
      </tr>
      <tr>
        <td><textarea value='' name="comment" rows="8" cols="80" id="comment"></textarea></td>
      </tr>
    </table>
    <input type="hidden" name="news_id" value="<?php echo $res['news_id'];?>">
    <input type="submit" name="comment_submit" value="Prokomentarisi">
  </form>
</div>

<h2>Komentari</h2>
<?php
$id = $res['news_id'];
$comments = Comment::getAllComments($id);
if(empty($comments)){
  display('Trenutno nema komentara, budi prvi!', 'green');
  return;
}
foreach ($comments as $key => $value):
?>
<div class="comments">
  <div class="info">
    <p><?php echo $value['name'] . ' '. $value['lastName']; ?></p>
    <p><?php echo $value['dateComment']; ?></p>
  </div>

  <div class="comment">
    <p><?php echo $value['comment'];  ?></p>
  </div>
</div>

<?php endforeach; ?>





<!-- OVDE CE DA IDU KOMENTARI -->
