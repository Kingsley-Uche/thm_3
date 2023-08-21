<head>
<?php

if(!isset($_SESSION)){session_start();}
include_once("./config/process_fetch.php");

if(is_null($_SESSION['church_info'])){
    $path_logo='';
    $path_past='';
    $about_us='';
    $website_church='';
    $email_church='';
    $phone_church='';
    $testimonies='';
    $address_church='';
    $events='';
    $featured='';




}else{
    $path_logo =str_replace('..','',$_SESSION['church_info']['path_logo']);
$path_past =str_replace('..','',$_SESSION['church_info']['path_past']);
$about_us =$_SESSION['church_info']['about_us'];
$website_church =$_SESSION['church_info']['website_church'];
$email_church =$_SESSION['church_info']['email_church'];
$phone_church =$_SESSION['church_info']['phone_church'];
$testimonies =$_SESSION['testimonies'];
$address_church =$_SESSION['church_info']['address_church'];
$events =$_SESSION['events'];
$featured =$_SESSION['featured'];
    
}


?>
<title>Treasure House Bible Church</title>
    <!--<title><?php echo $_SESSION['church_info']['name_church'];?></title>-->
    <meta charset="utf-8">
    <meta name="description" content="Best church in Ojodu and Ikeja, Bible Church,Pastor David Jelmark,Jelmark Ministries,Treasure House, Treasure House Bible Church Ojodu">
	 <meta name="author" content="Olekamma Kingley Uche">
    <meta name="keywords" content="Lagos,People of God,Ikeja, Church, OJodu,Treasure House,Treasure, Treasure House Bible Church, David Jelmark, Church in Lagos, Lagos, Nigeria, Christianity,Bible, God">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stylez.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./admin/<?php echo $path_logo ?>">
</head>

<style>

.float{
	position:fixed;
	width:250px;
	height:80px;
	bottom:60px;
	right:100px;
	background-color:#FFFFFF;
	color:#FFF;
	border-radius:15px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
    margin-right:10px;
}

.map-reponsive{
    overflow:hidden;
    padding-bottom:20%;
    position:relative;
    height:100%;
    
}
.map-reponsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
@media only screen and (max-width: 600px) {
  .slidee{ height:35vh!important;
}
.spacee{
    height:8vh!important;
}
    
}
</style>
<?php


$slides=$_SESSION['slides'];


?>
<style>


    .smart{
    background-color:#083C69 !important;
    color: #FFFFFF

    }
</style>
