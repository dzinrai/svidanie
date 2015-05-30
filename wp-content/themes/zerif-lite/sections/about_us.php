<a id="why-section"></a>

<section class="about-us" id="aboutus">
	
	<div class="container">


		<!-- SECTION HEADER -->

		<div class="section-header">


			<!-- SECTION TITLE -->

			<?php 
			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About Us','zerif-lite'));
			
			if( !empty($zerif_aboutus_title) ):
				echo '<h2 class="white-text" data-scrollreveal="enter left after 1s over 2s">'.__($zerif_aboutus_title,'zerif-lite').'</h2>';
			endif;
			?>

			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->

			<?php


				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Add a subtitle in Customizer, "About us section"','zerif-lite'));


				if( !empty($zerif_aboutus_subtitle) ):


					echo '<h6 class="white-text">';


						echo __($zerif_aboutus_subtitle,'zerif-lite');


					echo '</h6>';


				endif;


			?>
		</div><!-- / END SECTION HEADER -->


		<!-- 3 COLUMNS OF ABOUT US-->


		<div class="row">


			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->


			<?php


				$zerif_aboutus_biglefttitle = get_theme_mod('zerif_aboutus_biglefttitle',__('In order to Change the Title here you Need to go to Customizer','zerif-lite'));


				if( !empty($zerif_aboutus_biglefttitle) ):


					echo '<div class="col-lg-4 col-md-4 column">';


						echo '<div class="big-intro" data-scrollreveal="enter left after 0s over 1s">';


							echo __($zerif_aboutus_biglefttitle,'zerif-lite');


						echo '</div>';


					echo '</div>';


				endif;





				$zerif_aboutus_text = get_theme_mod('zerif_aboutus_text','You can add here a large piece of text. For that, please go in the Admin Area, Customizer, "About us section" <br/> <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque.  <br/> <br/>Maecenas non tellus vitae augue tempor venenatis. Mauris ac tincidunt dolor, id feugiat odio. Mauris egestas ligula sit amet lorem condimentum ultrices');


				if( !empty($zerif_aboutus_text) ):


					echo '<div class="col-lg-4 col-md-4 column" data-scrollreveal="enter bottom after 0s over 0.3s">';


						echo '<p>';


							echo __($zerif_aboutus_text,'zerif-lite');


						echo '</p>';


					echo '</div>';


				endif;


			?>




		<!-- COLUMN 1 - SKILSS-->


		<div class="col-lg-12 col-md-12 column">


			<ul class="skills clearfix" data-scrollreveal="enter right after 0s over 0.3s">





				<!-- SKILL ONE -->


<li class="skill clearfix" data-scrollreveal="enter left after 0.3s over 0.5s">
	<div class="col-lg-11 col-md-11 col-sm-11 border-why-1"></div>
  	<div class="col-lg-3 col-md-3 col-sm-3">
		<img src="http://svidanietut.by/wp-content/uploads/2015/01/a3.jpg" class="about-img">
    	</div>
	<div class="col-lg-9 col-md-9 col-sm-9">
		<h3 class="bolder">Ваш первый шаг у нас равен 10</h3>
		<p>В обычной жизни простое общение идет после стадии знакомства. Отсутствие времени, лень или вовсе страх иногда не позволяют наслаждаться радости встреч и общения даже с 1-ним новым человеком. Мы дадим вам 10 сразу, в нужной обстановке и без суеты. </p>
	</div>
</li>


				<!-- SKILL TWO -->


				
<li class="skill clearfix" data-scrollreveal="enter left after 0.3s over 0.5s">
	<div class="col-lg-9 col-md-9 col-sm-9 border-why-2">
    	</div>
	<div class="col-lg-6 col-md-6 col-sm-6">
		<h3 class="bolder">Люди все больше общаются в сети, но как часто это приводит к близким отношениям?</h3>
		<p>Сейчас люди много времени проводят в Сети. Все больше общаются там же, но можно долго общаться онлайн, так никогда и не увидев собеседника. Это можно исправить обратившись к нам. Спид-дейтинг позволяет в сжатые сроки пообщаться с 10 людьми противо­полож­но­го пола, узнать их хобби, род занятий. </p>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6">
		<img src="http://svidanietut.by/wp-content/uploads/2015/02/a4.jpg" class="about-img">
	</div>
</li>

				<!-- SKILL THREE -->


<li class="skill clearfix" data-scrollreveal="enter left after 0.3s over 0.5s">
	<div class="col-lg-10 col-md-10 col-sm-10 border-why-3"></div>
	<div class="col-lg-4 col-md-4 col-sm-4">
		<img src="http://svidanietut.by/wp-content/uploads/2015/01/a1.jpg" class="about-img">
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8">
		<h3 class="bolder">Этот вечер может стать необычной историей знакомства вас и вашей половинки</h3>
	</div>

</li>
</ul>
<?php
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
?>

		</div> <!-- / END SKILLS COLUMN-->


	</div> <!-- / END 3 COLUMNS OF ABOUT US-->





	<!-- CLIENTS -->
	<?php
		if(is_active_sidebar( 'sidebar-aboutus' )):
			echo '<div class="our-clients">';
				echo '<h5><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h5>';
			echo '</div>';

			echo '<div class="client-list">';
				echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
				dynamic_sidebar( 'sidebar-aboutus' );
				echo '</div>';
			echo '</div> ';
		endif;
	?>


</div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->