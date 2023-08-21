<?php
include_once("../models_frontend/model_online_church.php");
class Online{
    
protected  $handle;
 


function __construct(){
$this->handle =new Online_model;


}

   

    
public function save_online($data){
    $online =$this->handle->save_online($data);
    if($online['status']=='success'){
        //direct to online view port;
                header("location:../online_church.php");
    }else{
        header('location:../index.php');
    }
   
}
public function contact($data){
   

    $online =$this->handle->prayer($data);
    header('location:../index.php'); 

}
public function enquire($data){
   
    $online =$this->handle->enquire($data);
    header('location:../index.php');
}
}