<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_home()) { echo bloginfo("name"); echo " - "; echo bloginfo("description"); } else { echo wp_title(" - ", false, right); } ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<?php wp_head(); ?>
<body <?php body_class(); ?>>
    
    <header>
        <div class="container d-flex align-items-center justify-content-between">

            <img src="<?php bloginfo('template_directory')?>/img/logo.png" class="fluid-img logo" alt="">

            <?php 

                wp_nav_menu (
                    array (
                        'theme_location' => 'top-menu',
                        'menu-class' => 'top-menu d-flex',
                    )
                );

            ?>
        </div>
    </header>