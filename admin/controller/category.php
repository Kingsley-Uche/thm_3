<?php
if(!isset($_SESSION)){session_start();}
require("../models/model_category.php");



Class Category {
                private $all_category;
                function __construct(){
                
                    $this->all_category =new Model_category;
                   
                            }

            function create_category($deta){
               $data =$_SESSION['post'];
               $stat= $this->all_category->add($data);
               if($stat==true){
                        
                $info ['update']= "<div class='alert alert-success'>Category saved successfully</div>";
                $info['goto_page']='id=category/index';
$_SESSION['update']="<div class='alert alert-success'>Category saved successfully</div>";
               


               echo json_encode($info);
              }else{
              
$info['update'] ="<div class='alert alert-danger'>Categoy failed</div>";
$info['goto_page']='id=category/index';
$_SESSION['update']="<div class='alert alert-danger'>category failed</div>";
echo json_encode($info);

              }

                            }

           private  function fetch($deta){
               $info = $this->all_category->index($deta);
               $_SESSION['category']=$info;
               
               $_SESSION['page_title']='Edit Category';
            
               $page='category_index';
               $this->category_page($page);


            }
            

          private   function category_page($page){
                // require('../router/route.php');
               
                 $goto_page= new Route;
                 $goto_page->access_page($page);
             
             }
            public function update($deta){
                $deta= $_SESSION['post'];
                $info = $this->all_category-> update($deta);
               
                $update = $this->all_category->index($deta);
                $_SESSION['category']=$update;
                $_SESSION['update']=$info['update'];
               
                echo json_encode($info);
            
             }

             public function delete($data){
                $deta= $_SESSION['post'];
                 $id=$deta['delete'];
                 $info = $this->all_category->delete($id);
                 $this->fetch($data);
                

             }
            public function index(){
                 $data='index';
                 $this->fetch($data);

                 
             }
             
             public function edit(){
                $data= $_SESSION['post'];
                if(isset($data['id'])&& $data['id']!=''){

                        $id=$data['id'];
                }else{
                    $id =$data['category_name'];
                }
                
                 $info =$this->all_category->edit($id);
                 $info['title']='Edit Category';
                 $info['process']='category/update';
                echo json_encode($info);


             }
             public function create_item($data){
              
                 $deta= $_SESSION['post'];
                $data= $this->all_category->create_item($deta);
                return $data;
             }
            
            }
        ?>