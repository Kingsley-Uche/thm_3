<?php
if(!isset($_SESSION)){session_start();}
include_once('route.php');

if(isset($_GET['id'])){
    $info=$_GET['id'];
   
    require_once('../router/route.php');
    $goto = new Route;
    $info = explode('/',$info);
    $class= $info[0];
    $method =$info[1];
  
    if(include('../controller/'.$class.'.php')){
        
        $resource =new $class;
    

        $resource->$method($method);
       
        
        
    }else{
        
       
        $goto->access_page($method);
    }

}else if($_POST){
    
    
    $info=$_POST['method'];
    require_once('../router/route.php');
    $goto = new Route;
    $info = explode('/',$info);
    $class= $info[0];
    $method =$info[1];
 

    if(include('../controller/'.$class.'.php')){
        
        $resource =new $class;
        $_SESSION['post']=$_POST;
       

        $resource->$method($method);
       
      
       
        
    }else{
        
       
        $goto->access_page($method);
    }
   
    
}


?>