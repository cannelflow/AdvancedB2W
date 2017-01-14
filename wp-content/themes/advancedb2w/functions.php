<?php

//add support for post thumbnail
add_theme_support( 'post-thumbnails' );

//add support for menus
add_theme_support( 'menus' );
	// This theme uses wp_nav_menu() in below location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary'),
		'footer' => esc_html__( 'Footer'),
	) );
	
function advancedb2w_scripts() {
	
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
 
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all' );
 
	wp_enqueue_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', false );
	
	wp_enqueue_style( 'lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', false );
	
	wp_enqueue_style( 'custome-css', get_stylesheet_uri() );
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	
	wp_enqueue_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
	
	wp_enqueue_script( 'bootstrap-validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js');
	
	wp_enqueue_script( 'contact-me', get_template_directory_uri() . '/js/contact_me.js');
	
	wp_enqueue_script( 'custome-js', get_template_directory_uri() . '/js/main.js');
 
// 	wp_enqueue_script( 'bootstrapwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'advancedb2w_scripts' );

/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if

/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
    global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

?>