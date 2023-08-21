<head>

<?php

if(!isset($_SESSION)){session_start();}
if(isset($_SESSION['church_info'])){
    $path_logo =str_replace('..','',$_SESSION['church_info']['path_logo']);

}
if(isset($_SESSION['testimonies'])){
    $testimonies =$_SESSION['testimonies'];
}
if(isset($_SESSION['today_birthday'])){
    if(is_countable($_SESSION['today_birthday'])){
        $num_today_birthday =count($_SESSION['today_birthday']);

    }else{
        $num_today_birthday='';
    }
    

}
if(isset($_SESSION['month_birth'])){
    if(is_countable($_SESSION['month_birth'])){
        $num_month_birthday =count($_SESSION['month_birth']);

    }else{
        $num_month_birthday ='';
    }
  

}

?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Ministry software developed by kammasoft Technologies">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Ministry Application</title>
    <link rel="apple-touch-icon" href="../theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/pages/dashboard-ecommerce.css">
    <link type="text/css" rel="stylesheet" href="../assetz/jquery-te-1.4.0.css">
    
    
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  
     </head>