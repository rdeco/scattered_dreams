			<div class="row">
				<div class="col-xs-12 footer">
					<div class="footer-gradient">
						<div class="hidden-xs col-md-4 col-sm-12 footer-col-1">
							<blockquote>								
								<?php if (dynamic_sidebar('footer-left')); ?>							
							</blockquote>
						</div>						
						<div class="col-xs-12 col-md-4 col-sm-6 footer-col-2">
							<a class="contact-me" href="http://www.rdecodesigns.com/scattered-dreams/contact-page/">									
								<span>Contact Me <i class="fa fa-pencil-square-o"></i></span>
							</a>
						</div>				
						<div class="col-xs-12 col-md-4 col-sm-6 footer-col-3">									
							<div class="footer-about-info">
								<a href="<?php bloginfo('url'); ?>/about">
									<h1>About Me</h1>
									<p class="footer-about-excerpt">Catnipsum dolor sit amet fluffy daisy tabby catnipsum catnip meow. Catnipsum twitchy ears kitty-litter lucky mrow let the cat out of the bag. Mrowwwww mrooww lazy
									</p>
									
									<img src="<?php print IMAGES; ?>/cat-king-portrait.png" alt="img02">										
								</a>
							</div>															
						</div>
						<div class="col-xs-12 footer-copyright">																				
							<p class="footer-content">
								© r.deco designs • All Rights Reserved 2015
							</p>
						</div>																		
					</div>	<!-- .footer-gradient -->										
				</div>	<!-- col-xs-12 .footer -->				
			</div> <!-- .row -->
		<?php wp_footer(); ?>
	</body>
</html>