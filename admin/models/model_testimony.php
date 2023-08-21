<?php



if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_testimony extends Database {
    public $conn;
	


     function testimony_add($data){
        
                        
                                                        
                             $name_testifier= mysqli_real_escape_string($this->conn,$data['name_testifier']);
                            $title_testimony=  mysqli_real_escape_string($this->conn,$data['title_testimony']);
                            $content=  mysqli_real_escape_string($this->conn,$data['content']);
                            
                           
//run insertion into database
$sql="INSERT INTO  testimonies SET name_testifier=' $name_testifier',title_testimony=' $title_testimony',content_testimony='$content'";          


$sta = $this->conn->query($sql);
                
return $sta;
                           
                        }
                       

public function testimony_index($data){
	
    
   $sql="SELECT* FROM testimonies ORDER by id DESC";
   $sta=$this->conn->query($sql);
   
      
   $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;

}


public function testimony_edit($id){
  $sql="SELECT* FROM testimonies WHERE testimonies.id='$id'";
  $sta=$this->conn->query($sql);
  return $sta->fetch_assoc();
}


public function testimony_delete($id){
  $sql="DELETE FROM `testimonies` WHERE  testimonies.id='$id'";
  $sta=$this->conn->query($sql);
  if($sta==true){

    $_SESSION['update']="<div class='alert alert-success'>Deleted Successfully</div>";
return;
  }else{
    $_SESSION['update']="<div class='alert alert-danger'>Unable to Delete</div>";
    return ;
  }
}
  public function testimony_update($data){
   
                           $name_testifier= mysqli_real_escape_string($this->conn,$data['name_testifier']);
                            $title_testimony=  mysqli_real_escape_string($this->conn,$data['title_testimony']);
                            $content=  mysqli_real_escape_string($this->conn,$data['content']);
                            $id=mysqli_real_escape_string($this->conn,$data['testimony_id']);
                            $sql="UPDATE testimonies SET name_testifier=' $name_testifier',title_testimony=' $title_testimony',content_testimony='$content' WHERE testimonies.id='$id'";
    
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




