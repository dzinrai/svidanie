<?php


	$zerif_bottomribbon_text = get_theme_mod('zerif_bottomribbon_text');


	if( !empty($zerif_bottomribbon_text) ):

		echo '<a id="place"></a>';
		echo '<section class="separator-one">';

echo '<div class="row" data-scrollreveal="enter left after 0s over 1s">';
	echo '<div class="col-lg-12 col-sm-12">';
		echo do_shortcode( '[Best_Wordpress_Gallery id="2" gal_title="Newman"]' );
		/*echo '<div class="col-lg-2 col-sm-2"></div>';
		echo '<div class="col-lg-2 col-sm-2 data-scrollreveal="enter left after 0s over 1s">';
		echo '<img class="placeImages" src="/wp-content/uploads/2015/02/newman1.png">';
		echo '</div>';
		echo '<div class="col-lg-2 col-sm-2" data-scrollreveal="enter left after 0s over 1s">';
		echo '<img class="placeImages" src="/wp-content/uploads/2015/02/newman2.png">';
		echo '</div>';
		echo '<div class="col-lg-2 col-sm-2" data-scrollreveal="enter right after 0s over 1s">';
		echo '<img class="placeImages" src="/wp-content/uploads/2015/02/newman3.png">';
		echo '</div>';
		echo '<div class="col-lg-2 col-sm-2" data-scrollreveal="enter right after 0s over 1s">';
		echo '<img class="placeImages" src="/wp-content/uploads/2015/02/newman4.png">';
		echo '</div>';*/
	echo '</div>';
echo '</div>';


	echo '<div class="color-overlay">';

		echo '<div class="container">';

			echo '<div class="row">';
				
				echo '<h3 class="container text" data-scrollreveal="enter left after 0s over 1s">';


					echo __($zerif_bottomribbon_text,'zerif-lite');


				echo '</h3>';	
				
				


				$zerif_bottomribbon_buttonlabel = get_theme_mod('zerif_bottomribbon_buttonlabel');


				$zerif_bottomribbon_buttonlink = get_theme_mod('zerif_bottomribbon_buttonlink');


					


				if( !empty($zerif_bottomribbon_buttonlabel)):


					echo '<div data-scrollreveal="enter right after 0s over 1s">';


						echo '<a id="map" href="http://svidanietut.by/map/" class="btn btn-primary custom-button green-btn map-show">'.__($zerif_bottomribbon_buttonlabel,'zerif-lite').'</a>';


					echo '</div>';
	echo '</div>';

	

echo '</div>';




				endif;


			echo '</div>';


		echo '</section>';	


	endif;


?>