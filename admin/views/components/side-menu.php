<?php
if(isset($_SESSION['site_info'])){
  
  $site_info =(array)$_SESSION['site_info']; 
  $site_info_pic=str_replace('..','',$site_info['path_logo']);

}
 

     ?>

    
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="../theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="home.php"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo $site_info==null?:$site_info['path_logo'];?>"/>
              <h3 class="brand-text"><?php echo $site_info==null?:$site_info['name_church'];?></h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
         
        </ul>
      </div>
      
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="../controller/process.php?id=home/home"><i class="ft-home"></i><span class="menu-title" data-i18n="">Home</span></a>
          </li>
          <li class=" nav-item"><a href="../controller/process.php?id=testimonies/testimonies_index"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Testimonies</span></a>
          </li>
          <li class=" nav-item"><a href="../controller/process.php?id=events/events_index"><i class="la la-group"></i><span class="menu-title" data-i18n="">Events</span></a>
          </li>
          <li class=" nav-item"><a href="../router/materials.php?id=ministry/ministry_index"><i class="la la-file-video-o"></i><span class="menu-title" data-i18n="">Ministry Materials</span></a>
          </li>
          <li class=" nav-item"><a href="../router/materials.php?id=church_details/fetch_details"><i class="la la-map-marker"></i><span class="menu-title" data-i18n="">Church Details</span></a>
          </li>
          
          <li class=" nav-item"><a href="../router/payment_gateway.php?id=givings/call_detail"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Online Givings</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title" data-i18n="">Ministry Groups</span></a>
          </li>
          <li class=" nav-item"><a href="../router/store.php?id=inventory/index"><i class="la la-suitcase"></i><span class="menu-title" data-i18n="">Inventory</span></a>
          <li class=" nav-item"><a href="../router/frontend.php?id=frontend/index"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Front end</span></a>

          </li>
          <!-- <li class=" nav-item"><a href="#"><i class="la la-code"></i><span class="menu-title" data-i18n="">Search Engine keywords</span></a>
          </li> -->
          </li>
          
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    