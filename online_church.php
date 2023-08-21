<?php
include_once('components/head.php');?>

<div class='mb-5 '></div>
<?php
include_once('components/naver.php');?>

<div class='mb-5 '></div>

<?php

$url=$_SESSION['online_stream']['url'];
  $embed='<iframe src="https://www.facebook.com/plugins/video.php?&href='.$url.'" width="100%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media;web-share" allowFullScreen="true"></iframe>';

    ?>
<div class='mt-2 '></div>
    <section class='' style='margin'>
    <div class='container-fluid' >
    <div class='mt-3'>
    <?php  echo $embed;?>
    
    </div>
  
    </div>
    
    </section>
    <?php
include_once('components/footer.php');

?>