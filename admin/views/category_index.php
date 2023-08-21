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
				<h4 class="card-title"><?php echo $_SESSION['page_title']?></h4>
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
					<a class="m-1 btn btn-primary pull-left" data-toggle="modal" data-target="#addModal"><i class="la la-plus text-white">Add Category </i></a>
				
					<a class="m-1 btn btn-primary pull-right" href='../router/store.php?id=inventory/add_items'><i class="la la-plus"></i> Add Item</i> </a>
				</div>
				<div class="table-responsive">
				<div class='card-body'>
				<input type='text' placeholder="search by name" id='testifiers' class="form-control"></div>
					<table class="table table-striped">
					
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Category name</th>
								
								<th scope="col">Status</th>
                               
								
								<th scope="col" class='text-center'>Action</th>
							</tr>
						</thead>
						<tbody id='table_testifiers'>

						<?php
						
						$count=0;
						foreach($_SESSION['category'] as $event){
							
							$count++;
							// var_dump($testimony);
							echo "<tr>";
							echo "<th scope='row'>$count</th>";
							
							echo "<td>";
							echo $event['name'];
							echo "</td>";
								
							echo "<td>";
							if($event['status']==1){
								echo "<button class='btn btn-success btn-sm'>Active</button>";
							}else{
								echo "<button class='btn btn-danger btn-sm'>Inactive</button>";
							}

						// echo $event['status'];
							echo "</td>";
							echo "<form action='../router/store.php' method='post' name='alter_event'>";
							echo "<input type='hidden' name='method' value='category/delete'/>";
							echo "<td class='d-flex'>";
							// echo "<input type='hidden' name='method' value='category/edit'/>";
							echo "<button class='deleted btn btn-sm btn-danger mr-1'   type='button' name='delete'". "value=".$event['id']."><i class='la la-trash text-sm' ></i></button>";
							echo  "</form>";
							echo "<form action='../router/store.php' method='post' name='edit_id' id='edit_id'>";
							echo "<input type='hidden' name='method' value='category/edit'/>";
							echo "<button class='btn btn-sm btn-info editer' type='button'  name='edit_id' ". "value=".$event['id']."><i class='la la-pencil'></i></button>";
							echo  "</form>";
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



	<div class="modal fade" id="editer_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name ='detail' action='<?php echo('../router/contact.php');?>' method ='post'  id='add_embed'>
        <div id='update'></div>
        <div class="card">
				<div class="card-content">
					<div class="card-body">
						<h4 class="card-title" id='title_modal'><i class='la la-video-camera text-warning'></i></h4>
						<h6 class="card-subtitle text-muted" >Add Video Embed Details</h6>
					</div>
					<div class="card-body">
					
							<div class="form-body" action='' method='post'>
								<div class="form-group">
									<label for="donationinput1" class="sr-only">Caption</label>
									<input type="text" id="embed_title" class="form-control detail_form" placeholder="Video title" name="live_caption">
                  <input type='hidden' id='detail' name='embed' value='video_embed'/>
                  <input type='hidden' id='edit_id' name='edit_id' value='known' />
                </div>
								
								<div class="form-group">
									<label for="donationinput7" class="sr-only">Embed URL</label>
									<textarea id="embed_url" rows="5" class="form-control square detail_form detail_form" name="live_url" placeholder="Paste live url link here" required></textarea>
							<h3 id='checkt'></h3>	
                </div>

							</div>
							
						
					</div>
				</div>
			</div>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success form_btn_ad_embed" name='add_embed'>Go live</button>
        </form>
      </div>
    </div>
  </div>
</div>
	

<?php
    include('components/footer.php');
    ?>
	<script>
  $(document).ready(

	  function(){

		$(".editer").click(
		
			function(){		
			var data=this.name;
			var id=this.value;
			var cont=$('#'+data).serializeArray();
			cont.push({name:'id',value:id});
			//cont['id']=this.value;
			// ;
			
			
			var action=$('#'+data).attr('action');
			var method=$('#'+data).attr('method');
			
		

			
				$.ajax({
                         type:method,
                          url: action,
                          cache: false,
                           data: cont,
                             dataType: "html",
                          success: function(rec){
							var rec =JSON.parse(rec);
							
							$('#cat_id').val(rec.id);
							$('#process').val(rec.process);
							$('#title_category').html(rec.title);
							$('#category_name').val(rec.name);
							$('.select-item select').val(rec.status);
							$('#edit_title').html('');
							$('#edit_title').attr('class','');
                        $('#addModal').modal();
						
			}
		
	  }
	  
	
)

	
				
			}
  )
		}
  )	
	  </script>
<?php

}else{

   
    header('location:../unauthorised.php'); 
}?>