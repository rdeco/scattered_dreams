<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			
			<div class="search-header">
            	<h1 class="search-title">
					<?php printf( __( 'search results for: %s', 'scatteredDreams' ),  get_search_query()); ?>
    			</h1>
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
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} 
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
		</div>	
	</div>
<?php get_footer(); ?>	