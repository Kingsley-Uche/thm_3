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
				<h4 class="card-title">Inventories</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
                <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">/Inventory</li>
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
                <a class="m-1 " href='#'><button class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="la la-plus"></i>Add / Edit Category</button></a>
				<p class='text text-muted'><i class='text-danger'>*</i> Please create category before items.</p>
					<a class="m-1 btn btn-primary pull-right" href='../router/store.php?id=inventory/add_items'><i class="la la-plus"></i> Add Item</i> </a>
				</div>
				<?php if(isset($_SESSION['items'])&& $_SESSION['items']!=''){
					$items= $_SESSION['items'];
						
				}?>
				<div class="table-responsive">
				<div class='card-body'>
				<input type='text' placeholder="search by name" id='testifiers' class="form-coontrol"></div>
					<table class="table table-striped">
					
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Category</th>
								
								<th scope="col">Brand</th>
                                <th scope="col">Name/Model</th>
								<th scope="col">Number of Items</th>
								<th scope="col">Serial Numbers</th>
							
                                <th scope="col">Ware house</th>
                                <th scope="col">Location Description</th>
								<th scope="col">Create/Edit Date</th>
								<th scope="col" class='text-center'>Action</th>
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
 							echo $event['name'];
 							echo "</td>";
								
 							echo "<td>";

 						 echo $event['brand'];
 							echo "</td>";
							 echo "<td>";

 						 echo $event['name_item'];
 							echo "</td>";
							echo "<td>";

 						 echo $event['pieces'];
 							echo "</td>";
							echo "<td>";

 						 echo $event['serial_number'];
 							echo "</td>";

								echo "<td>";

 						 echo $event['ware_house'];
 							echo "</td>";
							echo "<td>";

 						 echo $event['description'];
 							echo "</td>";
							 echo "<td>";

 						 echo '<p>'.'Created :'. $event['item_create_date'].'</p>';
						  echo '<p>'.'Edited :'. $event['item_edit_date'].'</p>';
 							echo "</td>";
 							echo "<form action='../router/store.php' method='post' name='alter_event'>";
 							echo "<td>";
							echo " <input type='hidden' name='method' id='cater' value='inventory/modify'>";
 							echo "<button class='deleted btn btn-flat btn-danger mr-1'   type='button' name='item_delete'". "value=".$event['id_item']."><i class='la la-trash' ></i></button>";

 							echo "<button class='btn btn-flat btn-info' class='edit'  name='item_edit' ". "value=".$event['id_item']."><i class='la la-pencil'></i></button>";
							
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
<!-- Striped rows end -->

      </div>
    </div>




<?php
    include('components/footer.php');
    ?>
<?php }else{
	header('location:../unauthorised.php');

}?>