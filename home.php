<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			
			<div class="portfolio-header">
				<h1 class="portfolio-header"><?php wp_title(''); ?></h1>
			</div>		

			<div class="col-xs-12 grid">
				<div class="row">
					<?php
						if (have_posts()){
							while(have_posts()){
								the_post();
					?>						
					<div class="col-xs-12 col-sm-4 ">
						<figure class="effect-romeo">
							<?php 							
								if (class_exists('MultiPostThumbnails')) : 						
									MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'portfolio-archive-image');
								endif;							
							?>	
							<figcaption>
								<h2>   
									<?php
                                        $words = explode(' ', the_title('', '',  false));
                                        $words[1] = '<span>'.$words[1].'</span>';
                                        $title = implode(' ', $words);
                                        echo $title;
	                                ?>
                                </h2>								
								<p><?php echo excerpt(30); ?></p>
								<a href="<?php the_permalink(); ?>">Read More</a>
							</figcaption>
						</figure>
					</div>
					<?php
							}
						}
					?>						
													
				</div>				
			</div>	
	        <?php if (show_posts_nav()) { ?>
		        <div class="pagination blog-archive">
		            <nav>
	                    <?php previous_posts_link(' &laquo; Previous Page ') ?> 
	                    	<a href="<?php bloginfo('url'); ?>/?p=blog"><i class="fa fa-th-large"></i></a>
	                    <?php next_posts_link(' Next Page  &raquo; ') ?>
		            </nav>
		        </div>
			<?php } ?>													
		</div>							
	</div>		
<?php get_footer(); ?>	