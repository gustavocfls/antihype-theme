<?php get_header(); ?>

<section>
  <div class="hero-home">
    <div class="row d-flex align-items-center">
      
      <div class="col-md-6 text-center">
        <h1>40% off <br><small>with promo code</small></h1>
        <button type="button" class="btn btn-outline-light">View more</button>
      </div>

      <div class="col-md-6">
        <img src="<?php bloginfo('template_url') ?>/img/tshirt.png" alt="">
      </div>

    </div>
  </div>
</section>

<section class="cat-home">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="category-home d-flex align-items-center justify-content-center">
          <h2>Sneakers</h2>
        </div>
      </div>

      <div class="col-md-4">
        <div class="category-home d-flex align-items-center justify-content-center">
          <h2>Roupas</h2>
        </div>
      </div>

      <div class="col-md-4">
        <div class="category-home d-flex align-items-center justify-content-center">
          <h2>Acessórios</h2>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="container woocommerce">
  <h1>best sellers</h1>
<ul class="products">
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