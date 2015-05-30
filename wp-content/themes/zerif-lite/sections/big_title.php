<?php

		echo '<a id="tophead"></a>';
		echo '<div class="container">';


		$zerif_bigtitle_title = get_theme_mod('zerif_bigtitle_title',__('To add a title here please go to Customizer','zerif-lite'));


		if( !empty($zerif_bigtitle_title) ):


			echo '<h1 class="intro-text">'.__($zerif_bigtitle_title,'zerif-lite').'</h6>';
			echo '<p class="what-is-it">';
				the_field('what-is-it-text');
			echo '</p>';

		endif;





		$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label',__('One button','zerif-lite'));


		$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url','#');





		$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label',__('Another button','zerif-lite'));


		$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url','#');


	


		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) ||


		(!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):


			echo '<div class="buttons">';


				if ( !empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url) ):


					echo '<a href="'.$zerif_bigtitle_greenbutton_url.'" class="btn btn-primary custom-button green-btn" title="Заявка">'.__($zerif_bigtitle_greenbutton_label,'zerif-lite').'</a>';


				endif;


				if ( !empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url) ):


					echo '<a href="'.$zerif_bigtitle_redbutton_url.'" class="btn btn-primary custom-button red-btn more-info-btn">'.__($zerif_bigtitle_redbutton_label,'zerif-lite').'</a>';


				endif;				
	

			echo '</div>';


		endif;


	/* Menu SECTION */

	include get_template_directory() . "/sections/menu-light.php";


		echo '</div>';?>



<?php
		echo '<div class="clear"></div>';

?>