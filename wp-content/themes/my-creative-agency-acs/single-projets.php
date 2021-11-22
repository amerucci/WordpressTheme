<?php
$image =  get_field('images');

?>

<style>
 
    .imgaccroche{
        background:url("<?php echo $image[0]['image_projet']; ?>")
     
    }
</style>
<?php

include("header.php");

?>


<div class="imgaccroche">
    <h1><?php the_title();?></h1>
</div>

<div class="container">

    <div class="contenu">
        <?php the_content(); ?>
    </div>
    <div class="extra">
  <?php
foreach($image as $the_image){
    echo "<img class='img50' src='".$the_image['image_projet']."'/>";
}
  ?>
    </div>
</div>

<?php


include("footer.php");