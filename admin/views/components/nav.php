 <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-birthday" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
              if( $num_today_birthday>0|| $num_month_birthday>0){?>

<i class="la la-birthday-cake text-red" data-toggle="tooltip" data-original-title="Birthdays"> <?php echo $num_today_birthday?></i><span class="selected-language"></span></a>
             <?php }else{?>
              <i class="la la-birthday-cake text-white" data-toggle="tooltip" data-original-title="Birthdays"></i><span class="selected-language"></span></a>

            <?php }
              ?>
                <div class="dropdown-menu" aria-labelledby="dropdown-birthday">
                <?php
                if($num_today_birthday){?>
                 <div class="arrow_box"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o text-warning"></i>View today's birthday  <?php echo $num_today_birthday?></a><a class="dropdown-item" href="#"><i class="la la-calendar-o text-primary"></i> View this month's birthday  <?php echo $num_month_birthday?></a></div>

               <?php }else{?>
                <div class="arrow_box"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o text-warning"></i>View today's birthday</a><a class="dropdown-item" href="#"><i class="la la-calendar-o text-primary"></i> View this month's birthday  <?php echo $num_month_birthday?></a></div>

              <?php  }
                
                ?>
                 
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail" data-toggle="tooltip" data-original-title="Mails">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="../router/contact.php?id=enquiries/index"><i class="ft-book"></i> Enquiries</a><a class="dropdown-item" href="../router/contact.php?id=enquiries/prayer_request"><i class="ft-bookmark"></i> Prayer Requests</a>
                  <!-- <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a> -->
                  </div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="../theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="../theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="../controller/logout.php?id=log_out"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
