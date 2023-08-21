<section class="trend spad " id="ministry-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Testimonies</h4>
                      
                    </div>
                    <?php
                        if(!$testimonies==null){
                                    
                        foreach($testimonies as $testify){
                            $name_testifier =$testify['name_testifier'];
                            $title_test =$testify['title_testimony'];
                            $content =$testify['content_testimony'];

                            ?>

<div class="trend__item ">
                        <div class="trend__item__pic ">
                        <?php
                        // var_dump($testify);
                        ?>
                            <img src="assets/images/raised_hands.png" alt="" class='img-fluid' style='max-height:70px' >
                        </div>
                        <div class="trend__item__text">
                            <h6><b><?php echo $title_test;?></b></h6></br>
                            <h6><b>Testifier:  <?php echo $name_testifier; ?></b> </h6>
                            <div class="rating">
                                <i class="fa fa-star mr-3"><b><?php 	$sentences = 2;

 ?></b></i>
 <p class='text-primary text-bold' id='testify_<?php echo $testify['id']?>'><?php echo implode('. ', array_slice(explode('.', $content), 0, $sentences)) . '.';?></p>
                                
                                <i class="fa fa-star"><button class='read_more btn btn-link' id="<?php echo $testify['id']?>" value="<?php echo $content?>" onclick="show_more(this.value,this.id)";>   Read more...</button></i>
                               
                            </div>
                            <div class="product__price"></div>
                        </div>
                    </div>


                      <?php  }


                        }else{


                        }
             
                        
                        ?>
                  
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Featured Messages</h4>
                        
                    </div>

                    <?php
                    if(!$featured==null){
                        foreach($featured as $f){?>


                            <div class="trend__item card bg-light p-3 rounded">
                                                    <div class="trend__item__pic">
                                                        <img src="assets/images/video_player.jpg" alt="" class='img-fluid' style='max-height:70px'>
                                                    </div>
                                                    <div class="trend__item__text">
                                                        <h6><b><?php echo $f['title'];?></b></h6>
                                                        <p><?php echo $f['description'];?></b></p>
                                                        <p> <i class="fa fa-star"> <a href='./featured.php?info=<?php echo $f['id']?>' class='btn btn-warning rounded'>Watch</a></i></p>
                                                       
                                                        <div class="rating">
                                                           
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="product__price"></div>
                                                    </div>
                                                </div>
                            
                            
                            
                                                     <?php   }
                                                    


                    }?>
                        
                     
                  
                    
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Upcoming Events</h4>
                    </div>
                    <?php
                    if(!$events==null){
                        foreach($events as $e){?>
                            <div class="trend__item bg-light p-3 rounde">
                             <div class="trend__item__pic">
                                <img src="assets/images/upcoming.jpg" alt="" class='img-fluid' style='max-height:70px'>
                             </div>
                             <div class="trend__item__text">
                                 <h6><?php echo $e['title_event'];?></h6>
                                 <div>
                                 <p><?php
                                 echo $e['content'];
                                 
                                 ?></p>
                                 </div>
                                 <div class="rating">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                 </div>
                                 <div class="product__price"></div>
                             </div>
                         </div>
                         
                         
                         
     
     
     
                         
                         <?php  }
                             


                    }?>
                     
                  
                  
                  
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function show_more(value,id){
 
  var display ='testify_'+id;
 document.getElementById(display).innerHTML=value;
 $('#'+id).toggle().innerHTML('view less');
 //var former= $('#'+form)
}
</script>
