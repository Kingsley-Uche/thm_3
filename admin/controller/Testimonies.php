<?php
if(!isset($_SESSION)){session_start();}
require_once('../models/model_testimony.php');
Class testimonies{
    private $all_testimony;
    
    function __construct(){
       
        $this->all_testimony =new Model_testimony;
            }
    


            function add_testimony($page){
             
               
                $goto_page= new Route;
                $goto_page->access_page($page);}

    function testimonies_index($page){
//fetch all testimonies

$testimonies =$this-> all_testimony->testimony_index($page);

$_SESSION['testimonies']=$testimonies;
return;

    }

function testimony_edit($id){
  $response=$this->all_testimony->testimony_edit($id);
 $_SESSION['testimony_edit']=$response;

$page='edit_testimony';
$this->testimony_page($page);
}


function testimony_delete($id){
  $response=  $this->all_testimony->testimony_delete($id);
 $page='testimonies_index';
 $this->testimonies_index($page);
 $this->testimony_page($page);
  
}

function testimony_page($page){
    require('../router/route.php');
    $goto_page= new Route;
    $goto_page->access_page($page);

}

    function testimony_update($details){
        $page='testimonies_index';
        $response=$this->all_testimony->testimony_update($details);
        $this->testimonies_index($page);
        $this->testimony_page($page);
  
    }
            }



?>