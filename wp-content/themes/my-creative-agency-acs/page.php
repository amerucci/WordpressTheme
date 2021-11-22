<style>
    .navbar{
        background: #222;
    }
</style>

<?php



include('header.php');
?>




<div class="container">
    <h1 class="pagetitleh1"><?php the_title(); ?></h1>
    <div class="content">
    <?php the_content(); ?>
    </div>
    
</div>



<?php
include('footer.php');

?>

