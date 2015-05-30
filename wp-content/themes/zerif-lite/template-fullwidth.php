<?php

/*
Template Name: Full Width Page
*/



get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->



	<div id="content" class="site-content">

<div class="container">



<div class="content-left-wrap col-md-12">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">


<div class="buttons btn_top_mini">
	<a href="<?php bloginfo('url'); ?>/#place" class="btn btn-primary custom-button btn-back" title="Назад">Назад</a>
</div>
			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', 'page' ); ?>

<div class="buttons btn_top_mini">
	<a href="<?php bloginfo('url'); ?>/#a_order" class="btn btn-primary custom-button green-btn" title="Далее">Участвовать</a>
</div>
				<?php /* function_exists('vkComments') ? vkComments() : '' */?>
				<?php
/*
					// If comments are open or we have at least one comment, load up the comment template
					
					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;
*/
				?>



			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- .content-left-wrap -->




</div><!-- .container -->

<?php get_footer(); ?>