<?php	
	/*
		Template Name: contact page
	*/

	get_header(); ?>

	<div class="container-fluid">
		<h1 class="contact-h1"><?php the_title(); ?></h1>	
		<div class="row">
			<div id="contact-content" class="col-xs-12 contact-content">				
				<?php
					if(have_posts()){
						while(have_posts()){
							the_post();	
							the_content();
		
								}	
							}
				?>
			</div>
			<?php get_footer(); ?>
		</div>
	</div>
	
		

		
		
		
		
		
		
		
