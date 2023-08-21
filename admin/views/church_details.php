<style>
        .preview {
            display: inline-block;
            margin: 10px;
        }
    </style>


<?php
if(!isset($_SESSION)){session_start();}
if(!empty($_SESSION['user_type'])){

  
  if(isset($_SESSION['church_details'])&& $_SESSION['church_details']!==''){

          
     
   
     $church_data =(array)($_SESSION['church_details']);
         $name_church = $church_data[0]['name_church'];
         $address_church =$church_data[0]['address_church'];
         $church_logo =$church_data[0]['path_logo'];
         $church_id =$church_data[0]['id'];
         $past_pic =$church_data[0]['path_past'];
         $about_us =$church_data[0]['about_us'];
         $church_website =$church_data[0]['website_church'];
         $church_phone =$church_data[0]['phone_church'];
         $church_email =$church_data[0]['email_church'];
       
    
     
   
     
     }else{

       
       $name_church='';
       $address_church='';
       $church_logo='';
       $past_pic ='';
       $church_website='';
       $church_phone='';
       $church_logo='';
       $about_us='';
       $church_email='';
     }
 
 
 

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
            <h3 class="content-header-title">Church Details</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../controller/process.php?id=home/home"><i class="la la-arrow-circle-left"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Church Details
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
              <!--Place form here-->
<form action='../router/materials.php' method='post' name='form_process' accept-charset="utf-8" enctype="multipart/form-data">
<input type='hidden' name="church_details">

<div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
  <?php
 
 
  
  ?>
  
      <div class="col-xl-12 col-lg-12 col-md-12 ">
          <div class="card">
              
              <div class="card-block">
                 
                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span> Name of Church</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                       
                          <input type="text" name='name_church' class="form-control" id="title_testimony" placeholder="Name of church" value="<?php  echo $name_church=''?:$name_church;?>" required>
                      </fieldset>
                      
                      
                  </div>

              </div>

              <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span> Address of Church</h4>
              </div>
              <div class="form-group">
                  <div class="card-body">
                 
                      <fieldset class="form-group">
                    <textarea id="txtEditor" name='address' class='form-control jqte-test' style='height:100px'  required>
                    <?php echo $address_church=''?:$address_church;?></textarea> 

                      </fieldset>
                      
                     
		
		
	
                  </div>

                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>Phone Numbers</h4>
              </div>
              <div class="card-body">
                      <fieldset class="form-group">
                          <input type="text" name='phone_church' class="form-control rounded-left" id="title_testimony" placeholder="Enter Phone numbers seperated with comma ( , )" value="<?php echo $church_phone=''?:$church_phone;?>" required />
                      </fieldset>
                      
                      
                  </div>

                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>Email Address</h4>
              </div>
              <div class="card-body">
                      <fieldset class="form-group">
                          <input type="text" name='email_church' class="form-control rounded-left" id="title_testimony" placeholder="Enter church email address" value="<?php echo $church_email=''?:$church_email;?>" required />
                      </fieldset>
                      
                      
                  </div>
                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>Website</h4>
              </div>
              <div class="card-body">
                <?php
               // $church_website='www.uc.net';
                ?>
                      <fieldset class="form-group">
                          <input type="text" name='website_church' class="form-control rounded-left" id="title_testimony" placeholder="Enter church website" value="<?php echo $church_website=''?:$church_website;?>" required />
                      </fieldset>
                      
                      
                  </div>
                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>Church logo</h4>
              </div>
                  <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                          <input type="file" name='logo_id' class="form-control" id="file_input1" placeholder="Please attach a file"  onchange="previewFile(1)">
                          <div class="preview" id ='preview1'><?php if($church_logo!=''){?>
                            <img src='<?php $church_logo?>'>
                        <?php  }?> </div>
                      </fieldset>
                      
                      
                  </div>

              </div>

              <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>Pastor's picture</h4>
              </div>
                  <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                          <input type="file" name='past_pic' class="form-control" id="file_input_2" placeholder="Please attach a file"  onchange="previewFile(2)">
                          <div class="preview" id ='preview2'> <?php if($past_pic!=''){?>
                            <img src='<?php $past_pic?>'>
                        <?php  }?> </div>
                      </fieldset>
                      
                      
                  </div>

              </div>


              </div>
                  <div class="card-header">
                  <h4 class="card-title"><span class='text-danger'>*</span>About Us</h4>
              </div>

              <div class="card-body">
                 
                 <fieldset class="form-group">
               <textarea id="txtEditor" name='about_us' class='form-control jqte-test' style='height:100px'  required>
              <?php echo $about_us=''?:$about_us;?> </textarea> 

                 </fieldset>
                 
                



             </div>
                  
                  <div class="card-body pull-right">
                <?php
                if(isset($church_id)&&($church_id!='')){
                
                  echo "<input type='hidden' value ='$church_id' name='church_id'/>";

                }
                
                ?>
                     <button class='btn btn-success' type='button' id='submit_details'>Submit</button>
	
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
       function previewFile(inputNumber) {
            const fileInput = document.getElementById(`fileInput${inputNumber}`);
            const preview = document.getElementById(`preview${inputNumber}`);
            const file = fileInput.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    const image = document.createElement('img');
                    image.src = event.target.result;
                    image.style.maxWidth = '200px';
                    image.style.maxHeight = '200px';
                    
                    preview.innerHTML = '';
                    preview.appendChild(image);
                }
                
                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = 'No file selected';
            }
        };
       
    </script>

    <script>
$(document).ready(

 
	
  $('#submit_details').click(
    
    function(){
      var comment=$('#txtEditor').val();
    var title_testimony =$('#title_testimony').val();
     var testifier_name= $('#name_testifier').val();
      if(comment.trim()==''||title_testimony.trim()==''){
        alert('Please complete all fields');
      
    }else{

      $('#submit_details').attr("type","submit");
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