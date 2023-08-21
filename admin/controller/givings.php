<?php



if(!isset($_SESSION)){session_start();}
require_once('../models/model_givings.php');
Class Givings{
    private $all_givings;
    
    function __construct(){
       
        $this->all_givings =new Model_givings;
            }



            private function fetch_details($data){
                
                
                $this->all_givings->view_payments($data);


            }


            public function call_detail($data){
               $info= $this->fetch_details($data);
              $_SESSION['givings']=$info;
              $page='givings_index';
               $this->giving_page($page);
            }
            


            function giving_page($page){
                // require('../router/route.php');
                 $goto_page= new Route;
                 $goto_page->access_page($page);
             


             }

            }
?>