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
				<h4 class="card-title">Members</h4>
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
                    <div>
                <button class='btn btn-primary call_modal pull-left' value='Add a Member' type='button' name='add_member'><i class='la la-plus' style="font-size:14px"> Add a member</i></button>
				<form name='bulk_member' method='post' action='../router/contact.php?id=member_bulk' enctype="multipart/form-data"><button class='btn btn-info pull-right' type='button'><i class='fa fa-file'>Bulk import<input type='file' name='excel_sheet' classs='form-inline'></i></button></div></div>
				<div class="table-responsive">
				<div class='card-body mb-1'>
                <input type='hidden' name='contact' value='bulk_member'/>
                    <button class='btn btn-sm pull-right'>Submit</button>
                   
</form>
				<input type='text search' placeholder="search by name" id='search' class="form-coontrol pull-left" onkeyup="search_box">
              
            </div>
					<table class="table table-striped" id='content_table'>
					
                    <thead class="thead-light">
							<tr>
								<th scope="col">#</th>
								<th scope="col">First Name</th>
								
								<th scope="col">Last Name</th>
                                <th scope="col">Email </th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Date of Birth</th>
								
								<th scope="col" class='text-center'>Action</th>
							</tr>
						</thead>
						<tbody id='members'>

						<?php
						// var_dump($_SESSION['members']);
						$count=0;
 						foreach($_SESSION['members'] as $memb){
                             $count++;
                             echo "<tr>";
                            echo "<th scope='row'>$count</th>";  
                            echo "<td>".$memb['f_name']."</td>";
                            echo "<td>".$memb['l_name']."</td>";
                            echo "<td>".$memb['email']."</td>";
                            echo "<td>".$memb['phone']."</td>";
                            echo "<td>".$memb['address']."</td>";
                            echo "<td>".$memb['month_dob'].'-'.$memb['day_dob'].'-'.$memb['year_dob']."</td>";
                            echo "</td>";
							echo "<form action='../router/contact.php' method='post' name='alter_member' id ='alter_member'>";
                            echo "<input type='hidden' name='contact' value='edit/delete/members' id='gater'>";
							echo "<td>";
							
							echo "<button class=' deleted btn btn-flat btn-danger mr-1'  type='button' name='member_delete' value =".$memb['id']."><i class='la la-trash' ></i></button>";

							echo "<button class='btn btn-flat btn-info edit' name='memb_edit' type='submit'  value=".$memb['id']."><i class='la la-pencil'></i></button>";
							
							echo "</td>";
							echo  "</form>";
									echo "</tr>";
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
<


<?php
    include('components/footer.php');
    ?>
	<script>



$('.form_btn ad').click(
    function(){
        
       setTimeout(function() {
        window.location.reload(true); 
         // $('#forgot-form').modal('hide');
        }, 2000);
      
    }
);
</script>
  </body>
</html>





<?php }else{

    header('location:../unauthorised.php');




}

?>