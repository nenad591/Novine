<?php
if(isset($_GET['s']) && !empty($_GET['s'])){
  $search = $_GET['s'];
  echo "<b>Trazili ste:</b> <i>". $search . "</i>";
  $search = trim($search);
  $res = News::getLike($search);
  if(empty($res)){
    display('Zeljeni sadrzaj nije pronadjen. <a href="index.php">Vrati se na pocetnu</a>');
  }
  foreach ($res as $key => $value) {
    
    echo "<div class='new'>";
          echo "<div class='news'>";
          echo "<h4>" . $value['title'] . "</h4>";
          if(!empty($value['image'])){
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $value['image'] ).'"/>';
          }
          echo "<p>" . $value['content'] . "</p>";
          echo "<span class='time'>Vreme objave: " . $value['dateTime'] . "</span>";
          echo "<span class='autor'>Autor: " . $value['name'] . ' ' . $value['lastName'] . "</span>";
          echo "<footer><a href='?p=comment&nid=" . $value['news_id'] . "'>Komentari</a></footer>";
      echo "</div>";
    echo "</div>";
  }
  return;
}
?>

<div id='demo'>

</div>
<h2>Najnovije vesti</h2>
<?php
$res = News::distinct();
if(empty($res)){
  display('Trenutno nema vesti.');
  return;
}
foreach ($res as $key => $value) {
  $news = News::getOneFromAll($value['c_name']);
  echo "<div class='new'>";
    echo "<h3><a href='?s=". $news['c_name'] ."'>" . $news['c_name'] . "</a><h3>";
    echo "<div class='news'>";
        echo "<h4>" . $news['title'] . "</h4>";
        if(!empty($value['image'])){
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $value['image'] ).'"/>';
        }
        echo "<p>" . $news['content'] . "</p>";
        echo "<span class='time'>Vreme objave: " . $news['dateTime'] . "</span>";
        echo "<span class='autor'>Autor: " . $news['name'] . ' ' . $news['lastName'] . "</span>";
        echo "<footer><a href='?p=comment&nid=" . $news['news_id'] . "'>Komentari</a></footer>";
    echo "</div>";
  echo "</div>";
}
?>
