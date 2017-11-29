<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once 'config.php';
$conn = DB::getInstanc();
$session = new Session();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Novine</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id='wrap'>
      <?php
      //ucitavanje navigacije
        include_once 'inc/nav.php';
      ?>
      <div id='main'>
        <?php
        if (isset($_GET['p']) && !empty($_GET['p'])) {
          if (file_exists('inc/' . $_GET['p'] . '.php')) {
            include_once 'inc/' . $_GET['p'] . '.php';
          }else{
            include_once 'inc/pocetna.php';
          }
        }else{
          include_once 'inc/pocetna.php';
        }?>
      </div>
      <?php
      //ucitavanje footera
      include_once 'inc/footer.php';
      ?>
    </div>
    <script src="js/main.js">

    </script>
  </body>
</html>
