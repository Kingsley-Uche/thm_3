
<!--modal for add contact-->
<div class="modal fade" id="add_contact_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name ='detail' action='<?php echo('../router/contact.php');?>' method ='post'  id='contact_form'>
        <div id='update'></div>
        <div class="card">
				<div class="card-content">
					<div class="card-body">
						<h4 class="card-title" id='title_modal'></h4>
						<h6 class="card-subtitle text-muted" >Details</h6>
					</div>
					<div class="card-body">
					
							<div class="form-body" action='' method='post'>
								<div class="form-group">
									<label for="donationinput1" class="sr-only">First Name</label>
									<input type="text" id="donationinput1" class="form-control detail_form" placeholder="First Name" name="fname">
								</div>
								<div class="form-group">
									<label for="donationinput2" class="sr-only">Last Name</label>
									<input type="text" id="donationinput2" class="form-control detail_form" placeholder="Last Name" name="lname">
								</div>

                <div class="form-group">
									<label for="donationinput3" class="">Date of Birth</label>
									<input type="date" id="donationinput5" class="form-control detail_form" placeholder="Date of Birth" name="dob">
								</div>
								<div class="form-group">
									<label for="donationinput3" class="sr-only">E-mail</label>
									<input type="email" id="donationinput3" class="form-control detail_form" placeholder="E-mail" name="email">
								</div>

								<div class="form-group">
									<label for="donationinput4" class="sr-only">Contact Number</label>
									<input type="text" id="donationinput4" class="form-control detail_form" placeholder="Phone" name="phone" onkeypress="return isNumberKey(event)"/>
                                    <input type='hidden' id='detail' name='contact' value=''/>
								</div>
								<div class="form-group">
									<label for="donationinput7" class="sr-only">Address</label>
									<textarea id="donationinput7" rows="5" class="form-control square detail_form detail_form" name="address" placeholder="House Address" required></textarea>
								</div>

							</div>
							
						
					</div>
				</div>
			</div>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary form_btn_ad" name='contact_form'>Save</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="add_video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name ='detail'action='<?php echo('../router/contact.php');?>' method ='post'  id='add_embed'>
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


<!-- beginning of modal for category add and edit modal -->


<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times; </span></button>
        <h4 class="modal-title text-center"  id='title_category'> Add Category</h4></br>
		<a href="../router/store.php?id=category/index" id='edi'><i class='la la-pencil btn-sm btn-rounded' id='edit_title'>Edit Categories</i></a>
      </div>

      <form role="form" action="<?php echo '../router/store.php'?>" method="post" id="category_create" name='category_create'>
						<input type='hidden' name='method' id='process' value='category/create_category'/>
            <input type='hidden' name='edit_id' value='edit_id' id='cat_id' />
        <div class="modal-body">

          <div class="form-group">
            <label for="brand_name">Category Name</label>
            <input type="text" class="form-control  detail_form" id="category_name" name="category_name" placeholder="Enter category name" autocomplete="off" required>
          </div>
          <div class="form-group select-item">
            <label for="active">Status</label>
            <select class="form-control" id="active" name="active" required />
              <option value="1">Active</option>
              <option value="2">Inactive</option>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary form_btn_ad" name='category_create'>Save changes</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- end of modal for category add and edit modal -->

<footer class="footer footer-static footer-light navbar-border navbar-shadow">

 
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://kammasoft.tech" target="_blank">kammasoft Technologies</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://kammasoft.tech" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://kammasoft.tech" target="_blank"> Purchase</a></li>
        </ul>
       
      </div>
    </footer>

    
    <!-- BEGIN VENDOR JS -->
	<script src="../theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"> </script>
    <script src="../theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="../theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
	
    <script src="../theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assetz/jquery-te-1.4.0.min.js" charset="utf-8"></script>
  <script>
$('.alert').fadeTo(2000, 300).slideUp(300,function(){
  $('.alert').slideUp(300);
})


</script>
   
<script>
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>
<script>
$(".deleted").click(function()
	{
var result = confirm("Are you sure?");
if(result){
  this.type='submit';
}
  }
)


</script>
<script >
$(document).ready(
  $('.call_modal').click(
    function(){
      $('.detail_form').val('');
  var x =this.value;
  var name =this.name;
 
  $('#detail').val(name);
  
 // $('#call_modal').name(x);
  $('#title_modal').html(x);
  $('#add_contact_modal').modal();
  

    }
  )
)

</script> 
<script>
$('.form_btn').click(
  function(){
  var form = this.name;

    if( validateForm(form)){
      
     var former= $('#'+form).serialize();
       
      
      $.ajax({
                                type:"POST",
                          url: "<?php echo('../router/contact.php');?>",
                          cache: false,
                           data: former,
                             dataType: "html",
                          success: function(rec){
                            
                          
                     $('#update').html(rec);
                     $('.detail_form').val('');
                     $('.alert').fadeTo(3000, 500).slideUp(500,function(){
  $('.alert').slideUp(500);
})

document.location.href = "../router/contact.php?<?php echo$goto;?>";
                         
                         
                     }
 });
      
      
    }
   
  }
);

</script>
<script>
function validateForm(form){
    var form = document.getElementById(form);
    var inputs = form.getElementsByTagName("input");
    input = null, flag = true;
    for(var i = 0, len = inputs.length; i < len; i++) {
        input = inputs[i];
        if(!input.value.trim()) {
            flag = false;
           
            
          
            alert("Please fill all fields");
            input.focus();
           // alert(input.name);
            
            break;
        }
    }
    return(flag);
}

</script>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<script>
function search_box() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("content_table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
$('.form_btn_ad').click(
  
  function(){
  var form = this.name;
  

    if( validateForm(form)){
      
     var former= $('#'+form).serialize();
    
     
      
      $.ajax({
                                type:"POST",
                          url:  $('#'+form).attr('action'),
                          cache: false,
                           data: former,
                             dataType: "html",
                          success: function(rec){
                            alert(rec);
                          
//                         var info =JSON.parse(rec);
                    
//                      $('#update').html(info.update);
//                      $('.detail_form').val('');
//                      $('.alert').fadeTo(200, 200).slideUp(200,function(){
//   $('.alert').slideUp(200);
  
 
// });
// document.location.href = "../router/contact.php?"+info.goto_page;

                         
                         
                     }
 });
      
      
    }
   
  }
);

</script>
<script>
  $(document).ready(
    $('#video_start').click(
      function(){
        $.ajax({
                                type:"POST",
                          url: "<?php echo('../router/embed.php');?>",
                          cache: false,
                           data: {"view":"<?php echo $_SESSION['user_id'];?>"},
                             dataType: "html",
                          success: function(rec){
                    if(rec.id!==''){
                      
                   var info =JSON.parse(rec);
                  
                   $('#edit_id').val(info.id);
                   $('#embed_url').val(info.url);
                   $('#embed_title').val(info.title);
                    }else{
                     
                    }
 
                         
                         
                     }
 });



        $('#add_video').modal();
      }
    ),
  );


</script>

<script>
$(document).ready(
  function(){
    $("#testifiers").on("keyup", function() {
    var value = $(this).val();
    

    $("table tr").each(function(index) {
        if (index != 0) {

            $row = $(this);

            var id = $row.find("td:first").text();

            if (id.indexOf(value) != 0) {
                $(this).hide();
            }
            else {
                $(this).show();
            }
        }
    });
});​
  }
)
</script>
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->