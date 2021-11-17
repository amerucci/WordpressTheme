<?php
/* Template name: Gabarit Homepage */


include('header.php');
?>

<style>
    .center{
        background:url(<?php echo get_field('image_de_fond'); ?>)
    }
</style>

<div class="center">
            <h1><?php echo get_field('le_titre'); ?></h1>
        </div>
        <div class="scrollbottom">
            <div class="scrollcontent">
                <a href="#agency" class="js-scrollTo">
                    <p> <?php echo get_field('le_texte_du_bouton_scroll_down'); ?></p>
                    <img src="img/scrolldown.png" alt="scroll down" />
                </a>
            </div>
        </div>


<?php
include('footer.php');

?>