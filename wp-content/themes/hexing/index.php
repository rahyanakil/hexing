<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsb-cambrian
 */

get_header();
?>
	<main id="primary" class="site-main">
	<div class="o_home_slider_wrapper">
    <!-- Slider starts here -->
	<div id="myCarousel" class="carousel slide o_slider" data-bs-interval="6000" data-ride="carousel" data-bs-ride="carousel" data-bs-pause="false">
						<?php
						  $args = array('category_name' => 'featured',
                              'posts_per_page' => 5, 
                              
                          ); //start counter
                            $slider_query=new WP_Query($args); //Need this to make pagination work
                            ?>
                          <div class="carousel-indicators">
							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <!-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button> -->
  						  </div>
                         <div class="carousel-inner o_featured_slider">
                             <?php
                                if(have_posts()) :  while($slider_query->have_posts()) : $slider_query->the_post(); 

                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, 'full', true);
                             ?>
                             <div id="o_slider_img" class="carousel-item <?php if($slider_query->current_post == 0) : ?>active<?php endif; ?>">
                                <img class="o_slider_img" src="<?php echo $image_url[0]; ?>">
								<div class="carousel-caption d-none d-md-block">
									<h5 class="slider_title animate__animated animate__backInLeft"><?php the_title(); ?></h5>
									<div class="slider_text animate__animated animate__backInLeft"> <?php the_Excerpt(); ?></div>
								</div>
                            </div>
                             <?php endwhile;
                               endif;
                                   ?>
                             <?php wp_reset_query(); ?>
                         </div>
							</div>
</div>
<div class="container-fluid products_container">
	<div class="container">
		<h1 class="page_title">Explore Our Products</h1>
		<div class="underline_border"></div>
		<div class="products_sub_head">Find the right solar product for enabling you to get reliable power anytime & maximize savings on your electricity bill.</div>
		<div class="row">
			<?php
						  $args = array('category_name' => 'featured-products',
						  'posts_per_page' => 4, 
                              
                          ); //start counter
                            $slider_query=new WP_Query($args); //Need this to make pagination work
                            ?>
							<?php
                                if(have_posts()) :  while($slider_query->have_posts()) : $slider_query->the_post(); 

                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, 'full', true);
                             ?>
				
					<div class="col-lg-3 products_wrap">
						<div class="products_cont">
							<img class="why_cambrian_images" src="<?php echo $image_url[0]; ?>">
							<h2 class="home_products_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><?php the_title(); ?></a></h2>
							<a class="pro_view" href="" rel="bookmark" title="View Details"><div class="product_view">+</div></a>
						</div>
					</div>
				
				<?php endwhile;
                      endif; ?>
                             <?php wp_reset_query(); ?>
							 </div>
			</div>
					</div>
	</div>
</div>

<!-- Our services Section -->
<section class="o_our_work_wrapper container-fluid">
	<div class="container">
    <!--Our Servicesheadline-->
    <h1 class="page_title">Learn About Our Services</h1>
		<div class="underline_border"></div>
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    	$args = array(
        'category_name' => 'services',
        'posts_per_page' => 3,
        'paged' => $paged,
        );
        ?>

        <!--Post starts here-->
        <?php $query = new WP_Query($args); ?>
		<div class="row">
         <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'large', true);
            ?> 
		   <div class="o_our_work_single_post_wrap col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <div class="o_our_work_thumbnail_container">
                         <img class="o_our_work_thumbnail_img" src="<?php echo $image_url[0]; ?>">
                         <div class="o_img_overlay">

                         </div>
                     </div>
                     <div class="services_title">
                        <h2 class="services_post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><?php the_title(); ?></a></h2>
						<div class="service_excerpt"><?php the_excerpt(); ?></div>
                         <a class="services_link" href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><p class="services_view"><i class="fa-solid fa-right-long fa-xs"></i> Learn More</p></a>
                    </div>
         <!-- closes the first div box -->
	</div>
         <?php endwhile; ?>
		 <?php
         wp_reset_postdata();
         else : ?>
         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
	</div>
	</div>
</section>
    <!-- <div class="our_work_pagination_wrapper">
        <div class="o_our_work_previous_pagination"><?php previous_posts_link('<i class="fas fa-arrow-left"></i> PREVIOUS', $query -> max_num_pages); ?></div>
        <div class="o_our_work_next_pagination"><?php next_posts_link('NEXT <i class="fas fa-arrow-right"></i>', $query -> max_num_pages); ?></div>
    </div> -->
    


<!-- Our services Section -->

<!-- About US Strats -->
<div class="container-fluid About_us_wrapper">
						<?php
						  $args = array('category_name' => 'about-us',
						  'posts_per_page' => 1, 
                              
                          ); //start counter
                            ?>
							<?php $query = new WP_Query($args); ?>
				
	<div class="container">
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'large', true);
            ?> 
		<div class="about_us_img">
			<div class="about_us_text_wrapper">
				<h2 class="services_post_title about_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<a class="services_link about_link" href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><p class="services_view about_view"><i class="fa-solid fa-right-long fa-xs"></i>  Discover More</p></a>
			</div>
		</div>
		<div class="about_us_text">
			
		</div>
		<?php endwhile; ?>
	</div>
	<?php
         wp_reset_postdata();
         else : ?>
         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
</div>
<!-- About Us ends -->
<section class="news_events_wrapper container-fluid">
<h1 class="page_title">News & events</h1>
		<div class="underline_border"></div>
	<div class="container">
	<?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    	$args = array(
        'category_name' => 'news',
        'posts_per_page' => 3,
        'paged' => $paged,
        );
        ?>

        <!--Post starts here-->
        <?php $query = new WP_Query($args); ?>
		<div class="row">
         <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'large', true);
            ?> 
		   <div class="o_our_work_single_post_wrap col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <div class="o_our_work_thumbnail_container">
                         <img class="o_our_work_thumbnail_img" src="<?php echo $image_url[0]; ?>">
                         <div class="o_img_overlay">

                         </div>
                     </div>
                     <div class="services_title events_wrap">
                        <h2 class="services_post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><?php the_title(); ?></a></h2>
						<div class="events_date"><?php echo get_the_date(); ?></div>
						<div class="service_excerpt"><?php the_excerpt(); ?></div>
                         <a class="services_link" href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><p class="services_view events_view">Read More <i class="fa-solid fa-right-long fa-xs"></i></p></a>
                    </div>
         <!-- closes the first div box -->
	</div>
         <?php endwhile; ?>
		 <?php
         wp_reset_postdata();
         else : ?>
         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
	</div>
	</div>
</section>

</main><!-- #main -->

<?php
get_footer();
