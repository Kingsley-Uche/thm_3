<?php  if(!isset($_SESSION)){session_start();}
require("../models/model_category.php");



Class inventory {
                private $all_inventory;
                public $class;
                function __construct(){
                    $this->class="inventory";
                
                   $this->all_inventory =new Model_category;
                   
                            }

            function save_detail($deta){
            }

            function index($page){
              
               $info= $this->all_inventory->index_inventory($page);
               
                $_SESSION['items']=$info;
                
          
            

                $this->events_page($page);

            }
            public function add_items($page){
               
                $_SESSION['category']=$this->all_inventory->index($page);
                unset($_SESSION['item_category']);
               
                $this->events_page($page);

            }


          public function events_page($page){
              $page =$page.'_'.$this->class;
                
                 $goto_page= new Route;
                $goto_page->access_page($page);
            
            }
            public function modify($data){
                $post_item=$_SESSION['post'];
               
                if(isset($post_item['item_edit'])&& $post_item['item_edit']!=''){
                
                    $id_edit =$post_item;
                    $deta =$this->all_inventory->fetch_item($id_edit);
                    $page='add_items';
                    $this->events_page($page);
                    
                    
                    

                }else if(isset($post_item['item_delete'])&& $post_item['item_delete']!=''){
                
                       $id_delete=$post_item;
                     
                       
                       $deta =$this->all_inventory->delete_item($id_delete);
                    $page='index';
                    $this->index($page);
                      
                   

                }
                
            }
            public function update_item($data){
                $deta =$_SESSION['post'];
                $update =$this->all_inventory->update_item($deta);
               echo json_encode($update);
            }
            
        }
        ?>