<?php
echo '<a id="a_order"></a>';




			echo '<section class="our-team" id="team">';

				
				echo '<div class="container">';


					echo '<div class="section-header">';


						$zerif_ourteam_title = get_theme_mod('zerif_ourteam_title',__('Our Team','zerif-lite'));
					
						if( !empty($zerif_ourteam_title) ):
							echo '<h2 class="dark-text">'.__($zerif_ourteam_title,'zerif-lite').'</h2>';
						endif;


						$zerif_ourteam_subtitle = get_theme_mod('zerif_ourteam_subtitle',__('Add a subtitle in Customizer, "Our team section"','zerif-lite'));


						if( !empty($zerif_ourteam_subtitle) ):


							echo '<h6>'.__($zerif_ourteam_subtitle,'zerif-lite').'</h6>';


						endif;
					?>
<div class="col-lg-12 col-sm-12">
<div class="col-lg-3 col-sm-3 montserrat-style" data-scrollreveal="enter left after 0s over 0.1s">
	<label>Что входит:</label>
</div>	
<div class="col-lg-7 col-sm-7 text-lefted" data-scrollreveal="enter right after 0s over 0.1s">
    <h4 style="margin: 0;"><i class="text-info">1</i> Новые знакомства</h4>
    <h4 style="margin: 0;"><i class="text-info">2</i> Интерактивная программа с опытным ведущим</h4>
    <h4 style="margin: 0;"><i class="text-info">3</i> Напиток на выбор (чай, кофе, сок, алкогольный коктейль)</h4>
    <h4 style="margin: 0;"><i class="text-info">4</i> Приятные мелочи и призы</h4>
    <h4 style="margin: 0 0 25px 0;"><i class="text-info">5</i> Симпатии по результатам встречи</h4>	
</div>	
</div>

<?php

					echo '</div>';


					
					echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
					echo do_shortcode('[contact-form-7 id="27" title="Записаться"]');
					echo '</div> ';
					



				echo '</div>';
				echo '<!-- HERE -->';

			echo '</section>';

?>