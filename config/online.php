<?php
if(!isset($_SESSION)){session_start();}

if(isset($_POST['online_church'])){
   
    include_once("../controller_frontend/online_church_controller.php");
    $online =new Online;
    $data=[];
    $data=$_POST;
    $data['POST']=$_POST;
    $data['checker']='online';
   $update= $online-> save_online($data);
   
}else if(isset($_POST['prayer_request'])){

include_once("../controller_frontend/online_church_controller.php");
$page =new  Online;
$page->contact($_POST);

}else if(isset($_POST['enquiry_name'])){

include_once("../controller_frontend/online_church_controller.php");
$page =new  Online;
$page->enquire($_POST);
}


?>