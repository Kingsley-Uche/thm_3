<?php

if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_converts extends Database {
    public $conn;
	
    function save_member($f_name,$l_name,$year,$month,$day,$email,$address,$phone){
                 
               

      $stmt =$this->conn->prepare("INSERT INTO converts (f_name, l_name, email,phone, address,year_dob,month_dob,day_dob) VALUES(?,?,?,?,?,?,?,?)");
      $stmt ->bind_param("ssssssss",$f_name,$l_name,$email,$phone,$address,$year,$month,$day);
     $status= $stmt->execute();
  
     if($status==1){
                        
      $info ['update']= "<div class='alert alert-success'>Convert saved successfully</div>";
      $info['goto_page']='id=convert/fetch_converts';
$_SESSION['update']="<div class='alert alert-success'>Convert saved successfully</div>";
     
$info['goto_page']='id=member/fetch_members';

     echo json_encode($info);
    }else{
    
$info['update'] ="<div class='alert alert-danger'Convert already exists</div>";
$info['goto_page']='id=convert/fetch_converts';
$_SESSION['update']="<div class='alert alert-danger'>Convert already exists</div>";
echo json_encode($info);

    }
    

                                      
         
         
         }
     

public function view_members($data){
	
    
   $sql="SELECT* FROM converts";
   $sta=$this->conn->query($sql);
   
      
   $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;

}


public function member_edit($id){
  $sql="SELECT* FROM converts WHERE converts.id='$id'";
  $sta=$this->conn->query($sql);
  return $sta->fetch_assoc();
}


public function delete_member($id){
 
  $stmt =$this->conn->prepare("DELETE FROM converts WHERE id=?");
   $stmt->bind_param("s",$id);
   $stmt->execute();
   $result =$stmt->get_result();
   
                          
    $_SESSION['update']="<div class='alert alert-success'>Deleted Successfully</div>";
return;
 
  

  
 }
 public function member_update($data){
    
  $date_birth =$data['dob'];
  $date_bits =explode('-',$date_birth);
 
  $year=$date_bits[0];
  $month =$date_bits[1];
  $day=$date_bits[2];

  $f_name = mysqli_real_escape_string($this->conn,$data['fname']);
      $l_name=mysqli_real_escape_string($this->conn,$data['lname']);
      $email =mysqli_real_escape_string($this->conn,$data['email']);
      $phone =mysqli_real_escape_string($this->conn,$data['phone']);
      $address=mysqli_real_escape_string($this->conn,$data['address']);
      $id =mysqli_real_escape_string($this->conn,$data['convert_update']);    
      $year = mysqli_real_escape_string($this->conn,$year);
      $month =mysqli_real_escape_string($this->conn,$month);
      $day  =  mysqli_real_escape_string($this->conn,$day); 
            

   $sql="UPDATE converts SET f_name='$f_name',l_name='$l_name',email='$email',phone='$phone',address='$address',id='$id',year_dob='$year',month_dob='$month',day_dob='$day' WHERE converts.id='$id'";
                           
                          $sta=$this->conn->query($sql);
                          if($sta==true){
                        
                            $info ['update']= "<div class='alert alert-success'>Member updated successfully</div>";
                            $info['goto_page']='id=convert/fetch_members';
     $_SESSION['update']="<div class='alert alert-success'>Updated successfully</div>";
                           
     $info['goto_page']='id=member/fetch_members';
   
                           echo json_encode($info);
                          }else{
                          
      $info['update'] ="<div class='alert alert-danger'>Update failed</div>";
      $info['goto_page']='id=convert/fetch_converts';
     $_SESSION['update']="<div class='alert alert-danger'>Update failed</div>";
      echo json_encode($info);
   
                          }
}

  function member_exist($phone,$email){

   
   $stmt =$this->conn->prepare("SELECT* FROM converts WHERE phone=? AND email=?");
   $stmt->bind_param("ss",$phone,$email);
   $stmt->execute();
   $result =$stmt->get_result();
   //return ($result->num_rows);
   if($result->num_rows>0){
     
  
    $info =[];
    $info['update'] ="<div class='alert alert-danger'>Member already exists</div>";
    $info['goto_page']='id=member/fetch_members';
   $_SESSION['update']="<div class='alert alert-danger'>Member already exists</div>";
    echo json_encode($info);
   
    
    }else{
     
      return;
    }
   
   //$num_rows =$result->fetch_array(MYSQLI_ASSOC);
   //var_dump($num_rows);
   

                         
                         

    

}

}




?>




