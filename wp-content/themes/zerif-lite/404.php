<?php

/**

 * The template for displaying 404 pages (Not Found).

 *

 * @package zerif

 */



get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->



<div id="content" class="site-content">

<div class="container">



<div class="content-left-wrap col-md-9">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">



		<article>

			<header class="entry-header">

				<h1 class="entry-title"><?php _e( 'Вот блин! А такой страницы не существует.', 'zerif-lite' ); ?></h1>

			</header><!-- .entry-header -->



			<div class="entry-content">

				<p><?php _e( 'Похоже по этому адресу ничего не найдено.', 'zerif-lite' ); ?></p>
				

			</div><!-- .entry-content -->

		</article><!-- #post-## -->



		</main><!-- #main -->

	</div><!-- #primary -->

</div>




</div>



<?php get_footer(); ?>