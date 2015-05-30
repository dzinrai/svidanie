<?php

/*
Template Name: MAP TEMPLATE
*/
 ?>
<?php 
if ( $overridden_template = locate_template('clear_header.php') ) {
   load_template( $overridden_template );
 } 
else{
   get_header();
 }
?>
<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->



	<div id="content" class="site-content">

		<div class="container">



<div class="content-left-wrap col-md-12">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', 'page' ); ?>

<div class="buttons btn_top_mini">
	<a href="<?php bloginfo('url'); ?>/#a_order" class="btn btn-primary custom-button green-btn" title="Заявка">Перейти к заявке</a>
</div>




			<?php endwhile; // end of the loop. ?>

			

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- .content-left-wrap -->




</div><!-- .container -->

<?php get_footer(); ?>