<?php

class Session
{
   public function __construct(){
       if(!isset($_SESSION)){
         $this->ini_set();
       }
   }
   public function ini_set(){
       session_start();
   }
   public function setSession($key, $value){
       $_SESSION[$key] = $value;
   }
   public function sessionExists($key){
       if(isset($_SESSION[$key])){
           return true;
       }return false;
   }
   public function getSession($key){
       return $_SESSION[$key];
   }
   
   public function destroySession(){
       foreach ($_SESSION as $key => $value){
           unset($_SESSION[$key]);
       }
       session_destroy();
   }
}
