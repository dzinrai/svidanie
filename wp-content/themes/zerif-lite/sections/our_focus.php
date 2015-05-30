<section class="focus" id="focus">



<div class="container">





	<!-- SECTION HEADER -->



	<div class="section-header" data-scrollreveal="enter left after 0.2s over 0.3s">







		<!-- SECTION TITLE -->


		<?php
		$zerif_ourfocus_title = get_theme_mod('zerif_ourfocus_title',__('Our focus','zerif-lite'));
		
		if( !empty($zerif_ourfocus_title) ):
			echo '<h2 class="dark-text">'.__($zerif_ourfocus_title,'zerif-lite').'</h2>';
		endif;	
		?>




		<?php

		$zerif_ourfocus_subtitle = get_theme_mod('zerif_ourfocus_subtitle',__('Add a subtitle in Customizer, "Our focus section"','zerif-lite'));



		if( !empty($zerif_ourfocus_subtitle) ):



			echo '<h6>'.__($zerif_ourfocus_subtitle,'zerif-lite').'</h6>';



		endif;

		?>



	</div>





	<div class="row">

	
			<?php
				echo '<div class="col-lg-3 col-sm-3" data-scrollreveal="enter left after 0s over 1s">';
				the_widget( 'zerif_ourfocus','title=ПРИГЛАШЕНИЕ&text=Запишитесь на сайте или по телефону на ближайшее время.&link=#a_order&image_uri='.get_stylesheet_directory_uri()."/images/box1.png" );
				echo '</div>';
				
				echo '<div class="col-lg-3 col-sm-3" data-scrollreveal="enter left after 0s over 1s">';
				the_widget( 'zerif_ourfocus','title=ОБЩЕНИЕ&text=Каждый участник получает свой порядковый номер и 5 минут времени чтобы пообщаться, по истечении которого собеседники чередуются.&link=#a_order&image_uri='.get_stylesheet_directory_uri()."/images/box2.png" );
				echo '</div>';
				
				echo '<div class="col-lg-3 col-sm-3" data-scrollreveal="enter right after 0s over 1s">';
				the_widget( 'zerif_ourfocus','title=ВЫБОР ЗА ВАМИ&text=У вас будут карты, в которых можно отметить свои симпатии.&link=#a_order&image_uri='.get_stylesheet_directory_uri()."/images/box3.png" );
				echo '</div>';
				
				echo '<div class="col-lg-3 col-sm-3" data-scrollreveal="enter right after 0s over 1s">';
				the_widget( 'zerif_ourfocus','title=СОВПАДЕНИЕ? НЕ ДУМАЮ&text=На следующий день вы узнаете с кем у вас взаимная симпатия. Теперь у вас есть контакты человека с которым у вас взаимный интерес.&link=#a_order&image_uri='.get_stylesheet_directory_uri()."/images/box4.png" );
				echo '</div>';
				
				/*the_widget( 'zerif_ourfocus','title=ВСТРЕЧАЙТЕСЬ!&text=Просто позвоните тому, с кем у вас совпали симпатии и назначьте следующую встречу уже вдвоем!&link=#&image_uri='.get_stylesheet_directory_uri()."/images/box5.png" );*/


			?>



	</div>



</div> <!-- / END CONTAINER -->



</section>  <!-- / END FOCUS SECTION -->