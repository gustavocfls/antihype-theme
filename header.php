<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/1a2737567a.js" crossorigin="anonymous"></script>
</head>

<?php wp_head(); ?>
<body <?php body_class(); ?>>
    
    <header class="sticky-top">
        <div class="container">

            <div class="row d-flex align-items-center justify-content-between">

<div class="col-lg-9 col-md-8">

    <nav class="navbar navbar-expand-md navbar-light bg-faded">
    <a class="navbar-brand" href="<?php bloginfo('home') ?>">ANTIHYPE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu([
        'menu'            => 'top',
        'theme_location'  => 'top-menu',
        'container'       => 'div',
        'container_id'    => 'bs4navbar',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
    ]);
    ?>
    </nav>

</div>



<div class="col-lg-3 col-md-4">


<ul class="customer-menu">


<!-- <li>
<a href="#">


    <img src="<?php bloginfo('template_directory')?>/img/heart.svg" class="fluid-img" alt="" width="25px"> Favoritos


</a>
</li> -->

<?php if ( is_user_logged_in() ) { ?>
 	
    <li>
        <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e( 'Minha conta','woothemes'); ?>"><img src="<?php bloginfo('template_directory')?>/img/user.svg" class="fluid-img" alt=""> Minha conta </a>
    </li>
    
 <?php } 
 else { ?>

    <li>
    	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e( 'Minha conta','woothemes'); ?>"><img src="<?php bloginfo('template_directory')?>/img/user.svg" class="fluid-img" alt=""> Entrar / Registrar </a>
    </li>

 <?php } ?>



 <?php
if ( class_exists( 'WooCommerce' ) ) { ?>

    <li class="li-cart">
        <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ver carrinho' ); ?>">
        
            <img src="<?php bloginfo('template_directory')?>/img/cart.svg" class="fluid-img" alt=""> 
            
            <div class="cartcounter">
                <?php echo sprintf ( _n(  '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
            </div> 

        </a>
        
    </li>

<?php

} else {
    ?>
    <li>não ta ativado</li>
<?php
}
?>

</ul>


</div>
        </div>

        </div>
    </header>
