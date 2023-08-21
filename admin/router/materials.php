<?php

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
	
	
	


	
}else{
    if(isset($_POST)){
		if(isset($_POST['church_details'])){
			
			$deta =[];
				
			$deta['name_church']=$_POST['name_church'];
				$deta['phone_church']=$_POST['phone_church'];
				$deta['email_church'] =$_POST['email_church'];
				$deta['website_church'] = $_POST['website_church'];
				$deta['name_church']=$_POST['name_church'];
				$deta['address_church']= $_POST['address'];
				if(isset($_POST['id'])&&$_POST['church_id']!=''){
					$deta['id'] =$_POST['id'];

				}
				
				$deta['about_us']=$_POST["about_us"];

				

				include("../controller/church_details.php");		
						 
				 $push = new church_details;
				
				 if(!empty($_FILES['logo_id'])||!empty($_FILES['past'])){
					 
						
					if(isset($_FILES['logo_id'])&& !empty($_FILES['logo_id']["tmp_name"])){
						
						$user ='logo';
						$filetype= ($_FILES)['logo_id']['type'];
						$filename=strtolower(($_FILES)['logo_id']['name']);
						//$ext=explode(".",$filename);
						
						$prf=$user.$filename;
						$filesize=($_FILES)['logo_id']['size'];
						$error=($_FILES)['logo_id']['error'];
						$acceptable_format=array('image/jpg','image/png','image/jpeg','application/pdf');
						$tmpname_logo=($_FILES)['logo_id']['tmp_name'];
						$path_logo="../profile_pic/".$prf;
						
						if(!in_array($filetype, $acceptable_format)){
							$_SESSION['update']="<div>file type is not supported for church logo. Please upload a picture</div>";
							
							//header('location:dash.php');
						}else{
						
							$deta['tmp_name_logo']=$tmpname_logo;
							$deta['path_logo']=$path_logo;
							$deta['file']=$user;
							move_uploaded_file($tmpname_logo, $path_logo);
							
							//$update =$push->save_detail($deta);
							//$obj->profile_picture($user,$path);
						}


					}if(isset($_FILES['past_pic'])&& !empty($_FILES['past_pic']["tmp_name"])){
					
						$user ='past_pic';
						$filetype= ($_FILES)['past_pic']['type'];
						$filename=strtolower(($_FILES)['past_pic']['name']);
						//$ext=explode(".",$filename);
						
						$prf=$user.$filename;
						$filesize=($_FILES)['past_pic']['size'];
						$error=($_FILES)['past_pic']['error'];
						$acceptable_format=array('image/jpg','image/png','image/jpeg','application/pdf');
						$tmpname_past=($_FILES)['past_pic']['tmp_name'];
						$path_past="../profile_pic/".$prf;
					
						
						if(!in_array($filetype, $acceptable_format)){
							$_SESSION['update']="<div>file type is not supported for Pastor's picture. Please upload a picture</div>";
							// $page='church_details';
							// $push-> church_page($page);
							//header('location:dash.php');
						}else{
						
							$deta['tmp_name_past']=$tmpname_past;
							$deta['path_past']=$path_past;
							$deta['file']=$user;

							
							
						 move_uploaded_file($tmpname_past, $path_past);
							
							// $update =
							//$obj->profile_picture($user,$path);
						}
						
					}
					
					
					$push->save_detail($deta);

				



				 }else{

					$push->save_detail($deta);



				 }
			
			//print_r($_FILES);
		

		}else{
			include_once('../controller/ministry.php');
        $handle = new Ministry;
        $data = $_POST;
        if(isset($_POST['ministry_video'])){

            $handle->ministry_save($data);
            


            
         

        }else if(isset($_POST['ministry_delete'])||isset($_POST['ministry_edit'])){
			
			if(isset($_POST['ministry_delete'])){
				$id =$_POST['ministry_delete'];
				$handle->ministry_delete($id);

			}else{
				$id =$_POST['ministry_edit'];
				$handle->ministry_edit($id);

				}
			}else if(isset($_POST['ministry_update'])){
				$details=[];
				$details =$_POST;
				
				$handle->ministry_update($details);

			}



		}
        //check for insert
        
			

					
		}
       
    }



?>