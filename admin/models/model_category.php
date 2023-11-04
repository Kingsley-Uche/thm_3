<?php



if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_category extends Database {
    public $conn;



    
public function index($data){
	
    
     $sql="SELECT* FROM category WHERE category.status='1' ORDER by id DESC";
     $sta=$this->conn->query($sql);
     
        
     $row=array();
  			while($res=$sta->fetch_assoc()){
  				$row[]=$res;
                  
  			}
       
      
              return $row;
  
  }
	
                function add($data){
        
                    
                      $name =$data['category_name'];
                      $status =$data['active'];

                             $category_name= mysqli_real_escape_string($this->conn,$name);
                            
                            $category_status=  mysqli_real_escape_string($this->conn,$status);
                            
                        
                            // //run insertion into database
                             $sql="INSERT INTO category SET name='$category_name',status='$category_status'";          


                            $sta = $this->conn->query($sql);
                            
                                        
                             return $sta;
                           
                           }
                       



public function edit($id){
  $i_d =mysqli_real_escape_string($this->conn,$id);
  $sql="SELECT* FROM category WHERE category.id='$i_d'";
  $sta=$this->conn->query($sql);
  return $sta->fetch_assoc();
}


public function delete($id){
 

 
  $sql="DELETE FROM `category` WHERE category.id='$id'";
  $sta=$this->conn->query($sql);
  
 
  if($sta==true){

    $_SESSION['update']="<div class='alert alert-success'>Deleted Successfully</div>";
return;
  }else{
    $_SESSION['update']="<div class='alert alert-danger'>Unable to Delete</div>";
    return ;
  }
}
  public function update($data){

   // var_dump($data);
    $sta =$this->conn->prepare("UPDATE category SET category.name=?,category.status=? WHERE category.id=?");
    $sta->bind_param('sss',$data['category_name'],$data['active'],$data['edit_id']);
    $sta->execute();
    if($sta->errno==0){
      $status=[];
      $status['update']="<div class='alert alert-success'>Category updated sucessfully.</div>";
      $status['goto_page']='id=category/index';
      return $status;

     
    }
   
   
                        
                       
  }
  public function create_item($deta){
   $deta['create_date']=date('Y-M-D H:i:s');
   $deta['update_date']='';



    $stmt =$this->conn->prepare("INSERT INTO category_item (category_id, brand, name_item,pieces,serial_number,ware_house,description,item_create_date,item_edit_date)
     VALUES(?,?,?,?,?,?,?,?,?)");
    $stmt ->bind_param("sssssssss",$deta['category'],$deta['item_brand'],$deta['item_name'],$deta['item_number'],$deta['serial_number'],$deta['ware_house'],
    $deta['description'], $deta['create_date'], $deta['update_date']);
   $status= $stmt->execute();

   if($status==1){
                      
    $info ['update']= "<div class='alert alert-success'>Items saved sucessfully</div>";
    $info['goto_page']='id=inventory/index';
$_SESSION['update']="<div class='alert alert-success'>Items saved sucessfully</div>";
   


   echo json_encode($info);
  }else{
  
$info['update'] ="<div class='alert alert-danger'>Item already exists</div>";
$info['goto_page']='id=inventory/index';
$_SESSION['update']="<div class='alert alert-danger'>Item already exists</div>";
echo json_encode($info);

  }
  }
  public function index_inventory($page){
    $sql="SELECT* FROM category_item INNER JOIN category ON category_item.category_id= category.id WHERE category.status='1' ORDER by category. id DESC";
   
    $sta=$this->conn->query($sql);
    
       
    $row=array();
       while($res=$sta->fetch_assoc()){
         $row[]=$res;
                 
       }
      
     
             return $row;

  }
   public function fetch_item($id_edit){
   $sql="SELECT* FROM category_item WHERE id_item=?";
   $stmt =$this->conn->prepare($sql);
   $stmt ->bind_param('i',$id_edit);
   $stmt->execute();
   $result =$stmt->get_result();
   $info =$result->fetch_assoc();
   $_SESSION['item_category']=$info;
  return true;

   }
   public function update_item($deta){

    $deta['edit_date']=date('Y-M-D H:i:s');
    
    $sta = $this->conn->prepare("UPDATE category_item SET category_id=?,brand=?,name_item=?,pieces=?,serial_number=?,ware_house=?,description=?,item_edit_date=? WHERE id_item=?");
    
    $sta->bind_param('sssssssss',$deta['category'],$deta['item_brand'],$deta['item_name'],$deta['item_number'],$deta['serial_number'],$deta['ware_house'],$deta['description'],$deta['edit_date'],$deta['edit_id']);
    $sta->execute();
    if($sta->errno==0){
      $status=[];
      $status['update']="<div class='alert alert-success'>Inventory updated sucessfully.</div>";
      $_SESSION['update']="<div class='alert alert-success'>Inventory updated sucessfully.</div>";
      $status['goto_page']='id=inventory/index';
      return $status;

     
    }
   
   }
   public function delete_item($id){
    $sta = $this->conn->prepare("DELETE FROM category_item WHERE id_item=?");
    $id_item =$id["item_delete"];
    echo $id_item;
    
    
    $sta->bind_param('s',$id_item);
    $sta->execute();
    if($sta->errno==0){
      $status=[];
      $status['update']="<div class='alert alert-danger'>Inventory deleted sucessfully.</div>";
      $_SESSION['update']="<div class='alert alert-danger'>Inventory deleted sucessfully.</div>";
      $status['goto_page']='id=inventory/index';
      return $status;

     
    }


   }
  
}




?>




