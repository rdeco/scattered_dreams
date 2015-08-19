<?php get_header(); ?>
	<div class="container-fluid">	
		<div id="index-wrapper">
			<div class="row">
				<div id="header" class="col-xs-12 index"> 
					<ul id="pe-thumbs" class="pe-thumbs">
						
						<?php							
							$args = array(
								'post_type' => 'post',
							);
							$query = new WP_Query($args);
							
							if($query->have_posts()){
								while($query->have_posts()){
									$query->the_post();
						?>
						<li>
							<a href="<?php the_permalink(); ?>">
							<?php 							
								if (class_exists('MultiPostThumbnails')) : 						
									MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'mosaic-image');
								endif;							
							?>	
					
								<div class="pe-description">
									<h3><?php the_title(); ?></h3>
									<p><?php echo excerpt(10); ?></p>
								</div>
							</a>
						</li>
						<?php
								}
							}
							
							wp_reset_postdata();
						?>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>											
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>		
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>											
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>		
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>											
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>		
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>											
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>	
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>											
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>		
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>											
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>		
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php print IMAGES; ?>/thumbs/1.jpg" alt="img02">
					
								<div class="pe-description">
									<h3>Time</h3>
									<p>Since time, and his predestinated end</p>
								</div>
							</a>
						</li>							
						
					</ul>
				</div>	<!-- .col-lg-6 .col-lg-offset-6 .col-md-12 .index -->
			</div> <!-- .row -->

			<div class="row">
				<div id="headline" class="index-content col-xs-12 index">
					<div class="featured-title-bg">
						<div class="arrow-down"></div>								
							<header class="header">
								<div class="row">
									<div class="col-xs-12 headline-container">							
										<h1 class="headline">				
											<?php
												$postmeta = get_post_meta($post->ID);
												
												if ( isset($postmeta['meta_box_headline_field'][0]) ) {
												    echo $postmeta['meta_box_headline_field'][0];
												}
						                	?>
					                	</h1> 
									</div>
								</div>
						
								<div class="row">
									<div class="col-xs-12 tagline-container">
										<p class="tagline"> <?php bloginfo('description'); ?> </p>
									</div>
								</div>			
							</header>
					</div>
					<div id="featured" class="col-xs-12 index">	
						<h1 class="featured-title">Featured Projects</h1>
									
						<article class="featured-content col-xs-12 col-md-4 col-lg-3 first">							
							<figure class="featured-img">
								<?php 
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} 
			            		?>
			            		<figcaption>
									<?php if (dynamic_sidebar('featured-left')); ?>						
								</figcaption>	
							</figure>													
						</article>									
						
						<article class="featured-content col-xs-12 col-md-4 col-lg-3 first">							
							<figure class="featured-img">
								<?php 							
									if (class_exists('MultiPostThumbnails')) : 						
										MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-featured-image');
									endif;							
								?>	
			            		<figcaption>
									<?php if (dynamic_sidebar('featured-center')); ?>							
								</figcaption>	
							</figure>													
						</article>	
						
						<article class="featured-content col-xs-12 col-md-4 col-lg-3 first">							
							<figure class="featured-img">
								<?php 							
									if (class_exists('MultiPostThumbnails')) : 						
										MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-featured-image');
									endif;							
								?>	
			            		<figcaption>
									<?php if (dynamic_sidebar('featured-right')); ?>									
								</figcaption>	
							</figure>													
						</article>																	
					</div>												
				</div> <!-- .index-content .col-xs-12 -->
				<?php get_footer(); ?>					
			</div><!-- .row -->			
		</div><!-- .index-wrapper -->
	</div> <!-- .container-fluid -->


