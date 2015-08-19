<?php
	
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));	
define( 'IMAGES', TEMPPATH. "/imgs");

/*
add_theme_support( 'menus' );
*/


require_once('theme-options.php');
require_once('wp_bootstrap_navwalker.php');

add_theme_support( 'post-thumbnails' );

/*---------------------------------------------------*
 * Enqueue stylesheets for css *
 *---------------------------------------------------*/

function scatteredDreams_styles(){
	wp_enqueue_style ('main-css', get_template_directory_uri().'/css/main.css' );	
	wp_enqueue_style ('bootstrap-min-css', get_template_directory_uri().'/css/bootstrap.min.css' );	
	wp_enqueue_style ('normalize-css', get_template_directory_uri().'/css/normalize.css' );
	wp_enqueue_style ('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );	
	wp_enqueue_style ('googlefonts-css', 'http://fonts.googleapis.com/css?family=Della+Respira|Oswald|Amita');
	
	if(is_home() || is_archive() || is_search() ){
		wp_enqueue_style ('footer-static-css', get_template_directory_uri().'/css/footer-static.css' );		
	} else{
		wp_enqueue_style ('footer-css', get_template_directory_uri().'/css/footer.css' );				
	};	
}

add_action('wp_enqueue_scripts', 'scatteredDreams_styles');

/*---------------------------------------------------*
 * Enqueue scripts for javascript *
 *---------------------------------------------------*/

function scatteredDreams_scripts(){
    wp_enqueue_script('modernizr-js', get_template_directory_uri().'/js/modernizr.js', array(), true, false);	
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), true, true);
    wp_enqueue_script('proximity-js', get_template_directory_uri().'/js/proximity.js', array('jquery'), true, true);		    
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('proximity-js'), true, true);     
    
    if(is_404()){
		wp_enqueue_script('ninja-404-js', get_template_directory_uri().'/js/ninja-404.js' );		
	};
}

add_action('wp_enqueue_scripts', 'scatteredDreams_scripts');


/**
 * Register Navigation Menus
 * -------------------------
 */


function scatteredDreams_register_menu(){
    register_nav_menus( array(
        'primary' => __( 'Scattered Dreams Primary Menu', 'scatteredDreams' ),
    ) );

}
add_action('init', 'scatteredDreams_register_menu');


	function add_classes_on_li($classes, $item, $args) {
	  $classes[] = 'button button--ujarak button--border-thin button--text-medium';
	  return $classes;
	}
	add_filter('nav_menu_css_class','add_classes_on_li',1,3);


/**
* End register Navigation Menus
* -------------------------
*/


function scatteredDreams_widgets_init() {

register_sidebar(array(
    'name' => __('Header Social Media Widget Area ', 'scatteredDreamsWidget'),
    'id' => 'header-searchbar-widget-area',
    'before-widget' => '<div class="social-media">',
    'right-widget' => '</div>',
    'before-title' => '',
    'after-title' => '',
    ));
}

add_action ('init', 'scatteredDreams_widgets_init');





/**
* Adds support for meta box - Headline
* -------------------------------------------------------------------
*/

  function scatteredDreams_headline_field() {
	  
      add_meta_box( 
      	'meta-box-id-headline', 
      	'Headline', 
      	'scatteredDreams_field_headline', 
      	'page', 
      	'normal', 
      	'high' 
      );
  }

  add_action( 'add_meta_boxes', 'scatteredDreams_headline_field' );

      function scatteredDreams_field_headline( $post ) {
          $values = get_post_custom( $post->ID );
          $text = isset( $values['meta_box_headline_field'] ) ? 	esc_attr( $values['meta_box_headline_field'][0] ) : '';
  ?>
  <p>
      <label for="meta_box_text">Headline:  </label>
      <input type="textarea" name="meta_box_headline_field" id="meta_box_headline_field" value="<?php echo $text; ?>" />
  </p>

  <?php
  }


  add_action( 'save_post', 'scatteredDreams_meta_box_save_headline' );
  function scatteredDreams_meta_box_save_headline( $post_id ) {
      // Bail if we're doing an auto save
      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

      // if our current user can't edit this post, bail
      if( !current_user_can( 'edit_post', $post_id ) ) return;

      // now we can actually save the data
      $allowed = array(
          'a' => array( // on allow a tags
              'href' => array() // and those anchors can only have href attribute
          )
      );

      // Make sure your data is set before trying to save it
      if( isset( $_POST['meta_box_headline_field'] ) )
          update_post_meta( $post_id, 'meta_box_headline_field', wp_kses( $_POST['meta_box_headline_field'], $allowed ) );

  }
  
/**
* Ends support for meta box - front page - Headline
* -------------------------------------------------------------------
*/



/***
 * register widgets for featured content
 * -----------------------------------
 */
 
 function scatteredDreams_featured_widget($name, $id, $description){
	 register_sidebar(array(
		 'name' => __( $name ),
		 'id' => $id,
		 'description' => __($description),
		 'before_widget' => '',
		 'after_widget' => '',
		 'before_title' => '<h1 class="featured-h1"> ',
		 'after_title' => '</h1> '
		 
	 ));
}
scatteredDreams_featured_widget( 'Featured Post Left', 'featured-left', 'Displays featured post on the left side of the page' );
scatteredDreams_featured_widget( 'Featured Post Center', 'featured-center', 'Displays featured post on the center side of the page' ); 
scatteredDreams_featured_widget( 'Featured Post Right', 'featured-right', 'Displays featured post on the right side of the page' ); 

/***
 *  end register widgets for featured content
 * ---------------------------------------
 */
 

/***
 * register multiple images
 * --------------------------
 */

if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
		'label' => 'Secondary Featured Image',
		'id' => 'secondary-featured-image',
		'post_type' => 'page'
	 ) );

 }
 
 if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
		'label' => 'Tertiary Featured Image',
		'id' => 'third-featured-image',
		'post_type' => 'page'
	 ) );

 }
 
  if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
		'label' => 'Front Page Mosaic Image',
		'id' => 'mosaic-image',
		'post_type' => 'post'
	 ) );

 }
 
 
  if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
		'label' => 'Portfolio Archive Image',
		'id' => 'portfolio-archive-image',
		'post_type' => 'post'
	 ) );

 }



/***
 * end multiple images 
 * -------------------
 */
 

 /***
 * register widget for post sidebar 
 * -----------------------------------
 */
 
 function scatteredDreams_sidebar_widget($name, $id, $description){
	 register_sidebar(array(
		 'name' => __( $name ),
		 'id' => $id,
		 'description' => __($description),
		 'before_widget' => '',	
		 'after_widget' => '',
		 'before_title' => '<h1 class="sidebar-widget">',
		 'after_title' => '</h1>'
		 
	 ));
}
scatteredDreams_sidebar_widget( 'Sidebar Post Right', 'post-right', 'Displays sidebar widget on posts page' );



 function scatteredDreams_footer_widget($name, $id, $description){
	 register_sidebar(array(
		 'name' => __( $name ),
		 'id' => $id,
		 'description' => __($description),
		 'before_widget' => '',	
		 'after_widget' => '',
		 'before_title' => '',
		 'after_title' => ''
		 
	 ));
}
scatteredDreams_footer_widget( 'Left Side Footer', 'footer-left', 'Displays widget on left side of footer' );

/***
 *  end register widget for post sidebar 
 * ---------------------------------------
 */
 
 /**
* Adds support for pagination
* ---------------------------
*/

function pagination($pages = '', $range = 50){
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}



/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

/**
 * Ends support for pagination
 * ---------------------------
 */

 


/*** 
* multiple excerpts & excerpt lengths
* ----------------------------------------
*/ 
 
function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).'...';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}

?>