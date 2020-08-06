<?php

    

class DB {
    
    private static $instance = NULL;
    public static function getInstance() {
      require 'SQL/config.php';
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        //self::$instance = new PDO('mysql:host=localhost;dbname=portfolio', 'localhost', '', $pdo_options);
        self::$instance = new PDO($PDO, $user, $password, $pdo_options);
      }
      return self::$instance;
    }
}

//check to make sure link is working correctly for details
//echo $check;
