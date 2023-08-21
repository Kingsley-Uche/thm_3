<?php

if(isset($_POST['register'])){
	
	$data =[];
	$data['fname']= $_POST['fname'];
	
	$data['lname']= $_POST['lname'];
	$data['email']= $_POST['email'];
	
	$data['password']= $_POST['password'];
	
	$data['user_type']= $_POST['user_type'];
	$data['phone'] =$_POST['phone'];
	require("../models/users.php");
	$save= new users;
	
	$status =$save->signUp($data);
	echo $status;

	
	
	
	
}else{
	if(isset($_POST['sign_in'])){
		
		
		
		
require('../controller/Auth.php');
$sign_in = new Auth;
$data=[];


$data['username'] =$_POST['username'];
$data['password']=$_POST['password'];
$data['user_type'] =$_POST['user_type'];
//$loger = $_POST['loger'];

$sign_in->login($data);
		
	}else{
		

	}
	
	
	
}if(isset($_GET['id'])){
	$info=$_GET['id'];
	
	require_once('../router/route.php');
	$goto = new Route;
	$info = explode('/',$info);
	$class= $info[0];
	$method =$info[1];

	
	if(include('../controller/'.$class.'.php')){
		$resource =new $class;

		$outcome =$resource->$method($method);
		
		
	}else{

	}
	
	
	


	$goto->access_page($method);
}
	

?>