<?php

if(!isset($_SESSION)){session_start();}
Class Users{
    private $conn;
	function __construct(){
                    $hostname="localhost";
                    $username="root";
                    $password="";
                    $database="church_app";

                    $this->conn = new Mysqli($hostname,$username,$password,$database);
                        }


     function signUp($data){
                            $token ="asdefghA#SEFGHTYUE0(;')OONCBBMDIuiN12938303*";
                            $token=str_shuffle($token);
                            $token= substr($token,0,13);
                            $confirmed ='0';                            
                            $firstname= mysqli_real_escape_string($this->conn,$data['fname']);
                            $lastname=  mysqli_real_escape_string($this->conn,$data['lname']);
                            $email=  mysqli_real_escape_string($this->conn,$data['email']);
                            $password=  mysqli_real_escape_string($this->conn,$data['password']);
                            $usertype =  mysqli_real_escape_string($this->conn,$data['user_type']);
                            $phone=  mysqli_real_escape_string($this->conn,$data['phone']);
                            $pass = md5($email.''.$password.''.$email);
                            $passerword = substr($pass,0,30);
                            
                       
 //check if email has already been registered.
 $sql_check = "SELECT * FROM users WHERE users.email ='$email'";                          
//run insertion into database
$sql="INSERT INTO  users SET first_name='$firstname',last_name='$lastname',email='$email',password='$passerword',user_type='$usertype',phone='$phone',token='$token',confirmed='$confirmed'";          

$stat = $this->conn->query($sql_check);
$status[] ='';
if($stat->num_rows ==1){
    $status= 0;
    
}else{
    
    $stat = $this->conn->query($sql);
    if($stat==1){
        $status=1;
    }
    
   
}

return $status;

                
                        }
                       

public function login($data){
	
    
   $username = mysqli_real_escape_string($this->conn,$data['username']);
   $password= mysqli_real_escape_string($this->conn,$data['password']);
   $usertype= mysqli_real_escape_string($this->conn,$data['user_type']);
   $sql ="SELECT* FROM users WHERE email='$username' AND password='$password' AND user_type='$usertype'";
   $output=$this->conn->query($sql);
			
			
			
   $res=$output->fetch_assoc();
   $_SESSION['user_name']=$res['fname'].' '.$res['lname'];
			$_SESSION['user_email']=$res['email'];
            $_SESSION['user_phone']=$res['phone'];
            $_SESSION['engaged']=1;
            $_SESSION['user_type'] =$res['usertype'];
            $_SESSION['user_id']=$res['id'];
            
           if($output->num_rows==1){
            echo '1';
           }else{
               echo 'failed';
           }
   

   


}
public function get_all_mentors(){
    $sql ="SELECT* FROM users WHERE usertype ='1'";
    $res = $this->conn->query($sql); 
    //return $res->fetch_assoc();    
    $row=array();
	while($reslt=$res->fetch_assoc()){
		
		$row[]=$reslt;
		
	}                 
  return $row;  

}
public function get_all_mentee(){
    $sql ="SELECT* FROM users WHERE usertype ='2'";
    $res = $this->conn->query($sql); 
    //return $res->fetch_assoc();    
    $row=array();
	while($reslt=$res->fetch_assoc()){
		
		$row[]=$reslt;
		
	}                 
  return $row;  

}
private function send_email_verification(){
    echo "hii";
    die();

}

}




?>


