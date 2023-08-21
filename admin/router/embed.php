<?php
//implement session 
if(!isset($_SESSION)){session_start();}
if(!empty($_SESSION['user_type'])){
if(isset($_POST['embed'])||$_POST['view']){
    require('../controller/embed.php');
    $embed =new Embed;
    if(isset($_POST['embed'])){
       

        $check =$_POST['live_url'];
        $title =$_POST['live_caption'];
       $film1=explode("&href=", $check);
       
                               $film_2 =explode('"',$film1[1]);
                               $link =$film_2[0];
                               $data =[];
                               $data['link']=$link;
                               $data['caption']=$title;
                               if(is_numeric($_POST['edit_id'])){
                                   $data['edit_id']=$_POST['edit_id'];
                                  
                               }else{
                                   
                               

                               }
  
                               $embed->save_live_video($data);

    }else if(isset($_POST['view'])){
        if($_SESSION['user_id']==$_POST['view']){
            $data=$_SESSION['user_id'];
           $embed->view_embed($data);
        }

    }
   
                    			
                    		
}else{
   //redirect to unathorized
}


}

?>