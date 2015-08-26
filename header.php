<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php bloginfo('name'); ?> • <?php wp_title(); ?> </title>
		<?php wp_head(); ?>
		<script>
			var $ = jQuery;
		</script>
	</head>
	<body <?php body_class(); ?>>		
        <header class="container">
            <div class="row">
	            <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                       
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div>
                            <?php $logo= get_option('scatteredDreams_logo', IMAGES.'/logo.png'); ?>
                                <a class="logo" href="<?php bloginfo('url'); ?>">
                                    <img src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" />
                                </a>
                            </div> 
                        </div>
						<?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             =>  5,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',                               
                                'items_wrap'        => '<ul>%3$s</ul>',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker()
                            ));
                        ?>
                        <div  class="social-media-widget">
	                        <?php if( is_active_sidebar ('header-searchbar-widget-area')) : ?>
	                        	<?php dynamic_sidebar ('header-searchbar-widget-area'); ?>
							<?php endif; ?>  
                    	</div> 
                    </div><!-- /.container-fluid-->          
                </nav>
            </div>
        </header>				



