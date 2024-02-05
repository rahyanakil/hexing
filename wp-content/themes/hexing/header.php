<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsb-cambrian
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="o_navbar" id="o_navbarid">
		<div class="container">
				<div class="row">
					<div class="col-lg-2 col-2 col-sm-2">
						<a href="<?php echo get_home_url(); ?>"><img class="o_navbar_cambrian_logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/hexing-logo.png"></a>
					</div>
						<div class="o_nav_menus col-lg-10 col-10 col-sm-10" id="nav_menu">
							<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
						</div>
				</div>
		</div>
	</div>
</div>
	</header><!-- #masthead -->
