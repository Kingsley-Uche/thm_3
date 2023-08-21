<?php
include("components/head.php");

?>
<body>
    <!-- Page Preloder -->
    <?php
    //load nav bar
    include("components/naver.php");
    
    
    ?>

      <?php
      $id =$_GET['info'];
     foreach($featured as $f){
         if($f['id']==$id){
           $embed= $f['url'];

         }


     }
      ?>
      <section class='' style='margin'>
    <div class='container-fluid' >
    <div class='mt-3'>
    
   <?php
   
//    $film_2 =explode('"',$film1[1]);
//    $link =$film_2[0];
  var_dump($url);
   ?>
        
  
    </div>

    
    </section>
    



    <?php
include("components/footer.php");
?>