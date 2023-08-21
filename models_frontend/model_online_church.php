<?php


Class Online_model {
    public $conn;
   function __construct(){
                   $hostname="localhost";
                   $username="root";
                   $password="";
                   $database="church";

                   $this->conn = new Mysqli($hostname,$username,$password,$database);
                  if($this->conn->connect_errno){
                      printf("Connection to database failed;%s\n",$this->conn->connect_error);
                      exit();
                  }
               
                       
               }

               public function save_online($data){
                $goto_page=[];
                $year=date('Y');
                $month =date('M');
                $day=date('D');
               
               $stmt =$this->conn->prepare("INSERT INTO online_church (name, email,phone,date,month,year) VALUES(?,?,?,?,?,?)");
                   $stmt ->bind_param("ssssss",$data['member_name'],$data['member_email'],$data['member_phone'],$day,$month,$year);
                  $status= $stmt->execute();
               
                  if($status==1){
                    $_SESSION['online_stream']=$this->view_service();
                   $_SESSION['update']="<div class='alert alert-success'>Welcome to our online Church.</div>";
                   $_SESSION['permission']="approved";
                   $goto['status']='success';
                   $goto['next_page']='view_online';
                  return $goto;


                  }else{
                   $_SESSION['update']= "<div class='alert alert-danger'>We can't verify you. Please try again.</div>";
                  
                   $goto['status']='failed';
                   $goto['next_page']='index.php';
                   return $goto;

                  }
            }
            public function view_service(){
                $sql = "SELECT * FROM embed_video";
                $output=$this->conn->query($sql);
                $res=$output->fetch_assoc();

                
                return $res;
            }
            public function prayer($data){

                
                
                $stmt =$this->conn->prepare("INSERT INTO prayer_requests(name_prayer, email_prayer,phone_prayer,prayer_content) VALUES(?,?,?,?)");
                        $stmt ->bind_param("ssss",$data['name_prayer'],$data['email_prayer'],$data['phone_prayer'],$data['prayer_content']);
                       $status= $stmt->execute();

                    
                       if($status==1){
                        $_SESSION['update']="<div class='alert alert-success'>Prayer request sent sucessfully</div>";
                            $deta['status']="success";

                       }else{
                        $_SESSION['update']= "<div class='alert alert-danger'>Failed, Please retry</div>";
                        $deta['status']="Failed";
                    }
                    
                       return $deta;
                     

            }

            public function enquire($data){

                
                
                $stmt =$this->conn->prepare("INSERT INTO enquiry(enquiry_name, enquiry_email,enquiry_subject,enquiry_message) VALUES(?,?,?,?)");
                        $stmt ->bind_param("ssss",$data['enquiry_name'],$data['enquiry_email'],$data['enquiry_subject'],$data['enquiry_subject']);
                       $status= $stmt->execute();

                    
                       if($status==1){
                        $_SESSION['update']="<div class='alert alert-success'>Thank you for reaching out. We will get in touch shortly</div>";
                            $deta['status']="success";

                       }else{
                        $_SESSION['update']= "<div class='alert alert-danger'>Failed, Please retry</div>";
                        $deta['status']="Failed";
                    }
                    
                       return $deta;
                     

            }
            }
?>