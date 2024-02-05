<?php
/**
 * Template Name: Meter Products
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
        <div class="products_page_header">
            <div><span>Smart Power & Distribution</span></div>
        </div>
    </div>
    <div class="clearfix_margin"></div>
    
    <section class="o_our_work_wrapper container-fluid">
	<div class="container">
    <!--Our Servicesheadline-->
    <h1 class="page_title products_middle_title">Cluster Metering Cabinet</h1>
		<div class="underline_border"></div>
    <div class="row products_sub_wrapper">
        <div class="col-lg-2">
            <!-- <h3 class="products_2nd_title">Single Phase</h3> -->
        </div>
        <div class="col-lg-10">
            <div class="straight-line"></div>
        </div>
    </div>
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    	$args = array(
        'category_name' => 'meter-cluster-cabinet',
        'posts_per_page' => 10,
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
		   <div class="products_single_post col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <div class="products_single_page_thumbnail_container">
                         <img class="products_single_page_thumbnail_img" src="<?php echo $image_url[0]; ?>">
                     </div>
                     <div class="services_title products_title">
                        <h2 class="services_post_title"><a class="products_title_link" href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><?php the_title(); ?></a></h2>
                        <div class="products_excerpt"><?php the_excerpt(); ?></div>
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

<div class="container">
    <!--Our Servicesheadline-->
    <div class="row products_sub_wrapper">
        <div class="col-lg-10">
            <div class="straight-line"></div>
        </div>
        <div class="col-lg-2">
        <h3 class="products_2nd_title">String Inverter</h3>
        </div>
    </div>
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    	$args = array(
        'category_name' => 'meter-string-inverter',
        'posts_per_page' => 10,
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
		   <div class="products_single_post col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <div class="products_single_page_thumbnail_container">
                         <img class="products_single_page_thumbnail_img" src="<?php echo $image_url[0]; ?>">
                     </div>
                     <div class="services_title products_title">
                        <h2 class="services_post_title"><a class="products_title_link" href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><?php the_title(); ?></a></h2>
                        <div class="products_excerpt"><?php the_excerpt(); ?></div>
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
    <div class="container">
    <h1 class="page_title products_middle_title">ANSI Meter</h1>
		<div class="underline_border"></div>
    <!--Our Servicesheadline-->
    <!-- <div class="row products_sub_wrapper">
        <div class="col-lg-2">
            <h3 class="products_2nd_title">Hybrid All-in-one ESS</h3>
        </div>
        <div class="col-lg-10">
            <div class="straight-line"></div>
        </div>
    </div> -->
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    	$args = array(
        'category_name' => 'meter-ansi-meters',
        'posts_per_page' => 10,
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
		   <div class="products_single_post col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <div class="products_single_page_thumbnail_container">
                         <img class="products_single_page_thumbnail_img" src="<?php echo $image_url[0]; ?>">
                     </div>
                     <div class="services_title products_title">
                        <h2 class="services_post_title"><a class="products_title_link" href="<?php the_permalink() ?>" rel="bookmark" title="View Details"><?php the_title(); ?></a></h2>
                        <div class="products_excerpt"><?php the_excerpt(); ?></div>
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
<!-- Main Section ENDS -->
<?php
get_footer();