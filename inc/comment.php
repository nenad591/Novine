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
      if($session->sessionExists('user_id')){
        if($session->getSession('level') == 'admin' || $session->getSession('level') == 'superadmin') {
          echo '<a href="?p=news&id='.$res['news_id'].'">Izmeni post</a>';
        }
      }
      echo "<div class='new'>";
        echo "<div class='news'>";
            echo "<h4>" . $res['title'] . "</h4>";
            echo "<img src='' alt=''>";
            echo "<p>" . $res['content'] . "</p>";
            echo "<span class='time'>Vreme objave: " . $res['dateTime'] . "</span>&nbsp;<b>|</b>&nbsp;";
            if(!empty($res['tags'])){
            echo "<span>Tagovi: ".$res['tags']."</span>";
              }
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
include_once 'app/deleteComment.php';
foreach ($comments as $key => $value):
?>
<div class="comments">
  <div class="info">
    <p><?php echo $value['name'] . ' '. $value['lastName']; ?></p>
    <p><?php echo $value['dateComment']; ?></p>
    <?php
    if($session->sessionExists('user_id')){
      if($session->getSession('user_id') == $value['user_id'] || $session->getSession('level') == 'admin' || $session->getSession('level') == 'superadmin'){
        echo '<a href="?p=comment&nid='. $_GET['nid'] .'&idc='.$value['comment_id'].'">Obrisi komentar.</a>';
      }
    }
    ?>
  </div>

  <div class="comment">
    <p><?php echo $value['comment'];  ?></p>
  </div>
</div>

<?php endforeach; ?>

<!-- OVDE IDU KOMENTARI -->
