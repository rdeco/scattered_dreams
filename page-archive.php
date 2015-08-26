<?php	
	/*
		Template Name: archive page
	*/

	get_header(); ?>

	<div class="container-fluid">	
		<div id="index-wrapper">
			<div class="row">
				<aside id="archive-header" class="col-xs-12 archive"> 
					<h1 class="recent-posts">recent posts</h1>
					<?php
						if(have_posts()){
							while(have_posts()){
								the_post();
									the_content(); 					
						}		
							}
					?>
				</aside>	<!-- .col-lg-6 .col-lg-offset-6 .col-md-12 .index -->
			</div> <!-- .row -->

			<div class="row">
				<div id="archive-headline" class="index-content col-xs-12 index">
					<div class="featured-title-bg">
						<div class="arrow-down"></div>													
							<div id="archive-content" class="col-xs-12 archive-content">
								<h1 class="archive-header"><?php wp_title(''); ?> </h1>				
								<section class="col-xs-12 col-sm-6 col-sm-offset-3 archive-content">	
									<h1 class="archive-date">blogs by: </h1>
									<p class="date"> year:</p>
									<?php wp_get_archives( array( 'type' => 'yearly') ); ?>													
									<p class="date">month: </p>
									<?php wp_get_archives( array( 'type' => 'monthly') ); ?>										
									<h1 class="archive-category">by category: </h1>	
									<?php wp_list_categories('title_li='); ?>								
								</section>
							</div>
						</div>																
					</div>
					<?php get_footer(); ?>										
				</div> <!-- .index-content .col-xs-12 -->														
			</div><!-- .row -->				
		</div><!-- .index-wrapper -->
	</div> <!-- .container-fluid -->


		
		
		
		
		
		
		
