<?php


if(!isset($_SESSION)){session_start();}
require_once("../router/route.php");
Class Form{
    
    function testimony_add($data){
        require_once('../models/model_testimony.php');
        $testimony = new Model_testimony;
       $save= $testimony->testimony_add($data);
       $page='add_testimony';
       if($save==1){
       
        $_SESSION['update']="<div class='alert alert-success'>Saved Successfully</div>";
        $this->direction($page);
       }else{
        $_SESSION['update']="<div class='alert alert-danger'>Failed</div>";
       
        $this->direction($page);
       }
       

    }

function direction($page){
    


    $direct =new Route;
    $direct->access_page($page);

}
    
}
?>