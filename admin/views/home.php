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

   <!-- end of side menu //////////////////////////////////////////////////////////////////////////// side-menu-->

    
   <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Chart -->
<div class="row match-height">
    <div class="col-12">
        <div class="">
            <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
        </div>
    </div>
</div>
<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180 "><?php
           
            
            ?>
                <h5 class="text-muted danger position-absolute p-1">Attendance</h5>
                <div>
                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="progress-stats-bar-chart"></div>
                    <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                    <div class ='form-group'>
                        <p class="text-card"><button class='btn btn-link' value='Add attendance' type='button' name='add_member'><i class='la la-plus' style="font-size:14px">  Add onsite attendance</i></button></p>
                        <p class="text-card"><button class='btn btn-link ' value='Add attendance' type='button' name='add_member'><i class='la la-eye' style="font-size:14px">  View onsite attendance</i></button></p>
                        <p class="text-card"><button class='btn  btn-link' value='Add attendance' type='button' name='add_member'><i class='la la-eye' style="font-size:14px">  View online attendance</i></button></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">Registered Attendee</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <div id="progress-stats-bar-chart1"></div>
                    <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">Live Videos</h5>
                <div>
                   
                    <i class="la la-video-camera warning font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <div id="progress-stats-bar-chart2 "><a class='p-1' href="#" id='video_start'><span class='la la-play text-danger '>  Start a live Video</span></a></div>
                    <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ eCommerce statistic -->

<!-- Statistics -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
            <div class="card  pull-up ecom-card-1 bg-white">
                <div class="card-header m-1">
                    <h4 class="card-title" id="heading-multiple-thumbnails"><i class='la la-users'></i> Members</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-2.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-3.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-4.png" alt="avatar">
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">  Members <span class ='text-info'> 100</span></h4>
                        
                       <div class='mb-1'></div>
                        <div class ='form-group'>
                        <p class="text-card"><button class='btn btn-link call_modal' value='Add a Member' type='button' name='add_member'><i class='la la-plus' style="font-size:14px"> Add a member</i></button></p>
                        </div>
                        <div class="form-group">
                         <p class="text-card" ><a class='card-link' href='../router/contact.php?id=member/fetch_members'><i class= 'la la-eye ml-1'style="font-size:14px">  View members</i></a></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-4 col-lg-12">


    <div class="card  pull-up ecom-card-1 bg-white">
                <div class="card-header m-1">
                    <h4 class="card-title" id="heading-multiple-thumbnails"><i class='la la-users'></i> Follow up</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-3.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-8.png" alt="avatar">
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">  Number of people to follow up <span class ='text-info'> 100</span></h4>
                        
                       <div class='mb-1'></div>
                        <div class ='form-group'>
                        <p class="text-card"><button class='btn btn-link call_modal' value='Add to follow up' type='button' name='add_follow_up'><i class='la la-plus' style="font-size:14px"> Add to follow up list</i></a></button></p>
                        </div>
                        <div class="form-group">
                         <p class="text-card" > <a href="../router/contact.php?id=follow_up/fetch_follow_up" class="card-link "><i class= 'la la-eye ml-1' style="font-size:14px"> View follow up list</i></a></p>
                        </div>
                    </div>
                </div>
            </div>

      
    </div>
    <div class="col-xl-4 col-lg-12">
    <div class="card  pull-up ecom-card-1 bg-white">
                <div class="card-header m-1">
                    <h4 class="card-title" id="heading-multiple-thumbnails"><i class='la la-users'></i> Converts</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-3.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="../theme-assets/images/portrait/small/avatar-s-8.png" alt="avatar">
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">  Number of Converts <span class ='text-info'> 100</span></h4>
                        
                       <div class='mb-1'></div>
                        <div class ='form-group'>
                        <p class="text-card"><button class='btn btn-link call_modal' value='Add to Converts' type='button' name='add_convert'><i class='la la-plus' style="font-size:14px"> Add to Converts</i></a></button></p>
                        </div>
                        <div class="form-group">
                         <p class="text-card" > <a href="../router/contact.php?id=convert/fetch_converts" class="card-link "><i class= 'la la-eye ml-1 mr-' style="font-size:14px"> View Convert list</i></a></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!--/ Statistics -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

   

   <?php
    include('components/footer.php');
    
    ?>
   <script type = "text/javascript" > history.pushState(null, null, location.href); history.back(); history.forward(); window.onpopstate = function () { history.go(1); }; </script>
   
   <script>
$('.form_btn_ad_embed').click(

  function(){
  var form = this.name;

    if( validateForm(form)){
      
     var former= $('#'+form).serialize();
     
       
      
      $.ajax({
                                type:"POST",
                          url: "<?php echo('../router/embed.php');?>",
                          cache: false,
                           data: former,
                             dataType: "html",
                          success: function(rec){
                           
                            var update =JSON.parse(rec);
                           
                             $('#checkt').html(update.info);
                         
                     $('.detail_form').val('');
                     $('.alert').fadeTo(200, 200).slideUp(200,function(){
  $('.alert').slideUp(200);
  
 
});
document.location.href = "../router/contact.php?<?php echo $goto;?>";

                         
                         
                     }
 });
      
      
    }
   
  }
  
  

)
</script>
   
  </body>
</html>





<?php }else{

    header('location:log_out.php');




}

?>
