<!DOCTYPE html>
<html lang="en">
<?php

include("components/head.php");

?>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">


       <?php
       include_once('components/naver.php');
       ?>
        <!-- background-image: url('images/bg_1.jpg')-->
       
       
       <?php if(isset($_SESSION['update'])&&!empty($_SESSION['update'])){
         
         echo $_SESSION['update'];
         unset($_SESSION['update']);
       }?></div>
<?php

include("components/slide.php");
?>
<div class='mb-5 '></div>
<?php
include_once('components/about_us.php');
?>

      
        <!-- .section -->
        <?php
        include_once('components/trend_pad.php')?>
        <!--banner-->
        
       <?php
       include_once('components/banner.php');
       ?>

<div class='mb-5 '></div>

<div class='float'>
    <a href="#" data-toggle="modal" data-target="#modalWatchService"><img src='images/live.gif' class='img-fluid'/><i class="icon-long-arrow-up text-danger ftco-heading-2"><span style='font-size:30px'> Click here</span></i></a>
    </div>
    
<?php include_once("contact.php")?>






      