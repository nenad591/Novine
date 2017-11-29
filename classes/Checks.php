<?php
class Checks
{
    public static function text($type){
        $regex = "#^[a-zA-Z]*$#";
        if( preg_match( $regex, $type ) ){
            return true;
        }

    }
    public static function iE($type){
        if ( isset( $type ) && ! empty( $type ) ){
            return true;
        }
    }
    public static function email($email){
        if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
            return true;
        }
    }
    public static function pass($pass){
      $uppercase = preg_match('@[A-Z]@', $pass);
      $lowercase = preg_match('@[a-z]@', $pass);
      $number    = preg_match('@[0-9]@', $pass);
      if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
        return true;
      }
    }
    public static function date($date){
      $reg = DateTime::createFromFormat('Y-m-d', $date);
      if($reg){
        return true;
      }

    }
    public static function gender($gender){
      $gender = strtolower($gender);
      if($gender == 'musko' || $gender == 'zensko'){
        return true;
      }
    }
    public static function image($img){
      if($img['type'] == 'image/jpeg' || $img['type'] == 'image/png'){
        return true;
      }
    }
}
