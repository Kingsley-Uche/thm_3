<?php
if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_enquiries extends Database {
    public $conn;
   
   
Public  function view_enquiry(){

$sql="SELECT* FROM enquiry ORDER BY id DESC";

     $sta=$this->conn->query($sql);
     
        
     $row=array();
  			while($res=$sta->fetch_assoc()){
  				$row[]=$res;
                  
  			}
       
      
              return $row;

    }
    public function prayer_request(){


        $sql="SELECT* FROM prayer_requests ORDER BY id DESC";

     $sta=$this->conn->query($sql);
     
        
     $row=array();
  			while($res=$sta->fetch_assoc()){
  				$row[]=$res;
                  
  			}
       
      
              return $row;

    }
    

}


?>