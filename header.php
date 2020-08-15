<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/1a2737567a.js" crossorigin="anonymous"></script>
</head>

<?php wp_head(); ?>
<body <?php body_class(); ?>>
    
    <header class="sticky-top">
        <div class="container">

            <div class="row d-flex align-items-center justify-content-between">

            <div class="col-2">
               <a href="<?php bloginfo('home') ?>"> <img src="<?php bloginfo('template_directory')?>/img/logo.svg" class="fluid-img logo" alt=""> </a>
            </div>
<div class="col text-center">
            <?php 

                wp_nav_menu (
                    array (
                        'theme_location' => 'top-menu',
                        'menu-class' => 'menu',
                    )
                );

            ?>

</div>


<div class="col-2 text-right menu-right">


<a href="#">

<img src="<?php bloginfo('template_directory')?>/img/heart.svg" class="fluid-img" alt="" width="25px">

</a>

<?php if ( is_user_logged_in() ) { ?>
 	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e( 'Minha conta','woothemes'); ?>"><img src="<?php bloginfo('template_directory')?>/img/user.svg" class="fluid-img" alt=""> </a>
 <?php } 
 else { ?>
 	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e( 'Minha conta','woothemes'); ?>"><img src="<?php bloginfo('template_directory')?>/img/user.svg" class="fluid-img" alt=""> </a>
 <?php } ?>



 <?php
if ( class_exists( 'WooCommerce' ) ) { ?>

    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ver carrinho' ); ?>"><img src="<?php bloginfo('template_directory')?>/img/cart.svg" class="fluid-img" alt=""> <div class="cartcounter"><?php echo sprintf ( _n(  '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </div></a>

<?php

} else {
    ?>
    <p>não ta ativado</p>
<?php
}
?>




</div>
        </div>

        </div>
    </header>

    <section class="subheader">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4">
                <i class="fas fa-shipping-fast"></i> enviamos para todo o brasil
                </div>

                <div class="col-lg-4">
                <i class="far fa-credit-card"></i> compra segura com pagseguro
                </div>

                <div class="col-lg-4">
                <i class="fas fa-tshirt"></i> produtos exclusivos
                </div>
            </div>
        </div>
    </section>