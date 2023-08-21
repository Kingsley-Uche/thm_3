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
            <h3 class="content-header-title">Create Slider</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../router/frontend.php?id=frontend/index"><i class="la la-arrow-circle-left"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Create Slider
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
              <!--Place form here-->
<form action='../router/frontend.php' method='post' name='file_upload' accept-charset="utf-8" enctype="multipart/form-data" id='file_upload'>
<input type='hidden' name="church_details">

<div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
  <?php
  if(isset($_SESSION['church_details'])){
  $church_data =(array)($_SESSION['church_details']);
      $name_church = $church_data[0]['name_church'];
      $address_church =$church_data[0]['address_church'];
      $church_logo =$church_data[0]['path'];
      $church_id =$church_data[0]['id'];
   


  

  
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
                  <h4 class="card-title"><span class='text-danger'>*</span>Slider pictures</h4>
              </div>
                  <div class="card-block">
                  <div class="card-body" id='coba'>
                      <fieldset class="form-group">
                <label>Choose Images</label>

                      </fieldset>
                      
                      
                  </div>
                  <div class="card-body pull-right">
                  <input type="submit" name="upload_file" value="Upload_sliders" class="btn btn-success" ></div>

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

    

<?php
    include('components/footer.php');
    ?>
    <script>

$('#file_upload').on( 'submit', function(e){
 var form =$('#file_upload');
 form.children('input[type="file"]').each(function(){
            if($(this).val() == '') {
                alert('You are missing a field');
                e.preventDefault();
                return false;
            }
        });

}
)

</script>

<script type="text/javascript" src="../assetz/dist/js/spartan-multi-image-picker-min.js"></script>
<script>


$("#coba").spartanMultiImagePicker({
	fieldName:   'fileUpload[]',
  allowedExt:  `png|jpg|jpeg|gif`,
  dropFileLabel:    "Drop Here",
  groupClassName:'upload_file'
 
});
  
  
  
  </script>

  </body>
  
</html>





<?php }else{

    header('location:../unauthorised.php');




}

?>