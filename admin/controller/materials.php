<?php

if(!isset($_SESSION)){session_start();}
require_once('../models/model_materials.php');
Class Materials{
    private $all_material;
    
    function __construct(){
       
        $this->all_material =new Model_materials;
            }
    



            function materials_index($page){
                //fetch all testimonies
                
                $materials =$this-> all_material->materials_index($page);
                
                $_SESSION['materials']=$materials;
                return;
                
                    }

            function materials_page($page){
                require('../router/route.php');
                $goto_page= new Route;
                $goto_page->access_page($page);
            
            }       
            
    function add_material($page){
             
               
                $goto_page= new Route;
                $goto_page->access_page($page);}

    

function material_edit($id){
  $response=$this->all_material->testimony_edit($id);
 $_SESSION['materials_edit']=$response;

$page='edit_materials';
$this->materials_page($page);
}


function material_delete($id){
  $response=  $this->all_material->testimony_delete($id);
 $page='materials_index';
 $this->materials_index($page);
 $this->materials_page($page);
  
}



    function material_update($details){
        $page='materials_index';
        $response= $this->all_material->testimony_update($details);
        $this->materials_index($page);
        $this->materials_page($page);
  
    }
            }



?>
