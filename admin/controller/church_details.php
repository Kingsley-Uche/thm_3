<?php
require("../models/model_church_details.php");



Class Church_details {
                private $all_ministry;
                function __construct(){
                
                    $this->all_ministry =new Model_church_details;
                   
                            }

            function save_detail($deta){
              
               $deta['file']='image';
                if(isset($deta['church_id']) && $deta['church_id']!=''){
//check update
                    $status=   $this->update_details($deta);
                       

                }else{
                    //save
                    $status= $this->all_ministry->church_details_add($deta);
                    if($status=1){
                        $_SESSION['update']="<div class='alert alert-success'>Logo upload was successfull</div>";
                       
                          
                       }else{
                        $_SESSION['update']="<div class='alert alert-danger'>Logo upload failed</div>";
                       }

                }
              
              
              
              
               $page ='church_details';
                $this->fetch_details($deta);
               $this->church_page($page);

                            }

            function fetch_details($deta){
               
               
               $info = $this->all_ministry->church_details_index($deta);
               
               $_SESSION['church_details']=$info;
              
               $page='church_details';
               $this->church_page($page);


            }
            

            function church_page($page){
                // require('../router/route.php');
               
                 $goto_page= new Route;
                 $goto_page->access_page($page);
             
             }
             function update_details($deta){
                
                $info = $this->all_ministry->church_details_update($deta);
               $_SESSION['church_details']=$info;
            
               $page='church_details';
               $this->church_page($page);
             }
             
            }
        ?>