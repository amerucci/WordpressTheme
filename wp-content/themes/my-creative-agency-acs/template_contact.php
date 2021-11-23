<?php
/* Template name: Gabarit page contact */ 


include('header.php');
?>

<style>
    .navbar{
        background: #222;
    }
</style>


<div class="container container-contact">
<h1 class="pagetitleh1"><?php the_title(); ?></h1>
<div class="contact-accroche">
<?php the_content(); ?>
</div>


<div class="col50">

<?php echo the_field('carte'); ?>
</div>
<div class="col50">
    <?php echo get_field('formulaire'); ?>
</div>


</div>




<?php
include('footer.php');

?>

