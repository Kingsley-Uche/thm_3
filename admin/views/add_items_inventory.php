<?php
if(!isset($_SESSION)){session_start();}
if(!empty($_SESSION['user_type'])){
    ?>





<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <?php
  include('components/head.php');
  ?>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top   //nav-->
    <?php
    include('components/nav.php');?>
    
    <!-- ennd of nav fixed-top   //nav-->


    <!-- //////////////////////////////////////////////////////////////////////////// side-menu-->


    

<?php
include('components/side-menu.php');?>
<!-- Bordered table start -->

<!-- Bordered table end -->

    <!-- //////////////////////////////////////////////////////////////////////////// forms and tables-->
    <div class="app-content content">
    <?php
    if(isset($_SESSION['item_category'])&&!empty($_SESSION['item_category'])){

      $items=$_SESSION['item_category'];
     
    }else{
      $items='';
    }
    ?>
   
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        
          <div class="content-header-left col-md-4 col-12 mb-2">
          <div><?php 
   
   if(isset($_SESSION['update'])){
     echo $_SESSION['update'];
     unset($_SESSION['update']);
   }?></div>
            <h3 class="content-header-title">Add Items</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../router/store.php?id=category/index"><i class="la la-arrow-circle-left"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Add Item
                 
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
              <!--Place form here-->
<form action='../router/store.php' method='post' name='item_create' id='item_create' >


<div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
  
      <div class="col-xl-12 col-lg-12 col-md-12 ">
          <div class="card">
              
              <div class="card-block">
                 
                  <div class="card-header">
                  <h6 class="card-title"><span class='text-danger'>*</span>Select Category</h6>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                         <select class='select2 form-control ' name='category' required>
                         <option value='0'>Select Category</option>
                         <?php
                         
                         foreach($_SESSION['category']as $cat){?>
                          
                          <option value='<?php echo $cat['id']?>'><?php echo $cat['name'];?></option>

                     <?php    }
        
        ?>
                         
                         </select>
                      </fieldset>
                      
                      
                  </div>

              </div>
              <div class="card-body">
                 
                 <fieldset class="form-group">
                 <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Brand</h6></label>
                 <?php
                 if(!empty($items)){?>
                   <!-- //place contents for edit -->
                   <input type='text' class='form-control detail_form' name='item_brand' value="<?php echo $items['brand'];?>"  placeholder="Please key in brand eg Toyota">
                   </fieldset>
                    </div>
                    <div class="card-body">
                    <input type='hidden' value='inventory/update_item' name='method' >
                      <input type='hidden' name='edit_id' value="<?php echo $items['id_item'];?>" id='item_id' >
                      <fieldset class="form-group">
                 <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Name/Model</h6></label>
                    <input type='text' class='form-control detail_form' name='item_name' value="<?php echo $items['name_item'];?>" placeholder="Please key in the name or model eg Camry">
                 </fieldset>
                 <fieldset class="form-group">
                 <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Number of Items</h6></label>
                    <input type='text' onkeypress="return isNumberKey(event)" class='form-control detail_form' name='item_number'  value="<?php echo $items['pieces']?:'';?>"  placeholder="Please key in the number of items eg 2" >
                 </fieldset>
                
                 <fieldset class="form-group">
                      <label class="header"><h6 class="card-title"><span class='text-danger'>* </span>Serial Numbers</h6></label>
                    <textarea  name='serial_number' class='form-control' style='height:max-content'  required> <?php echo $items['serial_number']?:'';?></textarea> 
                      </fieldset>
                      <fieldset class="form-group">
                 <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Ware House</h6></label>
                    <input type='text' class='form-control detail_form'  value="<?php echo $items['ware_house']?:'';?>" name='ware_house' placeholder="Please key in where you intend to store items">
                 </fieldset>
                 </div>
              <div class="card-body">
                 
                      <fieldset class="form-group">
                      <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Location Description</h6></label>
                    <textarea  name='description' class='form-control' style='height:20px'  required><?php echo $items['description']?:'';?></textarea> 
                      </fieldset>
                 </div> 
                  

               <?php  }else{ ?>
                <input type='text' class='form-control detail_form' name='item_brand'   placeholder="Please key in brand eg Toyota">
                   </fieldset>
                    </div>
                    <div class="card-body">
                    <input type='hidden' value='inventory/create_item' name='method' >
                      <input type='hidden' name='edit_id'  id='item_id' value="edit_id" >
               
                  <input type='hidden' name='method' id='process' value='category/create_item'>
                  <fieldset class="form-group">
                 <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Name/Model</h6></label>
                    <input type='text' class='form-control detail_form' name='item_name'  placeholder="Please key in the name or model eg Camry">
                 </fieldset>
                 <fieldset class="form-group">
                 <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Number of Items</h6></label>
                    <input type='text' onkeypress="return isNumberKey(event)" class='form-control detail_form' name='item_number'  placeholder="Please key in the number of items eg 2" >
                 </fieldset>
                
                 <fieldset class="form-group">
                      <label class="header"><h6 class="card-title"><span class='text-danger'>* </span>Serial Numbers</h6></label>
                    <textarea  name='serial_number' class='form-control' style='height:max-content'  required></textarea> 
                      </fieldset>
                      <fieldset class="form-group">
                 <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Ware House</h6></label>
                    <input type='text' class='form-control detail_form'  name='ware_house' placeholder="Please key in where you intend to store items">
                 </fieldset>
                 </div>
              <div class="card-body">
                 
                      <fieldset class="form-group">
                      <label class="header"> <h6 class="card-title"><span class='text-danger'>* </span>Location Description</h6></label>
                    <textarea  name='description' class='form-control' style='height:20px'  required></textarea> 
                      </fieldset>
                 </div> 
                  



               <?php }
                 ?>
                   
                    
                     
               
                  <div class="card-body pull-right">
                     <input class='btn btn-success form_btn_ad' type='button'  name='item_create' value='Submit'/>
                  </div>

              </div>

          </div>
      </div>
  </div>
</section>
              </div>     

</form>
            

              <!--end Place form here-->

      </div>
    </div>
  

    <div class="app-content content">
      <div class="content-wrapper">
      </div>
    </div>

    

<?php
    include('components/footer.php');
    ?>
    <script>
$(document).ready(
	
  $('#submit_comment').click(
    
    function(){

      var comment=$('#txtEditor').val();
    var title_testimony =$('#title_testimony').val();
     var testifier_name= $('#name_testifier').val();
      if(comment.trim()==''||title_testimony.trim()==''){
        alert('Please complete all fields');
      
    }else{

      $('#submit_comment').attr("type","submit");
      //process form
    }
  }
  )
)


</script>
  </body>
  
</html>





<?php }else{

    header('location:../unauthorised.php');




}

?>