
<?php
if(!isset($_SESSION)){session_start();}
require('database.php');
Class Model_givings extends Database {
    public $conn;
	                       

public function view_payments($data){
	
    
   $sql="SELECT* FROM givings";
   $sta=$this->conn->query($sql);
   
      
   $row=array();
			while($res=$sta->fetch_assoc()){
				$row[]=$res;
                
			}
            return $row;

}
}
?>