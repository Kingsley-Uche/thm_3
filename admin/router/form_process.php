<?php
if(!isset($_SESSION)){session_start();}
//Check for testimony form
if(isset($_POST['testimony'])){
                                    require_once('../controller/form.php');
                                    $data= [];
                                    $data =$_POST;
                                    $form_handler =new Form;
                                    
                                    $form_handler->testimony_add($data);

                            }else{
                                //check for content;\\\\

                            if(isset($_POST['testimony_edit'])||isset($_POST['testimony_delete'])||isset($_POST['testimony_update'])){
                                require('../controller/Testimonies.php');
                                $handle =new testimonies;
                                if(isset($_POST['testimony_edit'])){
                                    $id =$_POST['testimony_edit'];
                                    $handle->testimony_edit($id);

                                }else if(isset($_POST['testimony_delete'])){
                                    $id =$_POST['testimony_delete'];
                                    $handle->testimony_delete($id);
                                   

                                }else{
                                    $details=[];
                                    $details=$_POST;
                                    $handle->testimony_update($details);
                                }
                                
                                

  }else{

      //check for events
      require('../controller/events.php');
        $handle=new Events;
    if(isset($_POST['events_add'])){
       
        $details=$_POST;
        
        $handle->events_save($details);


    }elseif(isset($_POST['events_edit'])||isset($_POST['events_delete'])||isset($_POST['events_update'])){
        if(isset($_POST['events_edit'])){
            $id =$_POST['events_edit'];
            $handle->events_edit($id); 
        }else if(isset($_POST['events_delete'])){
            $id =$_POST['events_delete'];
             $handle->events_delete($id);

        }else{
            $details=[];
            $details=$_POST;
         $handle->events_update($details);

        }
        //processs events handlers;


    }

  }
}

?>