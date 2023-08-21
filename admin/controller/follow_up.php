<?php
require_once('../models/model_follow_up.php');
if(!isset($_SESSION)){session_start();}
Class Follow_up{


    private $member;
    protected $f_name ;
    protected $l_name ;
    protected $email;
    protected $phone;
    protected $address;


    function __construct(){
    
        $this->member=new Model_follow_up;
       
                }

               

    function save_member($data){
       // var_dump($data);
         $f_name = $data['fname'];
         $l_name=$data['lname'];
         $email =$data['email'];
         $phone =$data['phone'];
         $address=$data['address'];

        $valid= $this ->isValidEmail($email);
        if($valid==true){
            $status =$this->check_member_exists($data);
             
        if($status==NULL){
          
            $update = $this->member->save_member($f_name,$l_name,$email,$address,$phone);

           
        

        }else{
         
             

        }

        }else{
            echo "<div class='alert alert-danger'>Invalid Email</div>";
        }

        
      

         
       


    }
    function fetch_follow_up($data){
$members=$this->member->view_members($data);
$_SESSION['members']=$members;
 $page='follow_up_index';
 $this->member_page($page);

    }
    function check_member_exists($data){
        $f_name = $data['fname'];
        $l_name=$data['lname'];
        $email =$data['email'];
        $phone =$data['phone'];
        $address=$data['address'];
       $status= $this->member->member_exist($phone,$email);
        return $status;

    }

    function isValidEmail($email){ 
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }


    function member_page($page){
        // require('../router/route.php');
         $goto_page= new Route;
         $goto_page->access_page($page);
     
     }
     function delete_member($id){
         $status =$this->member->delete_member($id);
         $this->fetch_follow_up($id);

     }
     function member_edit($id){
         
         $status=$this->member->member_edit($id);
         $_SESSION['edit']=$status;
         $_SESSION['edit_title']='Edit for Follow up';
         $_SESSION['file_send']='follow_up_update';
         $_SESSION['type']= 'edit/delete/follow_up';
         $_SESSION['after_page']='id=follow_up/fetch_follow_up';
         $page='contact_edit';
        
         $this->member_page($page);
         return;
     }

     function member_update($data){
        
        $status= $this->member->member_update($data);
     }
}




?>