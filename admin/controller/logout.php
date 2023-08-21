<?php
if(!isset($_SESSION)){session_start();}
if(isset($_GET['id'])&& $_GET['id']=='log_out'){
    session_destroy();
    header('location:../index.php');

}

?>