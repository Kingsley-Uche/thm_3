<?php
if(!isset($_SESSION)){
  session_start();}
  if(isset($_SESSION['user_type'])){
   
   header('location:views/home.php');
  }else{



  
include("header.php");
?>
<script type = "text/javascript" > history.pushState(null, null, location.href); history.back(); history.forward(); window.onpopstate = function () { history.go(1); }; </script>
   
<div class='row mt-5 bg-light'>
<div class="col-lg-3">

</div>

<div class='col-md-6 register'>
    <!-- Default form register -->
<form class="text-center border border-light p-5" action="#!" name='register_form' id='register_form'>

<p class="h4 mb-4">Sign up</p>
<div class='update' class='bg-white'></div>
<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control reg" placeholder="First name" name='fname' required>
        <input type='hidden' name="<?php echo 'register'; ?>" /> 
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="defaultRegisterFormLastName" class="form-control reg" placeholder="Last name" name='lname' required>
    </div>
</div>

<!-- E-mail -->
<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4 reg" placeholder="E-mail" name='email' required>

<!-- Password -->
<input type="password" id="defaultRegisterFormPassword" class="form-control reg" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name='password' required>
<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

</small>
<!-- confirm password -->
<input type="password" id="defaultRegisterFormPassword2" class="form-control reg" placeholder="Confirm password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name='cf_password' required>
<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    Please use the same password as above.
</small>
<select name="user_type" id="user" class='form-control  mb-4 select2 reg' required>
    <option value="">Select usertype</option>
    <option value="1">Admin 1</option>
    <option value="2">Admin 2</option>
</select>
<!-- Phone number -->
<input type="text" id="defaultRegisterPhonePassword" class="form-control reg" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name='phone'>
<small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
    Optional - for two step authentication
</small>

<!-- Newsletter -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
</div>

<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="button" id='signUp'>Sign Up</button>
<p class=text-center>Already have an account?<a class='signIn' href='#'> Please sign in<a></p>

<!-- Social register -->
<p>or sign up with:</p>

<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

<hr>

<!-- Terms of service -->
<p>By clicking
    <em>Sign up</em> you agree to our
    <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->


</div>


    <div class="col-md-6" id='login'>
        
<!-- Material form login -->
<div class="card">
<form name="sign_in" id='sign_in' action='controller/process.php' method='post'>
<h5 class="card-header info-color white-text text-center py-4 mb-5 bg-info">
  <strong>Sign in</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">
<div class='update' class='bg-white'>

<?php if(isset($_SESSION['updated'])){
 echo $_SESSION['updated'];
  unset($_SESSION['updated']);
}
?></div>
  <!-- Form -->
  <form class="text-center" style="color: #757575;" action="#!" name='login_form' id='login_form'>

    <!-- Email -->
    <div class="md-form form-group">
      <input type="email" id="materialLoginFormEmail" class="form-control get_in"  placeholder="Email" name='username' required >
      <label for="materialLoginFormEmail" class='sr-only'>Username</label>
    </div>

    <!-- Password -->
    <div class="md-form form-group">
      <input type="password" id="materialLoginFormPassword" class="form-control get_in"  placeholder="Password" name='password' required >
      <label for="materialLoginFormPassword"class='sr-only'>Password</label>
      <input type='hidden' name='sign_in'>
    </div>
    <!-- user-type -->
    <div class="md-form form-group">
      <select name="user_type" id="user" class='form-control select2 get_in'>
          <option value="">Select User Type</option>

  <option value="1">Admin 1</option>
  <option value="2">Admin 2</option>
      </select>
     
    </div>

    <div class="d-flex justify-content-around">
      <div>
        <!-- Remember me -->
        <div class="form-check form-group">
          <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
          <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
        </div>
      </div>
      <div>
        <!-- Forgot password -->
        <a href="">Forgot password?</a>
      </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="button" id='signIn'>Sign in</button>

    <!-- Register -->
    <p>Not a member?
      <a href="#" id='register'>Register</a>
    </p>

    <!-- Social login -->
    <p>or sign in with:</p>
    <a type="button" class="btn-floating btn-fb btn-sm">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="btn-floating btn-tw btn-sm">
      <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="btn-floating btn-li btn-sm">
      <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="btn-floating btn-git btn-sm">
      <i class="fab fa-github"></i>
    </a>

  </form>
  <!-- Form -->

</div>

</div>
<!-- Material form login -->
    </div>
    
</div>
<?php
$sign_up =''


?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
<script src="./js/jquery.js" type="text/javascript"></script>
<script>
    //manage forms on document load and on events
    // $(window).load(
    //     function(){
            $('#login').show();
            $('.register').hide();
    //     }
    // );
    $(document).ready(
       
        $('#register').click(
            function(){
                $('#login').hide();
                $('.register').show();
                
              
            }
        )
    );
    $(document).ready(
       
       $('.signIn').click(
           function(){
               $('#login').show();
               $('.register').hide();
               
             
           }
       ),

   );
  $(document).ready(
    $('#signIn').click(
        function(){
            //use valz to store the values of each signin input value class(getin)
           var valz=$('.get_in').filter(
               function(){
                   return this.value=='';
               }
           );
           if(valz.length==0){
               var pass=$('#materialLoginFormPassword').val();

               if(pass.trim()==''){
                   alert('Spaces are not allowed for password field');
               }else{
                
                 $('#signIn').attr("type","submit");
                
//                   //run ajax call for sign up
//                   var data = $('#login_form').serialize();
                  
//                   $.ajax({
//   method: "POST",
//   url: "./controller/auth.php",
//   data:data,
//   success:function(msg){
    
//     $('.latest').remove();
    
//      if(msg==1){
        
//          //login was successful so redirect
//         //  window.location.replace('views/home.php');
//         //  return false;
//         window.location.href ='homepage.php' ; 
         
//      }else{
       
//         $('.update').append("<h3 class='text-danger latest'>Invalid login details</h3>");
//      }
//   }
  
// })

               }
           }else{
               alert('please complete the mandatory fields');
           }
        }
    )
      );
    
</script>
<script>
    $(document).ready(
    $('#signUp').click(
        function(){
             //use valz to store the values of each signin input value class(reg)
           var valz=$('.reg').filter(
               function(){
                   return this.value=='';
               }
           );
           if(valz.length==0){
            var pass=$('#defaultRegisterFormPassword').val();
               var pass2=$('#defaultRegisterFormPassword2').val();

               if(pass.trim()==''||pass.trim()==''){
                   alert('Spaces are not allowed for password field.');
               }else if(pass!==pass2){
                   alert('password mismatch.');

               }else{


                  //run ajax call for sign up
                  var data = $('#register_form').serialize();
                  
                  $.ajax({
  method: "POST",
  url: "./controller/process.php",
  data:data,
  success:function(msg){
   
    //console.log(msg);
   $('.latest').remove();
      if(msg ==1){
        $('#login').show();
               $('.register').hide();
       
          $('.update').append("<p class='alert alert-success latest'>Registered Successfully! Kindly Log in.</p>")

      }else{
          
        ('.update').append("<p class='alert alert-danger'>You are already a member. Please log in to continue</p>");
        //alert(msg);
        
      }

  }
  
})

               }
           }else{
               alert('please complete the mandatory fields');
           }
        }
    )
      );
</script>
<script>
$('.alert').fadeTo(3000, 500).slideUp(500,function(){
  $('.alert').slideUp(500);
})


</script>
	
<?php 
include("footer.php");
  }
?>