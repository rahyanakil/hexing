<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bsb-cambrian
 */

get_header();
?>

<div class="products_header_wrap generic_full_wrap">
        <div class="products_page_header single_page_header service_page_header">
            <div><span><?php the_title(); ?></span></div>
        </div>
    </div>

	<div class="">
		<div class="generic_container container single_generic_post">
			<?php the_content(); ?>
		</div>
	</div>


<?php
get_footer();
