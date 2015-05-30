<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://svidanietut.by/wp-content/themes/zerif-lite/js/rules.js"></script>
<script src="//vk.com/js/api/xd_connection.js?2"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,400&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62941630-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>

</head>



<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo $_POST['scrollPosition']; ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif; ?>




<!-- =========================

   PRE LOADER

============================== -->
<?php if(is_front_page() && get_option( 'show_on_front' ) != 'page'): ?>
<div class="preloader">

  <div class="status">&nbsp;</div>

</div>
<?php endif; ?>


<header id="home" class="header">
	
	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">
			
			<div class="navbar-header responsive-logo">

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.$zerif_logo.'" alt="'.get_bloginfo('title').'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

						echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';

						echo '</a>';

					endif;

				?>



			</div>

		</div>

	</div>

	<!-- / END TOP BAR -->