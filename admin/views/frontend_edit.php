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
   
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        
          <div class="content-header-left col-md-4 col-12 mb-2">
          <div><?php 
   
   if(isset($_SESSION['update'])){
     echo $_SESSION['update'];
     unset($_SESSION['update']);
   }?></div>
            <h3 class="content-header-title">Slider Home</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../controller/process.php?id=events/events_index"><i class="la la-arrow-circle-left"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Slider Home
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
              <!--Place form here-->
<form action='../router/frontend.php' method='post' name='file_upload' accept-charset="utf-8" enctype="multipart/form-data" id='file_upload'>
<input type='hidden' name="frontend" value='edit/update/frontend'>

<div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
  <?php
  if(isset($_SESSION['slider_edit'])){
  $church_data =(array)($_SESSION['slider_edit']);
      $name_pic = $church_data['name'];
    
      $slider_pic =$church_data['path'];
      $slider_id =$church_data['id'];
   


 
  }else{
    
    $name_church='';
    $address_church='';
    $church_logo='';



  }
 
  
  ?>
  
      <div class="col-xl-12 col-lg-12 col-md-12 ">
          <div class="card">
              
              <div class="card-block">
                 
            

              <div class="form-group">
                
                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>Replace Image</h4>
              </div>
                  <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                <label>Choose Images</label>
                <?php
                
                 

  
                
                ?>
                      </fieldset>
                      <fieldset class="form-group">
                          <input type="file" name='logo_id' class="form-control" id="title_testimony" placeholder="Please attach a file"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0]);
                          document.getElementById('blah').height='100';value='<?php echo $slider_pic ?>'">
                          <img id="blah" alt="" height="100px" src='<?php echo $slider_pic ?>' />
                      </fieldset>
                      
                      
                  </div>
                  <div class="card-body pull-right">
                  <input type="hidden" name="slider_id" value="<?php echo $slider_id?>" >
                  <input type="submit" name="frontend_update" value="Upload_sliders" class="btn btn-success" ></div>

              </div>
              <div id ='uploadStatus'></div>
             
                  
                  <div class="card-body gallery" id ='imagesPreview'>
            
                
	
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

    

  </body>
  
</html>





<?php }else{

    header('location:../unauthorised.php');




}

?>