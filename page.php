<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div id="wrapper" class="col-xs-12">
						
			<?php
				if(have_posts()){
					while(have_posts()){
						the_post();	
			?>
			<div id="single-img" class="col-xs-12 single-content">
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
        		?>
			</div>
			<div class="row">
				<div id="single-content" class="col-xs-12 single-content">
					
					<div class=" col-xs-6 col-xs-offset-3 post-content">	
						<h1 class="about-content-h1"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<?php
							}	
						}
					?>
				</div>
				<?php get_footer(); ?>
			</div>
		</div><!-- .col-xs-12 .wrapper -->
	</div>
</div>

