<?php
include_once('models_frontend/frontend_model.php');
class Frontend{
    
protected  $handle;
 


function __construct(){
$this->handle =new Frontend_model;


}

    private function fetch_all(){

      $info=  $this->handle->site_info();
      $_SESSION['church_info']=$info;
      
      
     
        return $info;

    }
    private function slides(){
        $slides =$this->handle->get_slides();
$_SESSION['slides']=$slides;
    }
    private function testimonies(){
        $_SESSION['testimonies']=$this->handle->testimony_index();
    }
    private function featured_messages(){
        $_SESSION['featured']=$this->handle->featured();
    }
    private function event(){
        $_SESSION['events']=$this->handle->event();
    }

    public function call_fetch(){
        
    $this->fetch_all();
   $this->slides();
   $this->testimonies();
   $this->event();
   $this->featured_messages();
    }
    


 
}


?>