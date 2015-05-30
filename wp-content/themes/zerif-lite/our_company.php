<a id="our_team"></a>
<section class="focus team-field">

<div class="container">





	<!-- SECTION HEADER -->



	<div class="section-header" data-scrollreveal="enter left after 0.2s over 0.3s">







		<!-- SECTION TITLE -->


		<?php
		$zerif_ourfocus_title = get_theme_mod('zerif_ourfocus_title',__('Our focus','zerif-lite'));
		
		if( !empty($zerif_ourfocus_title) ):
			echo '<h2 class="dark-text">Наша команда</h2>';
		endif;	
		?>

	</div>





	<div class="row">
	
			<?php
				$member = 0;
				if (get_field('member_photo_1')){
					$member+=1;
				}
				if (get_field('member_photo_2')){
					$member+=1;
				}
				if (get_field('member_photo_3')){
					$member+=1;
				}
				if (get_field('member_photo_4')){
					$member+=1;
				}
				$table = 12/$member;

				if(get_field('member_photo_1')){ ?>

				<div class="col-lg-<?php echo $table; ?> col-sm-<?php echo $table; ?>" data-scrollreveal="enter right after 0s over 0.3s">
					<div class="widget ctUp-ads focus-box blue">
						<div class="service-icon member">					
							<a href="<?php the_field('member_vk_1'); ?>" target="_blank">
								<i class="pixeden photo-member" style="background: url(<?php the_field('member_photo_1'); ?>) no-repeat;width:100%; height:100%;border-radius: 50%;"></i> 
								<!-- FOCUS ICON-->
							</a>
						</div>
						<h5><?php the_field('member_name_1'); ?></h5>
					    <!-- FOCUS HEADING -->
						<h6><?php the_field('member_spec_1'); ?></h6>	
						<p><?php the_field('member_phone_1'); ?></p>	
					</div>
			
				</div>

			<?php	
				}

				if(get_field('member_photo_2')){ ?>
				<div class="col-lg-<?php echo $table; ?> col-sm-<?php echo $table; ?>" data-scrollreveal="enter right after 0s over 0.5s">
					<div class="widget ctUp-ads focus-box blue">
						<div class="service-icon member">					
							<a href="<?php the_field('member_vk_2'); ?>" target="_blank">
								<i class="pixeden photo-member" style="background: url(<?php the_field('member_photo_2'); ?>) no-repeat;width:100%; height:100%;border-radius: 50%;"></i> 
								<!-- FOCUS ICON-->
							</a>
						</div>
						<h5><?php the_field('member_name_2'); ?></h5>
					    <!-- FOCUS HEADING -->
						<h6><?php the_field('member_spec_2'); ?></h6>	
						<p><?php the_field('member_phone_2'); ?></p>	
					</div>

				</div>
			<?php
				}
				
				if(get_field('member_photo_3')) { ?>
				<div class="col-lg-<?php echo $table; ?> col-sm-<?php echo $table; ?>" data-scrollreveal="enter left after 0s over 0.7s">
					<div class="widget ctUp-ads focus-box blue">
						<div class="service-icon member">					
							<a href="<?php the_field('member_vk_3'); ?>" target="_blank">
								<i class="pixeden photo-member" style="background: url(<?php the_field('member_photo_3'); ?>) no-repeat;width:100%; height:100%;border-radius: 50%;"></i> 
								<!-- FOCUS ICON-->
							</a>
						</div>
						<h5><?php the_field('member_name_3'); ?></h5>
					    <!-- FOCUS HEADING -->
						<h6><?php the_field('member_spec_3'); ?></h6>	
						<p><?php the_field('member_phone_3'); ?></p>	
					</div>
			
				</div>
			<?php
				}
				
				if(get_field('member_photo_4')) { ?>
				<div class="col-lg-<?php echo $table; ?> col-sm-<?php echo $table; ?>" data-scrollreveal="enter left after 0s over 0.9s">
					<div class="widget ctUp-ads focus-box blue">
						<div class="service-icon member">					
							<a href="<?php the_field('member_vk_4'); ?>" target="_blank">
								<i class="pixeden photo-member" style="background: url(<?php the_field('member_photo_4'); ?>) no-repeat;width:100%; height:100%;border-radius: 50%;"></i> 
								<!-- FOCUS ICON-->
							</a>
						</div>
						<h5><?php the_field('member_name_4'); ?></h5>
					    <!-- FOCUS HEADING -->
						<h6><?php the_field('member_spec_4'); ?></h6>	
						<p><?php the_field('member_phone_4'); ?></p>	
					</div>
			
				</div>
				<?php
				}		

			?>



	</div>



</div> <!-- / END CONTAINER -->



</section>  <!-- / END FOCUS SECTION -->