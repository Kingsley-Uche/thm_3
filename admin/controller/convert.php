<?php
require_once('../models/model_converts.php');
if(!isset($_SESSION)){session_start();}
Class Convert{


    private $member;
    protected $f_name ;
    protected $l_name ;
    protected $email;
    protected $phone;
    protected $address;


    function __construct(){
    
        $this->member=new Model_converts;
       
                }

               

                function save_member($data){
                    $date_birth =$data['dob'];
                   $date_bits =explode('-',$date_birth);
                  
                   $year=$date_bits[0];
                   $month =$date_bits[1];
                   $day=$date_bits[2];
            
                
                     $f_name = $data['fname'];
                     $l_name=$data['lname'];
                     $email =$data['email'];
                     $phone =$data['phone'];
                     $address=$data['address'];
                     
                     $dob =$data['dob'];
            
                    $valid= $this ->isValidEmail($email);
                    if($valid==true){
                        $status =$this->check_member_exists($data);
                         
                    if($status==NULL){
                      
                        $update = $this->member->save_member($f_name,$l_name,$year,$month,$day,$email,$address,$phone);
        
                       
            
      
                    }else{
                     
                         
            
                    }
            
                    }else{
                        echo "<div class='alert alert-danger'>Invalid Email</div>";
                    }
            
                    
                  
            
                     
                   
            
            
                }
    function fetch_converts($data){
      
$members=$this->member->view_members($data);
$_SESSION['members']=$members;
$_SESSION['after_page']='id=convert/fetch_converts';
 $page='converts_index';
 $this->member_page($page);


    }

    function check_member_exists($data){
        $f_name = $data['fname'];
        $l_name=$data['lname'];
        $email =$data['email'];
        $phone =$data['phone'];
        $address=$data['address'];
        $_SESSION['after_page']='id=convert/fetch_converts';
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
         $this->fetch_converts($id);

     }
     function member_edit($id){
         
         $status=$this->member->member_edit($id);
         $_SESSION['edit']=$status;
         $_SESSION['edit_title']='Edit Convert';
         $_SESSION['file_send']='convert_update';
         $_SESSION['type']= 'edit/delete/converts';
         $_SESSION['after_page']='id=convert/fetch_converts';
         $page='contact_edit';
         $this->member_page($page);
         return;
     }

     function member_update($data){
         
      
        $status= $this->member->member_update($data);
       
     }
}




?>