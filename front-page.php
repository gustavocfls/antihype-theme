<?php get_header(); ?>

<section class="hero-home">
  <div class="container">
    <div class="row d-flex align-items-center">
      
    </div>
  </div>
</section>



<div class="container woocommerce">

  <h1>Novidades</h1>


  <ul class="products columns-4">
    <?php
      $args = array(
        'post_type' => 'product',
        'posts_per_page' => 8
        );
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
          wc_get_template_part( 'content', 'product' );
        endwhile;
      } else {
        echo __( 'No products found' );
      }
      wp_reset_postdata();
    ?>
  </ul><!--/.products-->
</div>

<?php get_footer(); ?>