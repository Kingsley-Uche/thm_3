<?php
if(!isset($_SESSION)){session_start();}
Class Database{
     public $conn;
	function __construct(){
                    $hostname="localhost";
                    $username="root";
                    $password="";
                    $database="church_app";

                    $this->conn = new Mysqli($hostname,$username,$password,$database);
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