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
				
						<div class="row">
							<div class="col-lg-2 col-sm-3 sidebar-widget">
								<?php if (dynamic_sidebar('post-right')); ?>
							</div>
						</div>
						<div class="col-lg-6 col-lg-offset-3 col-sm-8 post-content">
														
							<h1 class="post-content-h1"><?php the_title(); ?></h1>
							
							<?php the_content(); ?>
		
							<div class="pagination">
								<nav>
				                    <?php previous_post_link() ?>
				                   		<a href="<?php bloginfo('url'); ?>/portfolio"><i class="fa fa-th-large"></i></a>
				                    <?php next_post_link() ?>
								</nav>
		            		</div>							
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
