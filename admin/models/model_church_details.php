<?php
if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_church_details extends Database {
    //public $conn;
	
              
    
    public function church_details_add($data){
        
                                                   
                            
                             $path_logo= mysqli_real_escape_string($this->conn,$data['path_logo']);
                             $path_past= mysqli_real_escape_string($this->conn,$data['path_past']);
                            $content=  mysqli_real_escape_string($this->conn,$data['file']);
                            $name_church =mysqli_real_escape_string($this->conn,$data['name_church']);
                            $address =mysqli_real_escape_string($this->conn,$data['address_church']);
                            $about_us =mysqli_real_escape_string($this->conn,$data["about_us"]);
                            
                            $website_church =mysqli_real_escape_string($this->conn, $data['website_church']);
                            $phone_church = mysqli_real_escape_string($this->conn, $data['phone_church']);
                            $email_church = mysqli_real_escape_string($this->conn, $data['email_church']);
                        
                            //run insertion into database
                            $sql="INSERT INTO church_details SET path_logo='$path_logo',file='$content',name_church='$name_church',address_church='$address', path_past ='$path_past', about_us='$about_us',website_church='$website_church',phone_church ='$phone_church',email_church ='$email_church'";          
                            
                        

                            $sta = $this->conn->query($sql);
                            
                            $_SESSION['site_info']= $this->site_info();           
                            return $sta;
                           
                           }
                       

public function church_details_index($data){
	
    
   $sql="SELECT* FROM church_details";
   $sta=$this->conn->query($sql);
   if(!empty($sta)){
    $row=array();
    while($res=$sta->fetch_assoc()){
      $row[]=$res;
              
    }
          return $row;

   }else{
    $sta = [];
    
    
   }
      
  

}


public function church_details_edit($id){
  $sql="SELECT* FROM events WHERE events.id='$id'";
  $sta=$this->conn->query($sql);
  return $sta->fetch_assoc();
}


public function event_delete($id){
 

  $sql="DELETE FROM `events` WHERE events.id='$id'";
  $sta=$this->conn->query($sql);
  
 
  if($sta==true){

    $_SESSION['update']="<div class='alert alert-success'>Deleted Successfully</div>";
return;
  }else{
    $_SESSION['update']="<div class='alert alert-danger'>Unable to Delete</div>";
    return ;
  }
}

  public function church_details_update($data){
  
    
    $path_logo= mysqli_real_escape_string($this->conn,$data['path_logo']);
    $path_past= mysqli_real_escape_string($this->conn,$data['path_past']);
       $id= mysqli_real_escape_string($this->conn,$data['church_id']);                
    $name_church= mysqli_real_escape_string($this->conn,$data['name_church']);
    $about_us =mysqli_real_escape_string($this->conn,$data["about_us"]);
                            
    $address=  mysqli_real_escape_string($this->conn,$data['address_church']);
    
    $file = mysqli_real_escape_string($this->conn,$data['file']);
    $website_church =mysqli_real_escape_string($this->conn, $data['website_church']);
    $phone_church = mysqli_real_escape_string($this->conn, $data['phone_church']);
    $email_church = mysqli_real_escape_string($this->conn, $data['email_church']);


    $church_data =(array)($_SESSION['church_details']);
    $name_church = $church_data[0]['name_church'];
   
    $church_logo =$church_data[0]['path_logo'];
   
    $past_pic =$church_data[0]['path_past'];
    $path_logo= mysqli_real_escape_string($this->conn,$data['path_logo']);
    $path_past= mysqli_real_escape_string($this->conn,$data['path_past']);
                  
    if(!empty($path_logo)){

    }else{

$path_logo=$church_logo;

    }
    if(!empty($path_past)){

    }else{
      $path_past =$past_pic;
    }
    
    
  $sql="UPDATE church_details SET church_details.name_church='$name_church',church_details.address_church='$address', 
  church_details.file='$file', church_details.about_us='$about_us', church_details.path_logo='$path_logo',
   church_details.path_past='$path_past', church_details.email_church='$email_church',church_details.phone_church='$phone_church',
   church_details.website_church='$website_church' WHERE church_details.id='$id'";
  
           $sta=$this->conn->query($sql);
                            if($sta==true){
                          
                              $_SESSION['update']="<div class='alert alert-success'>Updated Successfully</div>";
                              $_SESSION['site_info']= $this->site_info();
                          return;
                            }else{
                              $_SESSION['update']="<div class='alert alert-danger'>Unable to Update</div>";
                              return ;
                            }
  }
}




?>
