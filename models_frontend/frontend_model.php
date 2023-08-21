<?php


if(!isset($_SESSION)){session_start();}
Class Frontend_model {
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
               
public  function site_info(){
                    
                    $sql = "SELECT * FROM church_details";
                    $output=$this->conn->query($sql);
                    
                            
                  
                    $res=$output->fetch_assoc();
                   
                   
                  
                    return $res;
                }

public function get_slides(){
                    
                    $sql = "SELECT * FROM slider";
                    $output=$this->conn->query($sql);
                            
                            
                  
                    $row=array();
			while($res=$output->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;
                }


 public function testimony_index(){
	
    
                    $sql="SELECT* FROM testimonies ORDER by id DESC";
                    $sta=$this->conn->query($sql);
                    
                       
                    $row=array();
                             while($res=$sta->fetch_assoc()){
                                 $row[]=$res;
                                 
                             }
                             return $row;
                 
                 }

               public function featured(){
                $sql="SELECT* FROM ministry ORDER by id DESC";
                $sta=$this->conn->query($sql);
                
                   
                $row=array();
                         while($res=$sta->fetch_assoc()){
                             $row[]=$res;
                             
                         }
                         return $row;

               }
               public function event(){
                $sql="SELECT* FROM events ORDER by id DESC";
                $sta=$this->conn->query($sql);
                
                   
                $row=array();
                         while($res=$sta->fetch_assoc()){
                             $row[]=$res;
                             
                         }
                         return $row;

               }
            }





?>