<?php



if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_events extends Database {
    public $conn;
	
                function events_add($data){
        
                      
                                                        
                             $title= mysqli_real_escape_string($this->conn,$data['title_event']);
                            
                            $content=  mysqli_real_escape_string($this->conn,$data['content']);
                            
                        
                            //run insertion into database
                            $sql="INSERT INTO events SET title_event='$title',content='$content'";          


                            $sta = $this->conn->query($sql);
                            
                                        
                            return $sta;
                           
                           }
                       

public function event_index($data){
	
    
   $sql="SELECT* FROM events ORDER by id DESC";
   $sta=$this->conn->query($sql);
   
      
   $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;

}


public function event_edit($id){
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
  public function event_update($data){
   
                        
                            $title=  mysqli_real_escape_string($this->conn,$data['title_event']);
                            $content=  mysqli_real_escape_string($this->conn,$data['content']);
                            $id=mysqli_real_escape_string($this->conn,$data['events_id']);
                            $sql="UPDATE events SET title_event=' $title',content='$content' WHERE events.id='$id'";
    
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




