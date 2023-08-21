<?php



if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_ministry extends Database {
    public $conn;
	


     function ministry_add($data){
        
                        
                                                        
                             $url= mysqli_real_escape_string($this->conn,$data['video_url']);
                            $title=  mysqli_real_escape_string($this->conn,$data['title_video']);
                            $content=  mysqli_real_escape_string($this->conn,$data['content']);
                            
                           
//run insertion into database
$sql="INSERT INTO  ministry SET url=' $url',title='$title', description='$content'";          


$sta = $this->conn->query($sql);


if($sta==1){

  $_SESSION['update']="<div class='alert alert-success'>Saved Successfully</div>";
}else{
  $_SESSION['update']="<div class='alert alert-danger'>Unable to save</div>";


                

} 
return $sta;
     }

public function ministry_index($data){
    
    
   $sql="SELECT* FROM ministry ORDER by id DESC";
   $sta=$this->conn->query($sql);
   
      
   $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;

}


public function ministry_edit($id){
  $sql="SELECT* FROM ministry WHERE ministry.id='$id'";
  $sta=$this->conn->query($sql);
  return $sta->fetch_assoc();
}


public function ministry_delete($id){
  $sql="DELETE FROM `ministry` WHERE  ministry.id='$id'";
  $sta=$this->conn->query($sql);
  if($sta==true){

    $_SESSION['update']="<div class='alert alert-success'>Deleted Successfully</div>";
return;
  }else{
    $_SESSION['update']="<div class='alert alert-danger'>Unable to Delete</div>";
    return ;
  }
}
  public function ministry_update($data){
  
   
    $url= mysqli_real_escape_string($this->conn,$data['video_url']);
    $title=  mysqli_real_escape_string($this->conn,$data['title_video']);
    $content=  mysqli_real_escape_string($this->conn,$data['content']);
   $id=mysqli_real_escape_string($this->conn,$data['ministry_id']);
                            $sql="UPDATE ministry SET ministry.url='$url',ministry.title=' $title',ministry.description='$content' WHERE ministry.id='$id'";
    
                            $sta=$this->conn->query($sql);
                            if($sta==true){
                          
                              $_SESSION['update']="<div class='alert alert-success'>Updated Successfully</div>";
                          return;
                            }else{
                              $_SESSION['update']="<div class='alert alert-danger'>Unable to Update</div>";
                              return ;
                            }
  }
}




?>




