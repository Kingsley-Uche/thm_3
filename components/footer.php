
    
    
    
    
    <footer class="ftco-footer ftco-section" style="background-color:#083C69;">
        <div class="container">
          <div class="row mb-5">
            <!-- <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">About <span>Neutral</span></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div> -->
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                  
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                </ul>
              </div>
            </div>
           
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-0">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $address_church;?></span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $phone_church;?></span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $email_church;?></span></a></li>
                    </ul>
                  </div>
                  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://kammasoft.tech" target="_blank">Kammasoft Technologies</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <!-- Modal -->
      <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAppointmentLabel">Let's Pray about it</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="config/online.php" name='contact_form' id ='contact_form' method='post' >
                <div class="form-group">
                  <label for="appointment_name" class="text-black">Full Name</label>
                  <input type="text" class="form-control" id="appointment_name" name='name_prayer'>
                </div>
                <div class="form-group">
                  <label for="appointment_email" class="text-black">Email</label>
                  <input type="email" class="form-control" id="appointment_email" name='email_prayer'>
                </div>
                <div class="form-group">
                  <label for="appointment_email" class="text-black">Phone</label>
                  <input type="text" class="form-control" id="appointment_email" onkeypress="return isNumberKey(event)" name='phone_prayer'>
                  <input type='hidden' name='prayer_request' value='prayer_request'/>
                </div>
               
                
  
                <div class="form-group">
                  <label for="appointment_message" class="text-black">Message</label>
                  <textarea name="prayer_content" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                <label class='text-white bg-dark p-1 rounded'>Code :</label><span class='codeed text-bold text-warning p-1 rounded bg-light' ></span>
                </div><div class="form-group">
                <label class='sr-only'>Enter the code above</label><input class='form-control' type='text' name='contact_form_coded' id='contact_form_coded' placeholder="Enter the code above" onkeypress="return isNumberKey(event)"  maxlength="4"/>
                </div>
                <div class="form-group">
                  <input type="button" id='prayer' value="Send Message" class="btn btn-primary form_btn" name='contact_form'>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>



      <div class="modal fade" id="modalWatchService" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAppointmentLabel">Welcome to our online Church</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="config/online.php" name='online_church' id ='online_church' method='post' >
                <div class="form-group">
                  <label for="appointment_name" class="text-black">Full Name</label>
                  <input type="text" name='member_name' class="form-control" id="appointment_name">
                </div>
                <div class="form-group">
                  <label for="appointment_email" class="text-black">Email</label>
                  <input type="email" class="form-control" id="appointment_email" name='member_email'>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="appointment_date" class="text-black">Phone</label>
                      <input type="text" name='member_phone' class="form-control" id="appointment_phone" onkeypress="return isNumberKey(event)">
                    </div>    
                  </div>
                  
                </div>
                
                <div class="form-group">
                <label class='text-white bg-dark p-1 rounded'>Code :</label><span class='codeed text-bold text-warning p-1 rounded bg-light' ></span>
                </div><div class="form-group">
                <label class='sr-only'>Enter the code above</label><input class='form-control' type='text' name='online_church_coded' id='online_church_coded' placeholder="Enter the code above" onkeypress="return isNumberKey(event)"  maxlength="4"/>
                </div>
               
                <div class="form-group">
                  <input type="button" value="Go Online!" class="btn btn-primary form_btn" name='online_church' id='go_online'/>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>




    

<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
  
  
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js_2/js_2.js"></script>


    <script>
function validateForm(form){
    var form = document.getElementById(form);
    var inputs = form.getElementsByTagName("input");
    input = null, flag = true;
    for(var i = 0, len = inputs.length; i < len; i++) {
        input = inputs[i];
        if(!input.value.trim()) {
            flag = false;
           
            
          
            alert("Please fill all fields");
            input.focus();
           // alert(input.name);
            
            break;
        }
    }
    return(flag);
}

</script>

<script>
$('.form_btn').click(
  
  function(){
  var form = this.name;
  var id=this.id;
  var name_code =form+'_coded';

    if( validateForm(form)){
      
   
       //check for captcha
       if($('.codeed').html()!=$('#'+name_code).val()){
         alert('Please verify that you are not a robbot by entering the correct code');
         $('#'+name_code).focus();
       
         return;

       }
      
      
      
     $('#'+id).attr('type','submit');
    }
   
  }
);
$('.alert').fadeTo(200, 200).slideUp(200,function(){
  $('.alert').slideUp(200);});
</script>
<script>
// function coded (){
  $(document).ready(
    function(){
      var code_veify =Math.floor(1000+Math.random()*9000);
      $('.codeed').html(code_veify);
    }
  )




</script>
<script>
  $(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>

    </body>
  </html>