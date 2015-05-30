<?php get_header(); ?>


<?php
if ( get_option( 'show_on_front' ) == 'page' && is_home()) {
    ?>
	<div class="clear"></div>

	</header> <!-- / END HOME SECTION  -->


		<div id="content" class="site-content">

	<div class="container">



	<div class="content-left-wrap col-md-9">



		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">



			<?php if ( have_posts() ) : ?>



				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>



					<?php

						/* Include the Post-Format-specific template for the content.

						 * If you want to override this in a child theme, then include a file

						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

						 */

						get_template_part( 'content', get_post_format() );

					?>



				<?php endwhile; ?>



				<?php zerif_paging_nav(); ?>



			<?php else : ?>



				<?php get_template_part( 'content', 'none' ); ?>



			<?php endif; ?>



			</main><!-- #main -->

		</div><!-- #primary -->



	</div><!-- .content-left-wrap -->



	<div class="sidebar-wrap col-md-3 content-left-wrap">

		<?php get_sidebar(); ?>

	</div><!-- .sidebar-wrap -->



	</div><!-- .container -->
	<?php
}else {

	$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');

	if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):

		include get_template_directory() . "/sections/big_title.php";
	endif;


?>


</header> <!-- / END HOME SECTION  -->


<div id="content" class="site-content">



<?php

	/* OUR FOCUS SECTION */

	$zerif_ourfocus_show = get_theme_mod('zerif_ourfocus_show');

	if( isset($zerif_ourfocus_show) && $zerif_ourfocus_show != 1 ):
		include get_template_directory() . "/sections/our_focus.php";
	endif;

	/* ABOUT US */
	
	$zerif_aboutus_show = get_theme_mod('zerif_aboutus_show');

	if( isset($zerif_aboutus_show) && $zerif_aboutus_show != 1 ):

		include get_template_directory() . "/sections/about_us.php";
	endif;

	


	/* RIBBON WITH BOTTOM BUTTON КАРТА*/


	include get_template_directory() . "/sections/ribbon_with_bottom_button.php";


	/* TESTIMONIALS */

	$zerif_testimonials_show = get_theme_mod('zerif_testimonials_show');

	if( isset($zerif_testimonials_show) && $zerif_testimonials_show != 1 ):

		include get_template_directory() . "/sections/testimonials.php";
	endif;

	/* OUR TEAM ЗАЯВКА */

	$zerif_ourteam_show = get_theme_mod('zerif_ourteam_show');

	if( isset($zerif_ourteam_show) && $zerif_ourteam_show != 1 ):

		include get_template_directory() . "/sections/our_team.php";
	endif;



	/* RIBBON WITH RIGHT SIDE BUTTON */


	include get_template_directory() . "/sections/ribbon_with_right_button.php";
	





	/* LATEST NEWS */
	$zerif_latestnews_show = get_theme_mod('zerif_latestnews_show');

	if( isset($zerif_latestnews_show) && $zerif_latestnews_show != 1 ):

		include get_template_directory() . "/sections/latest_news.php";

	endif;


	/* CONTACT US */
	$zerif_contactus_show = get_theme_mod('zerif_contactus_show');

	if( isset($zerif_contactus_show) && $zerif_contactus_show != 1 ):
		?>
		<section class="contact-us" id="contact">
			<div class="container">
				<!-- SECTION HEADER -->
				<div class="section-header">
					
					<?php
					
						$zerif_contactus_title = get_theme_mod('zerif_contactus_title','Get in touch');
						if ( !empty($zerif_contactus_title) ):
							echo '<h2 class="white-text">'.$zerif_contactus_title.'</h2>';
						endif;
					
						$zerif_contactus_subtitle = get_theme_mod('zerif_contactus_subtitle');
						if(isset($zerif_contactus_subtitle) && $zerif_contactus_subtitle != ""):
							echo '<h6 class="white-text">'.$zerif_contactus_subtitle.'</h6>';
						endif;
					?>
				</div>
				<!-- / END SECTION HEADER -->

				<!-- CONTACT FORM-->
				<div class="row">

					<?php

						if(isset($emailSent) && $emailSent == true) :

							echo '<p class="error white-text">'.__('Thanks, your email was sent successfully!','zerif-lite').'</p>';

						elseif(isset($_POST['submitted'])):

							echo '<p class="error white-text">'.__('Sorry, an error occured.','zerif-lite').'<p>';

						endif;



						if(isset($nameError) && $nameError != '') :

							echo '<p class="error white-text">'.$nameError.'</p>';

						endif;

						if(isset($emailError) && $emailError != '') :

							echo '<p class="error white-text">'.$emailError.'</p>';

						endif;


						if(isset($messageError) && $messageError != '') :

							echo '<p class="error white-text">'.$messageError.'</p>';

						endif;

					?>

					<form role="form" method="POST" action="" onSubmit="this.scrollPosition.value=document.body.scrollTop" class="contact-form">

						<input type="hidden" name="scrollPosition">

						<input type="hidden" name="submitted" id="submitted" value="true" />
						<!-- &#1048;&#1052;&#1071;-->
						<div class="col-lg-6 col-sm-6 right-coll" data-scrollreveal="enter left after 0s over 1s">

							<input type="text" name="myname" placeholder="&#1048;&#1052;&#1071;" class="form-control input-box" value="<?php if(isset($_POST['myname'])) echo $_POST['myname'];?>">

						</div>
						<!-- &#1055;&#1054;&#1051; &#1080; &#1042;&#1054;&#1047;&#1056;&#1040;&#1057;&#1058;-->
												
						<div class="col-lg-4 col-sm-4 right-coll" data-scrollreveal="enter left after 0s over 1s">
							<select name="mysex" value="<?php if(isset($_POST['mysex'])) echo $_POST['mysex'];?>">
								<option value="male">&#1052;&#1091;&#1078;&#1089;&#1082;&#1086;&#1081;</option>
								<option value="female">&#1046;&#1077;&#1085;&#1089;&#1082;&#1080;&#1081;</option>
							</select>
						</div>
						<div class="col-lg-4 col-sm-4 right-coll" data-scrollreveal="enter left after 0s over 1s">
							<input type="text" name="myage" placeholder="&#1042;&#1054;&#1047;&#1056;&#1040;&#1057;&#1058;" class="form-control input-box" value="<?php if(isset($_POST['myage'])) echo $_POST['myage'];?>">
						</div>
						<!-- &#1058;&#1045;&#1051;&#1045;&#1060;&#1054;&#1053;-->
						<div class="col-lg-6 col-sm-6 right-coll" data-scrollreveal="enter left after 0s over 1s">
							<input type="text" name="mynumber" placeholder="&#1058;&#1045;&#1051;&#1045;&#1060;&#1054;&#1053; 80..-... .. .." class="form-control input-box" value="<?php if(isset($_POST['mynumber'])) echo $_POST['mynumber'];?>">
						</div>						

						<div class="col-lg-6 col-sm-6 right-coll" data-scrollreveal="enter left after 0s over 1s">

							<input type="email" name="myemail" placeholder="EMAIL" class="form-control input-box" value="<?php if(isset($_POST['myemail'])) echo $_POST['myemail'];?>">

						</div>				

						<div class="col-lg-6 col-sm-6 right-coll" data-scrollreveal="enter right after 0s over 1s">

							<textarea name="mymessage" class="form-control textarea-box" placeholder="&#1057;&#1054;&#1054;&#1041;&#1065;&#1045;&#1053;&#1048;&#1045;"><?php if(isset($_POST['mymessage'])) { echo stripslashes($_POST['mymessage']); } ?></textarea>

						</div>
	
						<?php
							$zerif_contactus_button_label = get_theme_mod('zerif_contactus_button_label','Send Message');
							if( !empty($zerif_contactus_button_label) ):
								echo '<button class="btn btn-primary custom-button red-btn" type="submit" data-scrollreveal="enter left after 0s over 1s">'.$zerif_contactus_button_label.'</button>';
							endif;
						?>
						
					</form>

				</div>

				<!-- / END CONTACT FORM-->

			</div> <!-- / END CONTAINER -->

		</section> <!-- / END CONTACT US SECTION-->
		<?php
	endif;

}

	/*OUR COMPANY*/

if ( $overridden_template = locate_template('our_company.php') ) {
   load_template( $overridden_template );
 } 

get_footer(); ?>