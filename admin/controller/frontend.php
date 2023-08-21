<?php

if(!isset($_SESSION)){session_start();}
require_once('../models/model_frontend.php');
Class Frontend{
    private $db;
    
    function __construct(){
       
       $this->db =new Model_frontend;
            }



            private function get_slider($data){
                
                
             $Info=  $this->db->view_sliders($data);
                return $Info;
              


            }


            public function index($data){
        $_SESSION['sliders']=$this->get_slider($data);
           
              $page='frontend_index';
               $this->frontend_page($page);
            }
            


            function frontend_page($page){
                // require('../router/route.php');
                 $goto_page= new Route;
                 $goto_page->access_page($page);
             


             }
            function frontend_slider_save($deta){
                $this->db->save_slider($deta);
                $this->index($deta);
                $page='frontend_index';
                $this->frontend_page($page);

             }
             function create_slider($data){
                $page='frontend_add_slider';
                $this->frontend_page($page);

             }
             function frontend_delete($data){
                 
                
                 $id =$_SESSION['post_item']['frontend_delete'];
                 unset($_SESSION['post_item']);
                 $this->db->delete_id($id);
                 $this->index($data);

             }
             function add_slider(){
                $page='frontend_add_slider';
                $this->frontend_page($page);

             }
             function frontend_edit($data){
                $id =$_SESSION['post_item']['frontend_edit'];
                unset($_SESSION['post_item']);
                $details=$this->db-> slider_edit($id);
                $_SESSION['slider_edit']=$details;
                $page='frontend_edit';
                $this->frontend_page($page);

             }
             function frontend_update($data){
               $this->db->edit_slider($data);
               $this->index($data);
               $page='frontend_index';
               $this->frontend_page($page);
               

             }

            }
?>