<?php
if(!isset($_SESSION)){session_start();}
Class Route{


   public function goto_homepage(){
       
       if(isset($_SESSION['user_type'])){
           
        header('location:../views/home.php');

       }else{
           
           $this->error_page();
       }
    

   
    }
    public function access_page($page){
       
        
        if(isset($_SESSION['user_type'])){
           
         
            header('location:../views/'.$page.'.php');


        }else{
            $this->error_page();
        }
       
    }

    public function error_page(){
        require_once('failed.php');
        $unauthorized =new Failed;
        $unauthorized-> unathorised();
    }
}


?>