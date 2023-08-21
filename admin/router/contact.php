<?php
if(!isset($_SESSION)){session_start();}
 include_once('route.php');
 
if(isset($_POST['contact'])&& trim($_POST['contact'])!==''){
    $type=$_POST['contact'];
  
                                   if($type=='add_follow_up'||$type=='edit/delete/follow_up'){
                                                    //process follow up

                                                    require_once("../controller/follow_up.php");
                                                    $follow =new Follow_up;
                                                    if($type=='add_follow_up'){
                                                    
                                                        $follow->save_member($_POST);
                    
                                                    } else if($type=='edit/delete/follow_up'){

                                                                
                                                        if(isset($_POST['follow_up_delete']) && !empty($_POST['follow_up__delete'])){

                                                        }else if(isset($_POST['follow_up_edit'])&& !empty($_POST['follow_up_edit'])){
                                                            $id=$_POST['follow_up_edit'];
                                                            $follow-> member_edit($id);
                                                          //run edit

                                                        }elseif(isset($_POST['follow_up_update'])&&!empty($_POST['follow_up_update'])){
                                                           
                                                           $data=$_POST;
                                                            $follow->member_update($data);                                         
                                                          }
                    

                                                    
                                                    
                                                }
}  if($type=='add_member'||$type=='edit/delete/members'){
                                    require_once('../controller/member.php');
                                    $member =new Member;
                                    //     //process for a new member
                                    if($type=='add_member'){
                                        $member->save_member($_POST);

                                    }else if($type='edit/delete/members'){
                                                                            
                                                                            //process edit or delete of members;
                                                                            if(isset($_POST['member_delete']) && !empty($_POST['member_delete'])){
                                                                                $id =$_POST['member_delete'];
                                                                                $member->delete_member($id);

                                                                            }elseif(isset($_POST['memb_edit'])){
                                                                                
                                                                                    $id=$_POST['memb_edit'];
                                                                            $member-> member_edit($id);
                                                                                //run edit
                                                                            }else if(isset($_POST['member_update'])||!empty($_POST['member_update'])){
                                                                            
                                                                                $id =$_POST['member_update'];
                                                                                $data =$_POST;
                                                                                $member->member_update($data);
                                                                                
                                                                                //run update
                                                                            }else{
                                                                                //no command issued;
                                                                                
                                                                            }


                                                                }else{
                                                                

                                                                }
                                //END OF PROCESSING FOR MEMBERS
                                }else if($type=='add_convert'||$type=='edit/delete/converts'){
                           
                                    //     //process for a new covert
                                    require_once('../controller/convert.php');
                                   
                                    $member =new Convert;
                                    //     //process for a new member
                                    if($type=='add_convert'){
                                        $member->save_member($_POST);

                                    }else if($type='edit/delete/converts'){
                                                                            
                                                                            //process edit or delete of members;
                                                                            if(isset($_POST['convert_delete']) && !empty($_POST['convert_delete'])){
                                                                                $id =$_POST['convert_delete'];
                                                                                $member->delete_member($id);

                                                                            }elseif(isset($_POST['convert_edit'])){
                                                                                
                                                                                    $id=$_POST['convert_edit'];
                                                                            $member-> member_edit($id);
                                                                                //run edit
                                                                            }else if(isset($_POST['convert_update'])||!empty($_POST['convert_update'])){
                                                                                $id =$_POST['convert_update'];
                                                                                $data =$_POST;
                                                                                $member->member_update($data);
                                                                                
                                                                                //run update
                                                                            }else{
                                                                                //no command issued;
                                                                                
                                                                            }


                                                                }else{
                                                                

                                                                }

                                }else{
                                   
                                    $type=$_POST['contact'];
                                    if($type=='bulk_member'){
                                        require_once('../controller/member.php');
                                        $member =new Member;
                                        $data=$_FILES;
                                        //var_dump($_FILES);
                                        
                                    
                                        $member->member_bulk($data);
                                       

                                    }
                                    
                                    die();
                                }

                                
    
   }
   //end of $_POSTe
   
   
   
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


  


// if(isset($_POST['contact'])=='add_member'){
//     //process for a new member

// }else if(isset($_POST['contact'])=='add_convert'){
//     //process for a new covert


// }else if(isset($_POST['contact'])=='add_follow_up'){
//     //process for follow up

// }




?>