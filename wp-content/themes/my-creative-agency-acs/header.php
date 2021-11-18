<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> - The Creative Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

<?php echo wp_site_icon(); ?>
<?php get_site_icon_url(); ?>


    <header>
        <div class="navbar flex ">
            <div class="container flexheader ">
                <div class="logo"><a href="#"><img src="<?php echo get_site_icon_url(); ?> " width="79" alt="logo"></a></div>
                <?php
                if (has_nav_menu('header-menu')) : ?>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => 'nav',
                        'menu_class'     => 'right no-bullets no-margin',
                    )); ?>
                <?php endif;
                ?>
                <div id="burger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="menuresp"><?php if (has_nav_menu('header-menu')) : ?>
                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'header-menu',
                                            'container'      => 'nav',
                                            'menu_class'     => 'right no-bullets no-margin',
                                        )); ?>
                    <?php endif; ?>
                </div>
            </div>


        </div>
    </header>