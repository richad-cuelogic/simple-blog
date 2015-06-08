<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
    	   $self::$instance  = new mysqli($DB_SERVERNAME, $DB_USERNAME, $DB_PASSWORD);
    	   if ($self::$instance ->connect_error){
    		 die("Connection failed: " . $conn->connect_error);
    	   }
    	   else{
    	   	return self::$instance ;
    	   }
      
    }
    public static function insert($tablname,$data) {
    	   $sql="INSERT INTO $tablname VALUES ($data);";
      
    }
  }
  
 ?>


