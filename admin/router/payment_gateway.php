<?php
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

}
?>