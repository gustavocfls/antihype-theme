<?php


// Include custom navwalker
require_once('bs4navwalker.php');


function antihype_theme_support() {
    add_theme_support('title-tag');
}


add_action('after_setup_theme', 'antihype_theme_support');


function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/css/app.min.css', '', 1, 'all');
    wp_enqueue_style('custom');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_javascript(){
    wp_register_script('custom', get_template_directory_uri() . 'app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');



// Add support
add_theme_support('menus');
add_theme_support('post-thumbnails');


register_nav_menus (
    array (
        'top-menu' => 'Top Menu',
    )
);

add_image_size('post_image', 1100, 550, false);


// add a widget

register_sidebar (
    array (
        'name' => 'Page sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);


register_sidebar (
    array (
        'name' => 'Blog sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);


register_sidebar (
    array (
        'name' => 'Footer Left',
        'id' => 'footer-left',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

register_sidebar (
    array (
        'name' => 'Footer Middle',
        'id' => 'footer-mid',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

register_sidebar (
    array (
        'name' => 'Footer Right',
        'id' => 'footer-right',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ver carrinho' ); ?>"><img src="<?php bloginfo('template_directory')?>/img/cart.svg" class="fluid-img" alt=""> <div class="cartcounter"><?php echo sprintf ( _n(  '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </div></a>

<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}


add_action( 'after_setup_theme', 'yourtheme_setup' );
 
function yourtheme_setup() {
    // add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}


add_filter( 'woocommerce_get_image_size_single', function( $size ) {
    return array(
    'width' => 600,
    'height' => 800,
    'crop' => 1,
    );
   } );


add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
    return array(
    'width' => 370,
    'height' => 490,
    'crop' => 1,
    );
   } );


add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
 return array(
 'width' => 150,
 'height' => 150,
 'crop' => 1,
 );
} );


/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}