<?php
/**
 * Template Name: Services Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsb-cambrian
 */

get_header();
?>

<!-- Main Section STARTS -->
<section class="products_page_wrapper">
    <div class="products_header_wrap">
        <div class="products_page_header service_page_header">
            <div><span>Services we offer</span></div>
        </div>
    </div>
    <div class="clearfix_margin"></div>
    <section class="o_our_work_wrapper container-fluid">
	<div class="container">
    <!--Our Servicesheadline-->
    <h1 class="page_title">Our Services</h1>
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
</section>
<!-- Main Section ENDS -->
<?php
get_footer();