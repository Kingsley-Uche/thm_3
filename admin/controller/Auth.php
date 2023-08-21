<?php
if(!isset($_SESSION)){session_start();}
class Auth {
    private $conn;
	function __construct(){
		$hostname="localhost";
		$username="root";
		$password="";
        $database="church_app";

        $this->conn = new Mysqli($hostname,$username,$password,$database);
        if($this->conn->connect_errno){
            printf("Connection to database failed;%s\n",$this->conn->connect_error);
            exit();
        }}
   // make database connection
        
       

        public function login($data){
          
            $username = mysqli_real_escape_string($this->conn,$data['username']);
            $password= mysqli_real_escape_string($this->conn,$data['password']);
            $pass = md5($username.''.$password.''.$username);
            $passerword = substr($pass,0,30);
            
            $usertype= mysqli_real_escape_string($this->conn,$data['user_type']);
            $sql ="SELECT* FROM users WHERE email='$username' AND password='$passerword' AND confirmed='1' AND user_type='$usertype'";
            
            $output=$this->conn->query($sql);
                     
                     
           
            $res=$output->fetch_assoc();
           
                    if($res==null){
                        
                        //redirect to the appropirate error page
                        require("../router/failed.php");
                        $goto_page =new Failed;
                        $page =[];
                        $page['page']='index.php';
                        $page['error']="<div class='alert alert-danger'>Invalid username or password</div>";
                        
                        $goto_page->goto($page);
                    }else{

                       
                        //process sign in
                        $_SESSION['user_name']=$res['first_name'].' '.$res['last_name'];
                        $_SESSION['user_email']=$res['email'];
                        $_SESSION['user_phone']=$res['phone'];
                        $_SESSION['engaged']=1;
                        $_SESSION['user_type'] =$res['user_type'];
                        $_SESSION['user_id']=$res['id'];
                        $_SESSION['admin']='admin';
                        //pick dates of birth
                        $_SESSION['today_birthday']= $this->get_birthday_today();
                       $_SESSION['month_birth']=$this->get_birth_month();
                       if($output->num_rows==1){
                        $this->site_info();
                        require("../router/route.php");
                        
                        $goto_page= new Route;
                        $goto_page->goto_homepage();
                       }else{
                           echo 'failed';
                       }

                    }
           
           
            
         
            
         
         
         }
         function site_info(){
             $sql = "SELECT * FROM church_details";
             $output=$this->conn->query($sql);
                     
                     
           
             $res=$output->fetch_assoc();
            
             $_SESSION['site_info']= $res;
         }

         function get_birthday_today(){
             $date=date('Y-m-d');
             $date =explode('-',$date);
             $month=$date[1];
             $day =$date[2];
            
           $sql ="SELECT * FROM members WHERE members.month_dob='$month' AND members.day_dob='$day'";
           $sta=$this->conn->query($sql);
           $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;

         }
         function get_birth_month(){
            $date=date('Y-m-d');
            $date =explode('-',$date);
            $month=$date[1];
            $sql ="SELECT * FROM members WHERE members.month_dob='$month'";
           $sta=$this->conn->query($sql);
           $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;

         }

}


?>