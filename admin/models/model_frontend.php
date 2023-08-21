<?php

if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_frontend extends Database {
    public $conn;
	
                function save_slider($deta){
                

                        $stmt =$this->conn->prepare("INSERT INTO slider (name, path) VALUES(?,?)");
                        $stmt ->bind_param("ss",$deta['name'],$deta['path']);
                       $status= $stmt->execute();
                    
                       if($status==1){
                        $_SESSION['update']="<div class='alert alert-success'>Added to converts  successfully</div>";


                       }else{
                        $_SESSION['update']= "<div class='alert alert-danger'>Email or Phone already exists</div>";
                       }
                      

                          
                           
                           }
                       

public function view_sliders($data){
	
    
   $sql="SELECT* FROM slider";
   $sta=$this->conn->query($sql);
   
      
   $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;
        

}


public function slider_edit($id){
  $sql="SELECT* FROM slider WHERE slider.id='$id'";
  $sta=$this->conn->query($sql);
  return $sta->fetch_assoc();
}


public function delete_id($id){
 
  $stmt =$this->conn->prepare("DELETE FROM slider WHERE id=?");
   $stmt->bind_param("s",$id);
   $stmt->execute();
   $result =$stmt->get_result();
   
                          
    $_SESSION['update']="<div class='alert alert-success'>Deleted Successfully</div>";
return;
 
  

  
 }
  public function member_update($data){
   
    $f_name = mysqli_real_escape_string($this->conn,$data['fname']);
        $l_name=mysqli_real_escape_string($this->conn,$data['lname']);
        $email =mysqli_real_escape_string($this->conn,$data['email']);
        $phone =mysqli_real_escape_string($this->conn,$data['phone']);
        $address=mysqli_real_escape_string($this->conn,$data['address']);
        $id =mysqli_real_escape_string($this->conn,$data['convert_update']);                
  
                            $sql="UPDATE converts SET f_name='$f_name',l_name='$l_name',email='$email',phone='$phone',address='$address',id='$id' WHERE converts.id='$id'";
                             
                            $sta=$this->conn->query($sql);
                            if($sta==true){
                                                      $_SESSION['update']="<div class='alert alert-success'>Updated Successfully</div>";
                                                      echo "<div class='alert alert-success'>Updated Successfully</div>";
                                                      return;
                                                    
                          
                            }else{
                              $_SESSION['update']="<div class='alert alert-danger'>Unable to Update</div>";
                            echo "<div class='alert alert-danger'>Unable to Update</div>";
                             return;
                            }
  }

  function member_exist($phone,$email){

   
   $stmt =$this->conn->prepare("SELECT* FROM converts WHERE phone=? AND email=?");
   $stmt->bind_param("ss",$phone,$email);
   $stmt->execute();
   $result =$stmt->get_result();
   //return ($result->num_rows);
   if($result->num_rows>0){
   echo "<div class='alert alert danger'>Member already exists</div>";
     
   }else{
     return;
   }
   
   //$num_rows =$result->fetch_array(MYSQLI_ASSOC);
   //var_dump($num_rows);
   

                         
                         

    

}


function edit_slider($deta){
 // $stmt =$this->conn->prepare("INSERT INTO slider (name, path) VALUES(?,?)");
  $stmt =$this->conn->prepare("UPDATE slider SET path=? WHERE id= ?");
  if($stmt===false){
    trigger_error($this->conn->error,E_USER_ERROR);
    return;

  }
  $stmt ->bind_param("ss",$deta['path'], $deta['id']);
 $status= $stmt->execute();

 if($status==1){
  $_SESSION['update']="<div class='alert alert-success'>Added to converts  successfully</div>";


 }else{
  $_SESSION['update']= "<div class='alert alert-danger'>Email or Phone already exists</div>";
 }
  

}
}




?>




