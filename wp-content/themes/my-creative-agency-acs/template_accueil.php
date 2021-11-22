<?php
/* Template name: Gabarit Homepage */


include('header.php');
?>

<style>
    .center {
        background: url(<?php echo get_field('image_de_fond'); ?>);
        background-size: cover;
        background-position: center;
    }
</style>

<div class="center">
    <h1><?php echo get_field('le_titre'); ?></h1>
</div>
<div class="scrollbottom">
    <div class="scrollcontent">
        <a href="#agency" class="js-scrollTo">
            <p> <?php echo get_field('le_texte_du_bouton_scroll_down'); ?></p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/scrolldown.png" alt="scroll down" />
        </a>
    </div>
</div>
</div>

<section id="agency">
    <div class="container agencyflex">
        <div class="bloctitre">
            <div class="fondtitre"><?php echo get_field('lettre_agency'); ?></div>
            <div class="titre"><?php echo get_field('titre_agency'); ?></div>
        </div>


        <?php
        $blocs =  get_field('bloc');
        foreach ($blocs as $bloc) {
            echo "<div class='bloc'>";
            echo "<img src='" . $bloc['img_bloc_agency'] . "' alt='write' class='agency-ico'>";
            echo "<h2>" . $bloc['titre_bloc_agency'] . "</h2>";
            echo "<p>" . $bloc['description_bloc_agency'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>


<section id="sectionthree">

    <?php $loop = new WP_Query(array('post_type' => 'projets', 'posts_per_page' => '5', 'order' => 'DESC')); ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>




        <?php



        $image =  get_field('images');

        echo '
<div class="line">
<div class="colline colleft">
    <h3 class="titrecol">' . get_the_title() . '</h3>
    <p>' . get_the_content() . '</p>
</div>
<div class="colline">
<a href="' . get_the_permalink() . '" style="text-decoration:none;color:initial;height: 100%;width: 100%;">
<img src="' . $image[0]['image_projet'] . '">
</a>
</div>
</div>
';
        ?>

    <?php endwhile;
    wp_reset_query(); ?>





</section>

<section id="blog">
    <div class="container agencyflex">
        <div class="bloctitre">
            <div class="fondtitre"><?php echo get_field('lettre_blog'); ?></div>
            <div class="titre"><?php echo get_field('titre_blog'); ?></div>
        </div>
        <div class="accroche"><?php echo get_field('accroche_blog'); ?></div>
       
        <?php $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '4', 'order' => 'DESC')); ?>
    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); 
     $image =  get_field('images');
     ?>


        <div class="bloc">
            <div class="imgblog">
           

            <?php 

echo '<a href="' . get_the_permalink() . '" style="text-decoration:none;color:initial;height: 100%;width: 100%;">
<img src="' . $image[0]['image_projet'] . '">
</a>';

            ?>
                
            </div>

            <h2><?php the_title(); ?></h2>
            <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 150, '...');?></p>
        </div>
        


            <?php endwhile;
        else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>



      





    </div>
</section>

<section id="prefooter">
    <div class="container flex">
    
            <?php dynamic_sidebar('[pre-footer-gauche]') ?>
            <?php dynamic_sidebar('[pre-footer-droit]') ?>
         
        
    </div>
</section>



<?php
include('footer.php');

?>