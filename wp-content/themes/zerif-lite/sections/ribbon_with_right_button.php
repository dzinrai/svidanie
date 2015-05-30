<?php 


	$zerif_ribbonright_text = get_theme_mod('zerif_ribbonright_text');


	if( !empty($zerif_ribbonright_text) ):

	echo '<a id="refFAQ"></a>';
		echo '<section class="purchase-now">';


			echo '<div class="container">';


				echo '<div class="row">';


					echo '<div class="col-md-9" data-scrollreveal="enter left after 0s over 1s">';


						echo '<h2 class="white-text" style="text-transform: uppercase;">';


							echo __($zerif_ribbonright_text,'zerif-lite');


						echo '</h2>';	
?>
<div class="faq white-text text-lefted clearfix" data-scrollreveal="enter left after 0s over 1s">

<span style="text-transform: uppercase; font-weight: bold;"><h3 class="h1-faq">Сколько это будет стоить?</h3></span><br><br>

<i class="FAQicon">1</i>Билет на вечеринку стоит 200 тысяч рублей. На данный момент это самая минимальная цена позволяющая предоставить надлежащий уровень качества услуги.<br><br>


<span style="text-transform: uppercase; font-weight: bold;"><h3 class="h1-faq">Как долго это будет длиться?</h3></span><br><br>

<i class="FAQicon">2</i>В среднем не более чем 1.5 часа на основную часть. На общение выделяется 5 минут, но учитывая что зачастую люди не могут оторваться друг от друга, доходит и до 7-8 минут.<br><br>


<span style="text-transform: uppercase; font-weight: bold;"><h3 class="h1-faq">Как часто проходят встречи?</h3></span><br><br>

<i class="FAQicon">3</i>По мере наполнения возрастных групп обоих полов. Наша задача найти вас, собрать в месте проведения и дать вам возможность пообщаться с как минимум 10-ю людьми противоположного пола.<br><br>


<span style="text-transform: uppercase; font-weight: bold;"><h3 class="h1-faq">Где можно оставить свой отзыв?</h3></span><br><br>

<i class="FAQicon">4</i>Загляните в нашу группу Вконтакте по ссылке внизу или вверху страницы. Там можно оставить отзывы и не только. <br>
</div>
<?php


					echo '</div>';
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

					


					$zerif_ribbonright_buttonlabel = get_theme_mod('zerif_ribbonright_buttonlabel');


					$zerif_ribbonright_buttonlink = get_theme_mod('zerif_ribbonright_buttonlink');


					


					if( !empty($zerif_ribbonright_buttonlabel) && !empty($zerif_ribbonright_buttonlink) ):


						echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';


							echo '<a href="'.$zerif_ribbonright_buttonlink.'" class="btn btn-primary custom-button red-btn">'.__($zerif_ribbonright_buttonlabel,'zerif-lite').'</a>';


						echo '</div>';


					endif;


				echo '</div>';


			echo '</div>';


		echo '</section>';	


	endif;


?>