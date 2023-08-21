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
				<h4 class="card-title">Ministry Material</h4>
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
					<a class="m-1 btn btn-primary pull-right" href='../router/materials.php?id=ministry/add_ministry'><i class="la la-plus"></i> Add</i> </a>
				</div>
				<div class="table-responsive">
				<div class='card-body'>
				<input type='text' placeholder="search by name" id='testifiers' class="form-coontrol"></div>
					<table class="table table-striped">
					
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Caption</th>
								
								<th scope="col">Content</th>
                               
								
								<th scope="col" class='text-center'>Action</th>
							</tr>
						</thead>
						<tbody id='table_testifiers'>

						<?php
						
						$count=0;
						foreach($_SESSION['videos'] as $video){
							// var_dump($video);
							$content =$video['description'];
							$count++;
							// var_dump($testimony);
							echo "<tr>";
							echo "<th scope='row'>$count</th>";
							
							echo "<td>";
							echo $video['title'];
							echo "</td>";
								
							echo "<td>";

							$sentences = 2;
echo implode('. ', array_slice(explode('.', $content), 0, $sentences)) . '.';

							echo "</td>";
							echo "<form action='../router/materials.php' method='post' name='alter_event'>";
							echo "<td>";
							
							echo "<button class='deleted btn btn-flat btn-danger mr-1' type='button' name='ministry_delete'". "value=".$video['id']."><i class='la la-trash'></i></button>";

							echo "<button class='btn btn-flat btn-info' class='edit'  name='ministry_edit' ". "value=".$video['id']."><i class='la la-pencil'></i></button>";
							
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
	<script>
$(document).ready(function(){
	$('#testifiers').on("keyup",function(){
		var value =$(this).val().toLowerCase();
		$("#table_testifiers tr").filter(function(){
			$(this).toggle($(this).text().toLowerCase().indexof(value)>-1)
		})
	})
})

</script>

  </body>
</html>





<?php }else{

    header('location:../unauthorised.php');




}

?>