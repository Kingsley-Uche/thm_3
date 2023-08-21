<?php
if(!isset($_SESSION)){session_start();}
require("../models/model_enquiries.php");
Class Enquiries{

    private $all_enquiry;
    function __construct(){
    
        $this->all_enquiry=new Model_enquiries;
       
                }


    function index(){
      $enquire=  $this->all_enquiry->view_enquiry();
      $_SESSION['enquiry']=$enquire;
      $page="index_enquiry";
      $this->enquire_page($page);
       
        
        
    }
    function prayer_request(){
        $prayer_request= $this->all_enquiry->prayer_request();
        $_SESSION['prayer_req']=$prayer_request;
        $page="prayer_request";
        $this->enquire_page($page);
    }

    function enquire_page($page){
      
        $goto_page= new Route;
        $goto_page->access_page($page);
    
    }
}



?>