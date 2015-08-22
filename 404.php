<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			<h1 class="contact-404">404 - PAGE NOT FOUND!</h1>	
			<div  class="col-xs-12 content-404">
				<div id="ninja" ></div>	
				<h1 id="msg" class="msg">Hurry, go before he comes back!</h1>	
				<div id="ninja-head"></div>	
				<div class="search-widget"> </div>
				<div id="search-form-404" class="search-form-404">
						
					<?php if (dynamic_sidebar('search-404')); ?>
					 
				</div>	                       
			</div>	
		</div>
	</div>
<?php get_footer(); ?>			
