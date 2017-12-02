<?php
//KOnstante, pristup za bazu podataka
define('DBHOST', 'localhost');
define('DBNAME', 'novinarnica');
define('DBUSER', 'root');
define('DBPASS', 'nenad.0159');
//KOnstanta za SO KRIPTVANJE ..
spl_autoload_register(function ($class_name) {
    require_once 'classes/' . $class_name . '.php';
});


function display($text, $color = '#a02323'){
  echo "
  <div style='background:" .  $color . ";color: #919e53; text-align: center; padding:7px;font-weight:bold;'>" . $text . "</div>";
}

?>
