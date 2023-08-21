<?php

require("../models/model_ministry.php");
Class Ministry{
    private $all_ministry;
    function __construct(){
       
        $this->all_ministry =new Model_ministry;
            }
    
   
   
   
   
   
  function ministry_index($page){
//fetch all testimonies

$videos =$this-> all_ministry->ministry_index($page);


$_SESSION['videos']=$videos;
$page='ministry_index';
$this->ministry_page($page);
//return;

    }

    
    function add_ministry($page){
           
               
        $goto_page= new Route;
        $goto_page->access_page($page);}

function ministry_edit($id){
  $response=$this->all_ministry->ministry_edit($id);
 $_SESSION['videos_edit']=$response;


$page='ministry_edit';
$this->ministry_page($page);
}


function ministry_delete($id){
  
  $response=  $this->all_ministry->ministry_delete($id);
 $page='ministry_index';
 $this->ministry_index($page);
 $this->ministry_page($page);
  
}

function ministry_page($page){
   // require('../router/route.php');
    $goto_page= new Route;
    $goto_page->access_page($page);

}

    function ministry_update($details){
        $page='ministry_index';
        $response=$this->all_ministry->ministry_update($details);
       
        $this->ministry_index($page);
        $this->ministry_page($page);
  
    }
    
    
    function ministry_save($details){
        
        $page='ministry_index';
        $response=$this->all_ministry->ministry_add($details);
        $this->ministry_index($page);
        $this->ministry_page($page);

    }
}


?>
