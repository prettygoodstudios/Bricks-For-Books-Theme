<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header" style="top: <?php echo is_admin_bar_showing() ? 32 : 0 ?>px;">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
		<div class="menu-toggle open" aria-controls="primary-menu" aria-expanded="false">
			<div></div>
			<div></div>
			<div></div>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<script>
		const toggle = document.querySelector(".menu-toggle");
		const menu = document.querySelector("#site-navigation");

		let menuOpen = false;

		const hideMenu = () => {
			menu.style.display = "none";
			toggle.style.display = "block";
			toggle.className = "menu-toggle open";
		}

		const showMenu = () => {
			menu.style.display = "block";
			toggle.style.display = "block";
			toggle.className = "menu-toggle close";
		}

		const clearStyling = () => {
			menu.style.display = "";
			toggle.style.display = "";
			toggle.className = "menu-toggle open";
		}

		toggle.addEventListener("click", (e) => {
			if(menuOpen){
				hideMenu();
			}else{
				showMenu();
			}
			menuOpen = !menuOpen;
		});

		window.addEventListener("resize", (e) => {
			if(window.innerWidth > 900){
				clearStyling();
				menuOpen = false;
			}
		});

	</script>

	<div id="content" class="site-content">
