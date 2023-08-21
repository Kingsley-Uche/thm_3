<?php
//load head section
include("components/head.php");

?>
<body>
    <!-- Page Preloder -->
    <?php
    //load nav bar
    include("components/naver.php");
    
    
    ?>
    
    <!-- Header Section End -->

    <!-- Categories Section Begin -->
   
<!-- Categories Section End -->
<!-- featured sections starts here -->
<section class="ftco-section contact-section ftco-no-pb bg-light" id="contact-section">
      <div class="container card rouned bg-white">
      	<div class="row justify-content-center mb-5 pb-3 ">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <!-- <span class="subheading">Contact</span> -->
            <h2 class="mb-4">Contact Us</h2>
            
          </div>
        </div>
        <div class="row d-flex contact-info mb-5 bg-white">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center smart">
          			<span class="icon-map-signs "></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p><?php echo $address_church ;?></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate  bg-white">
          	<div class="align-self-stretch box p-4 text-center ">
          		<div class="icon d-flex align-items-center justify-content-center smart">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://<?php echo $phone_church;?>"><?php echo $phone_church;?></a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate  bg-white">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center smart">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:<?php echo $email_church ?>"><?php echo $email_church ?></a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center smart">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#"><?php echo $website_church ?></a></p>
	          </div>
          </div>
        </div>
        <div class="row no-gutters block-9 ">
          <div class="col-md-6 order-md-last d-flex card">
         
          
          <form action="config/online.php" class="smart p-5 contact-form" name='enquiry_form' id='enquiry_form' method='post'>
              <div class="form-group">
              <h3 class='text-danger bg-light p-2 rounded'>Enquiries? Please get in touch.</h3>
                <input type="text" class="form-control" placeholder="Your Name" name="enquiry_name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name="enquiry_email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject"  name="enquiry_subject">
              </div>
              <div class="form-group">
                <textarea name="enquiry_message" id="" cols="30" rows="7" class="form-control" placeholder="Message" ></textarea>
              </div>
              <div class="form-group">
                <label class='text-white bg-card p-1 rounded'>Code :</label><span class='codeed text-bold text-warning p-1 rounded bg-light' ></span>
                </div><div class="form-group">
                <label class='sr-only'>Enter the code above</label><input class='form-control' type='text' name='enquiry_form_coded' id='enquiry_form_coded' placeholder="Enter the code above" onkeypress="return isNumberKey(event)"  maxlength="4"/>
                </div>
              <div class="form-group">
                <input type="button" name='enquiry_form' value="Send Message" class="form_btn btn btn-danger py-3 px-5" id='enquiry'>
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
           
          </div>
        </div>
      </div>
    </section>
       
<!-- Contact Section End -->
<!-- Services Section End -->

<div class='mb-5 '></div>
<!-- Instagram End -->

<?php
include("components/footer.php");
?>