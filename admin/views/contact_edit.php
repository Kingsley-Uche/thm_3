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

          <?php
        
           $edit= $_SESSION['edit'];
           $title= $_SESSION['edit_title'];
          $file=  $_SESSION['file_send'];
          $type =$_SESSION['type'];
          
          
          
          
          ?>
          
            <h3 class="content-header-title"></h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="la la-arrow-circle-left"></i></a>
                  </li>
                  <li class="breadcrumb-item active">
                  </li>
                  <?php
                  
                 
                  ?>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
              <!--Place form here-->

<input type='hidden' name="testimony_update">


<div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
  
  <div class="modal-body">
        <form name ='edit_contact_form' action='<?php echo('../router/contact.php');?>' method ='post'  id='edit_contact_form'>
        <div id='update'></div>
        <div class="card">
				<div class="card-content">
					<div class="card-body">
						<h4 class="card-title" id='title_modal'><?php echo $title;  ?></h4>
						<h6 class="card-subtitle text-muted" >Details</h6>
					</div>
					<div class="card-body">
					
							<div class="form-body" action='' method='post'>
								<div class="form-group">
									<label for="donationinput1" class="sr-only">First Name</label>
									<input type="text" id="donationinput1" class="form-control detail_form" placeholder="First Name" name="fname" value="<?php echo $edit['f_name'];?>">
								</div>
								<div class="form-group">
									<label for="donationinput2" class="sr-only">Last Name</label>
									<input type="text" id="donationinput2" class="form-control detail_form" placeholder="Last Name" name="lname" value="<?php echo $edit['l_name'];?>">
								</div>
								<div class="form-group">
									<label for="donationinput3" class="sr-only">E-mail</label>
									<input type="email" id="donationinput3" class="form-control detail_form" placeholder="E-mail" name="email" value="<?php echo $edit['email'];?>">
								</div>

								<div class="form-group">
									<label for="donationinput4" class="sr-only">Contact Number</label>
									<input type="text" value="<?php echo $edit['phone'];?>" id="donationinput4" class="form-control detail_form" placeholder="Phone" name="phone" onkeypress="return isNumberKey(event)"/>
                                    <input type='hidden' id='detail' name='contact' value="<?php echo $type;?>"/>
                                    <input type='hidden' name="<?php echo $file;?>" value="<?php echo $edit['id'];?>">
								</div>
								<div class="form-group">
									<label for="donationinput7" class="sr-only">Address</label>
									<textarea id="donationinput7" rows="5" class="form-control square detail_form detail_form" name="address" placeholder="House Address" required><?php echo $edit['address'];?></textarea>
								</div>
                <div class="form-group">
									<label for="donationinput3" class="">Date of Birth</label>

                  <?php //var_dump($_SESSION['edit']);
                   $date =$edit['year_dob'].'-'.$edit['month_dob'].'-'.$edit['day_dob'];
                   
                
                  ?>
									<input type="date" id="donationinput5" class="form-control detail_form" placeholder="Enter Date of Birth" name="dob" value="<?php echo $date;?>">
								</div>
							</div>
                            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary form_btn_ad" name='edit_contact_form'>Save</button>
        </form>
      </div>
      <?php
      $goto =$_SESSION['after_page'];
      
      ?>
							
						
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