<?php
class DB{
  private static $_instanc = null;
  
  public static function getInstanc(){
    if (!self::$_instanc) {
      self::$_instanc = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS);
    }return self::$_instanc;
  }
}
?>
