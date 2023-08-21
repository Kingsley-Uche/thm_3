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

    <!-- //////////////////////////////////////////////////////////////////////////// forms and tables-->
    

    <div class="app-content content">
      <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
	<div class="col-12 mt-3">
		<div class="card">
       
			<div class="card-header">
				<h4 class="card-title">Enquiries</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
                <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">/Enquiries</li>
    </ol>
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
			<div><?php 
   
   if(isset($_SESSION['update'])){
     echo $_SESSION['update'];
     unset($_SESSION['update']);
   }?></div>
				<div class="card-body">
                
				</div>
				<?php if(isset($_SESSION['enquiry'])&& $_SESSION['enquiry']!=''){
					$items= $_SESSION['enquiry'];
						
				}?>
				<div class="table-responsive">
				<div class='card-body'>
				<input type='text' placeholder="search by name" id='testifiers' class="form-coontrol"></div>
					<table class="table table-striped">
					
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								
								<th scope="col">Email</th>
                                <th scope="col">Subject</th>
								<th scope="col">Message</th>
                                <th scope="col">Time</th>
								
								<!-- <th scope="col" class='text-center'>Action</th> -->
							</tr>
						</thead>
						<tbody id='table_testifiers'>

						<?php
						
 						$count=0;
 						foreach($items as $event){
 							
 							$count++; 							// var_dump($testimony);
 							echo "<tr>";
 							echo "<th scope='row'>$count</th>";
							
 							echo "<td>";
 							echo $event['enquiry_name'];
 							echo "</td>";
								
 							echo "<td>";

 						 echo $event['enquiry_email'];
 							echo "</td>";
							 echo "<td>";

 						 echo $event['enquiry_subject'];
 							echo "</td>";
							echo "<td>";

 						 echo $event['enquiry_message'];
 							echo "</td>";
						
                             echo "<td>";

 						 echo $event['enquiry_time'];
 							echo "</td>";
							
 							
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
<!-- Striped rows end -->

      </div>
    </div>




<?php
    include('components/footer.php');
    ?>
<?php }else{
	header('location:../unauthorised.php');

}?>