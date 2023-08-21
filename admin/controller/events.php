<?php
require("../models/model_events.php");
Class Events{
    private $all_events;
    function __construct(){
       
        $this->all_events =new Model_events;
            }
    
    function events_index($page){
//fetch all testimonies

$events =$this-> all_events->event_index($page);

$_SESSION['events']=$events;
return;

    }

    
    function add_events($page){
             
             $page  ='events_index';
        $goto_page= new Route;
        $goto_page->access_page($page);}

function events_edit($id){
  $response=$this->all_events->event_edit($id);
 $_SESSION['events_edit']=$response;

$page='edit_events';
$this->events_page($page);
}


function events_delete($id){
  $response=  $this->all_events->event_delete($id);
 $page='events_index';
 $this->events_index($page);
 $this->events_page($page);
  
}

function events_page($page){
    require('../router/route.php');
    $goto_page= new Route;
    $goto_page->access_page($page);

}

    function events_update($details){
        $page='events_index';
        $response=$this->all_events->event_update($details);
       
        $this->events_index($page);
        $this->events_page($page);
  
    }
    
    
    function events_save($details){
        
        $page='events_index';
        $response=$this->all_events->events_add($details);
        $this->events_index($page);
        $this->events_page($page);

    }
}


?>