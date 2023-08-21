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
				<h4 class="card-title">Online Givers list</h4>
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
			<div><?php 
   
   if(isset($_SESSION['update'])){
     echo $_SESSION['update'];
     unset($_SESSION['update']);
   }?></div>
				<div class="card-body">
             
				</div>
				<div class="table-responsive">
				<?php
      
	  if(isset($_SESSION['after_page']) &&!empty($_SESSION['after_page'])){
		$goto =$_SESSION['after_page'];

	  }else{
		  $goto ="index.php";
	  }
      
      ?>
				<div class='card-body'>
				<input type='text search' placeholder="search by name" id='search' class="form-coontrol" onkeyup="search_box"></div>
					<table class="table table-striped" id='content_table'>
					
                    <thead class="thead-light">
							<tr>
								<th scope="col">#</th>
								<th scope="col"> Name</th>
								
								
                                <th scope="col">Email </th>
                                <th scope="col">Phone</th>
                                <th scope="col">Purpose</th>
                               
								
								<th scope="col" class='text-center'>Amount</th>
								<th scope="col" class='text-center'>Date</th>
							</tr>
						</thead>
						<tbody id='members'>

						<?php
						// var_dump($_SESSION['members']);
						$count=0;
						if(!empty($_SESSION['givings'])){

							foreach($_SESSION['givings'] as $memb){
								$count++;
								echo "<tr>";
							   echo "<th scope='row'>$count</th>";  
							   echo "<td>".$memb['name']."</td>";
							   echo "<td>".$memb['email']."</td>";
							   echo "<td>".$memb['phone']."</td>";
							   echo "<td>".$memb['purpose']."</td>";
							   echo "<td>".$memb['amount']."</td>";
							 
   
							}



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
	
  </body>
</html>





<?php }else{

    header('location:../unauthorised.php');




}

?>