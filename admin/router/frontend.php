<?php
if(!isset($_SESSION)){session_start();}
//Check fo
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

if(isset($_POST['upload_file'])){
    require_once('../router/route.php');
    include("../controller/frontend.php");		
				 
    $push = new Frontend;
    $images =$_FILES['fileUpload'];
    $acceptable_format=array('image/jpg','image/png','image/jpeg','application/pdf');
    
    $count =count($images['name']);
    $image =[];
    $slider='slider';
    for($i=0;$i<$count;$i++){
     
        if($images['name'][$i]!=''){
          $images_new = new stdClass();
          $file_nature =explode('.',$images['name'][$i]);
          $ext =$file_nature[1];
          $file_name= $file_name=substr($file_nature[0],0,10);
                $images_new->name=$images['name'][$i];
                $images_new->file_type =$images['type'][$i];
                $images_new->tmp_name=$images['tmp_name'][$i];
               
                $prf=$slider.'_'. $file_name.'.'.$ext;
               $path="../slider/".$prf;
               $images_new->path =$path;
                

               $image[] =$images_new;


            // }
           
          
        }
    }
      
foreach($image as $imagez=>$value){

  
   
   
    
    if(!in_array($value->file_type, $acceptable_format)){
                $_SESSION['update']="<div class='alert alert-danger'> file type is not supported. Please upload a picture</div>";
                $page='frontend_index';
                $push->frontend_page($page);
               
            }else{
           
               
                $deta['name']=$slider.$file_name.'.'.$ext;
                $deta['path']=$value->path;
               
                move_uploaded_file( $value->tmp_name, $value->path);
                $push->frontend_slider_save($deta);
              
             
                
    


  
}
    
}

}elseif($_POST['frontend']||!empty($_POST['frontend'])){
    require_once('../router/route.php');
   $type =$_POST['frontend'];
   $container = explode('/',$type);
   $class=$container['2'];
   if(include('../controller/'.$class.'.php')){
       $_SESSION['post_item']=$_POST; 
       $_SESSION['post_files']=$_FILES;    
    $resource =new $class;

    if(isset($_POST[$class.'_edit'])){

        $method=$class.'_'.'edit';

    }else if(isset($_POST[$class.'_delete'])){
        $method =$class.'_'.'delete';
  
      
    }elseif(isset($_POST[$class.'_update'])){
        $method =$class.'_'.'update';
        
        if(isset($_POST['frontend_update'])&& $_POST['frontend_update']=='Upload_sliders'){
            
            $push = new Frontend;
            //upload files and overwrite existing
            $acceptable_format=array('image/jpg','image/png','image/jpeg','application/pdf');
              $picture =$_FILES["logo_id"];
                $type= $_FILES ["logo_id"]["type"];
                $file_nature =explode('.',$picture['name']);
                $file_name=substr($file_nature[0],0,10);
                $ext =$file_nature[1];
                $pic_id =$_POST['slider_id'];
                $path="../slider/".$file_name.'.'.$ext;
               

            if(!in_array( $type, $acceptable_format)){
                $_SESSION['update']="<div class='alert alert-danger'> file type is not supported. Please upload a picture</div>";
                $page='frontend_index';
                $push->frontend_page($page);
               
            }else{
              

           
           
            $deta['id']= $pic_id;
                $deta['name']=$file_name.'.'.$ext;
                $deta['path']=$path;
                move_uploaded_file($picture['tmp_name'], $path);
                $push->frontend_update($deta);
            
             
                
    


  
}


        }

    }



    $resource->$method($method);
   
    
    
}else{
    
   
    $goto->access_page($method);
}

  
   

}

?>