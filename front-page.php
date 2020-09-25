<?php get_header(); ?>

<section class="container-fluid hero-home">
  <div class="container">
    <div class="row d-flex align-items-center">
      
      <div class="col-md-6">
        <h1>40% off <br><small>with promo code</small></h1>
        <button type="button" class="btn btn-outline-light">comprar agora</button>
      </div>

      <div class="col-md-6">
        <img src="<?php bloginfo('template_url') ?>/img/tshirt.png" alt="">
      </div>

    </div>
  </div>
</section>



<div class="container woocommerce">

  <h1>Mais vendidos</h1>


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

<section>
    <div class="container main-container">
      <div class="row">     

        <div class="col"> 
    
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else: endif; ?>

        </div>

      </div>
    </div>
</section>



<?php get_footer(); ?>