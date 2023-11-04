<?php
if(!isset($_SESSION)){session_start();}
Class Database{
     protected $conn;



    private $hostname="localhost";
    private $username="root";
    private $password="";
    private $database="church_app";
	function __construct(){
                   

                    $this->conn = new Mysqli($this->hostname,$this->username,$this->password,$this->database);
                   if($this->conn->connect_errno){
                       printf("Connection to database failed;%s\n",$this->conn->connect_error);
                       exit();
                   }
                
                        
                }
               
                function site_info(){
                    $sql = "SELECT * FROM church_details";
                    $output=$this->conn->query($sql);
                            
                            
                  
                    $res=$output->fetch_assoc();
                   
                    return $res;
                }
            }



?>