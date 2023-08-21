<?php



if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_embed extends Database {
    public $conn;
	


     function embed_add($link,$caption){
        
                        
                                                        
                             $url= mysqli_real_escape_string($this->conn,$link);
                            $title=  mysqli_real_escape_string($this->conn,$caption);
                            //$content=  mysqli_real_escape_string($this->conn,$data['content']);
                          
                           
//run insertion into database
$sql="INSERT INTO  embed_video SET url='$url',title='$title'";          


$sta = $this->conn->query($sql);
$data=[];

if($sta==1){

  $_SESSION['update']="<div class='alert alert-success'>Saved Successfully</div>";
  $data['info'] ="<div class='alert alert-success'>Saved Successfully</div>";
}else{
  $_SESSION['update']="<div class='alert alert-danger'>Unable to save</div>";

  $data['info'] ="<div class='alert alert-danger'>Unable to save</div>";
                

} 
return print_r(json_encode($data));

//$data;
     }



public function embed_edit($id){
  $sql="SELECT* FROM embed_video";
  $sta=$this->conn->query($sql);
  $info = $sta->fetch_assoc();
  $url=$info['url'];
  $info['url']='<iframe src="https://www.facebook.com/plugins/video.php?height=314&href='.$url.'" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>';
  return print_r(json_encode($info));
}


public function embed_delete($id){
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
  public function embed_update($data){
  
   $update=[];
    $url= mysqli_real_escape_string($this->conn,$data['link']);
    $title=  mysqli_real_escape_string($this->conn,$data['caption']);

   $id=mysqli_real_escape_string($this->conn,$data['edit_id']);
                            $sql="UPDATE embed_video SET embed_video.url='$url',embed_video.title=' $title' WHERE embed_video.id='$id'";
    
                            $sta=$this->conn->query($sql);
                            if($sta==true){
                          
                              $_SESSION['update']="<div class='alert alert-success'>Updated Successfully</div>";
                              $update['info'] ="<div class='alert alert-success'>Updated Successfully</div>";
                          return (print_r(json_encode($update)));
                            }else{
                              $_SESSION['update']="<div class='alert alert-danger'>Unable to Update</div>";
                              $update['info']="<div class='alert alert-danger'>Unable to Update</div>";
                              return print_r( json_encode($update));
                            }
  }
}




?>




