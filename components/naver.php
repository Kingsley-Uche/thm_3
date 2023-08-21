<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar" style="background-color:#083C69;position:fixed">
            <div class="container">
         
            <a href="./index.php"><img src="./admin/<?php echo  $path_logo=''?:$path_logo;?>" alt="<?php echo $_SESSION['church_info']==null?:$_SESSION['church_info']['name_church'];?>" class='avatar img-fluid rounded' style='max-height:50px'></a>
                <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
                        <li class="nav-item"><a href="index.php#about-section" class="nav-link"><span>About</span></a></li>
                        <li class="nav-item"><a href="index.php#ministry-section" class="nav-link"><span>Testimonies</span></a></li>
                       
                        <li class="nav-item"><a href="index.php#ministry-section" class="nav-link"><span>Ministry Materials</span></a></li>
						 <li class="nav-item"><a href="#" class="nav-link"><span>Give</span></a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link"><span>Contact us</span></a></li>
                        <li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalAppointment">Prayer Request</a></li>
						 
                    </ul>
                </div>
            </div>
        </nav>
        