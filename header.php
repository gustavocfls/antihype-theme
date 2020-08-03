<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<?php wp_head(); ?>
<body <?php body_class(); ?>>
    
    <header class="sticky-top">
        <div class="container">

            <div class="row d-flex align-items-center justify-content-between">

            <div class="col-2">
                <!-- <img src="<?php bloginfo('template_directory')?>/img/logo.png" class="fluid-img logo" alt=""> -->
                <a href="">
                    <h3>ANTIHYPE</h3>
                </a>


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


<div class="col-2 text-right">


<?php if ( is_user_logged_in() ) { ?>
 	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Minha Conta','woothemes'); ?>"><?php _e('Minha Conta','woothemes'); ?></a>
 <?php } 
 else { ?>
 	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Minha conta','woothemes'); ?>"><?php _e('Minha conta','woothemes'); ?></a>
 <?php } ?>

<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>

</div>
        </div>

        </div>
    </header>

    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4">
                    Frete Grátis acima de R$ 600
                </div>

                <div class="col-lg-4">
                    Frete Grátis acima de R$ 600
                </div>

                <div class="col-lg-4">
                    Frete Grátis acima de R$ 600
                </div>
            </div>
        </div>
    </section>