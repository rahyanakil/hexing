<?php
/**
 * Template Name: Generic Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsb-cambrian
 */

get_header();
?>
	<div class="products_header_wrap generic_full_wrap">
        <div class="products_page_header service_page_header">
            <div><span><?php the_title(); ?></span></div>
        </div>
    </div>

	<div class="">
		<div class="generic_container container">
			<?php the_content(); ?>
		</div>
	</div>

		
<?php
get_footer();
