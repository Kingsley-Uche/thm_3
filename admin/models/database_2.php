<?php

//Built using advanced security
Class Database{
    protected $conn;



   private $hostname="localhost";
   private $username="root";
   private $password="";
   private $database="church_app";


   public function __construct()
   {
    try {
        $dsn="mysql:host={$this->hostname};dbname={$this->database};charset=utf8";
        $options =array(PDO::ATTR_PERSISTENT);
        $this->conn=new PDO($dsn,$this->username,$this->password,$options);
    } catch (PDOException $e) {
        echo "Connection Error:".$e->getMessage();
        
    }
   }


}

?>