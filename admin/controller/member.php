<?php
require_once('../models/model_members.php');
require_once("../excel/src/SimpleXLSX.php");
if(!isset($_SESSION)){session_start();}
Class Member{


    private $member;
    protected $f_name ;
    protected $l_name ;
    protected $email;
    protected $phone;
    protected $address;


    function __construct(){
    
        $this->member=new Model_members;
       
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
    function fetch_members($data){
$members=$this->member->view_members($data);
$_SESSION['members']=$members;
 $page='members_index';
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
         $this->fetch_members($id);

     }
     function member_edit($id){
         
         $status=$this->member->member_edit($id);
         $_SESSION['edit']=$status;
         $_SESSION['edit_title']='Edit Member';
         $_SESSION['file_send']='member_update';
         $_SESSION['type']= 'edit/delete/members';
         $_SESSION['after_page']='id=member/fetch_members';
         $page='contact_edit';
         $this->member_page($page);
         return;
     }

     function member_update($data){
        
        $status= $this->member->member_update($data);
     }
     function member_bulk($data){

        if ( $xlsx = SimpleXLSX::parse($data["excel_sheet"]['tmp_name'])) {

            // Produce array keys from the array values of 1st array element
            $header_values = $rows = [];
        
            foreach ( $xlsx->rows() as $k => $r ) {
                if ( $k === 0 ) {
                    $header_values = $r;
                    continue;
                }
                $rows[] = array_combine( $header_values, $r );
            }
            print_r( $rows );
        /*
        Array
        (
            [0] => Array
                (
                    [ISBN] => 618260307
                    [title] => The Hobbit
                    [author] => J. R. R. Tolkien
                    [publisher] => Houghton Mifflin
                    [ctry] => USA
                )
        
            [1] => Array
                (
                    [ISBN] => 908606664
                    [title] => Slinky Malinki
                    [author] => Lynley Dodd
                    [publisher] => Mallinson Rendel
                    [ctry] => NZ
                )
        
        )
         */
        }


        //   var_dump($data);
        // if ( $xlsx = SimpleXLSX::parse($data["excel_sheet"]['tmp_name']) ) {
        //     print_r( $xlsx->rows() );
        // } else {
        //     echo SimpleXLSX::parseError();
        // }
        // echo '<pre>';
        
       
     }
}




?>