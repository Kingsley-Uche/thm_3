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
include('../views/components/side-menu.php');?>
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
            <h3 class="content-header-title">Add Ministry Videos</h3>
          
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../controller/process.php?id=ministries/ministry_index"><i class="la la-arrow-circle-left"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Add Ministry Videos
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
              <!--Place form here-->
<form action='../router/materials.php' method='post' name='form_process' accept-charset="utf-8" enctype="multipart/form-data">
<input type='hidden' name="ministry_video">

<div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
  
      <div class="col-xl-12 col-lg-12 col-md-12 ">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>File Details</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                        <i class='la la-video-camera primary'></i><input type="text" class="form-control" id="name_testifier" name="video_url" placeholder="Enter your video embed url"  required>
                      </fieldset>
                      
                  </div>
                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span> Title</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                          <input type="text" name='title_video' class="form-control" id="title_testimony" placeholder="Title" required>
                      </fieldset>
                      
                      
                  </div>

              </div>

              <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span> Description</h4>
              </div>
              <div class="form-group">
                  <div class="card-body">
                 
                      <fieldset class="form-group">
                    <textarea id="txtEditor" name='content' class='form-control jqte-test' style='height:100px'  required></textarea> 
                      </fieldset>
                      
                     
		
		
	
                  </div>
                  <div class="card-body pull-right">
                     <button class='btn btn-success' type='button' id='submit_comment'>Submit</button>
                      
                     
		
		
	
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
    include('../views/components/footer.php');
    ?>
    <script>
$(document).ready(
	
  $('#submit_comment').click(
    
    function(){
      var comment=$('#txtEditor').val();
    var title_testimony =$('#title_testimony').val();
     var testifier_name= $('#name_testifier').val();
      if(comment.trim()==''||title_testimony.trim()==''||testifier_name.trim()==''){
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