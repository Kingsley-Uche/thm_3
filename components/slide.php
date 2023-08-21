<section class="categories" style="position: relative;">
        <div class="container-fluid">
            <div class="row">
                  <div class='col-12 spacee' style='height:65px;background-color:#083C69'></div>
            <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
<?php
$count=-1;
foreach($slides as $slider){
    $count++;
$path =str_replace('..','',$slider['path']);
   if($count==0){?>
    <div class="carousel-item active slidee" style='height:70vh;'>
    
  <?php }else{ ?>
    <div class="carousel-item slidee " style='height:70vh'>

   <?php } ?>
   <img class="d-block w-100 img-fluid slidee" src="./admin/<?php echo $path;?>" alt="First slide" style='height:70vh;'>
</div>

<?php
}?>


</div>




</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

</div>
</div>
</div>
</section>
