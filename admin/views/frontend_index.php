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
          <div><?php 
   
   if(isset($_SESSION['update'])){
     echo $_SESSION['update'];
     unset($_SESSION['update']);
   }?></div>
            <h3 class="content-header-title">Slider Home</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../controller/process.php?id=home/home"><i class="la la-arrow-circle-left"></i></a>
                  </li>
                  <li class="breadcrumb-item active">
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
              <!--Place table here-->



              <div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Slider Images</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
        <?php
        if(!empty($_SESSION['sliders'])){
          
          echo "<div class=' pull-right'><a href='../router/frontend.php?id=frontend/add_slider' class='pull-right btn btn-link'>Add to Sliders</a></div>";
        }else{
          echo "<div class=' pull-right'><a href='../router/frontend.php?id=frontend/create_slider' class='pull-right btn btn-link'>Create Sliders</a></div>";
       
        }
        
        ?>
       
				
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Image Name</th>
									<th>Picture</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
                  <?php
                  // var_dump($_SESSION['sliders']);
                  $i =0;
                  foreach($_SESSION['sliders'] as $slider){

                   
                    $i++;
                    echo "<tr>";
                    echo "<th>";
                    echo $i;
                    echo "</th>";
                  
                    echo "<td>";
                    echo $slider['name'];
                    echo "</td>";
                  
                    echo "<td>";
                    echo "<img src=".$slider['path']." style='height:150px; width:150px'"."/>";
                    echo "</td>";
                  
                    echo "<form action='../router/frontend.php' method='post' name='alter_follow_up'>";
                                  echo "<input type='hidden' name='frontend' value='edit/delete/frontend'>";
                    echo "<td>";
                    
                    echo "<button class='btn btn-flat btn-danger mr-1 deleted' id='deleted' type='button' name='frontend_delete'". "value=".$slider['id']."><i class='la la-trash' ></i></button>";
      
                    echo "<button class='btn btn-flat btn-info' class='edit'  name='frontend_edit' ". "value=".$slider['id']."><i class='la la-pencil'></i></button>";
                    
                    echo "</td>";
                    echo  "</form>";
                       
                    echo "</tr>";
                    
                  }
                  
                  
                  
                  ?>
								
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--end of place table-->
      </div>
    </div>
  

   

<?php
    include('components/footer.php');
    ?>
   
  </body>
  
</html>





<?php }else{

    header('location:../unauthorised.php');




}

?>