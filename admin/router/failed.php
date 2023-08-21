<?php
if(!isset($_SESSION)){session_start();}
Class Failed{

function goto($page){
	
    $page_goto =$page['page'];
    $_SESSION['updated'] =$page['error'];
    //header('location:fastfix.php?success=$check');
	var_dump($page_goto);
	
    header('location:../'.$page_goto);

}

function unathorised(){
	
	if(!isset($_SESSION['admin'])){
		if($_SESSION['user_type']!= 1 ||$_SESSION['user_type']!= 2 ){
			$page_goto='unauthorised.php';
			header('location:../'.$page_goto);
			
		}
		
	}
}
}

?>