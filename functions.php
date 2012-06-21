<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();

    //Load BootStrap Responsive CSS /css/Bootstrap-responsive.css
    function wptuts_styles_with_the_lot()  
    {  
        // Register the style like this for a plugin:  
        //wp_register_style( 'custom-style', plugins_url( '/css/Bootstrap-responsive.css', __FILE__ ), array(), '20120208', 'all' );  
        // or  
        // Register the style like this for a theme:  
        wp_register_style( 'custom-style', get_template_directory_uri() . '/css/bootstrap-responsive.css', array(), '20120208', 'all' );  
      
        // For either a plugin or a theme, you can then enqueue the style:  
        wp_enqueue_style( 'custom-style' );  
    }  
    add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' ); 
	
	// Load jQuery
	if ( !is_admin() ) {
        echo 'jquery is deregistered'
	   wp_deregister_script('jquery');
	  
	  // wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    function add_scripts_after_footer() {
        // Register the script like this for a plugin:  
        wp_register_script( 'custom-script', plugins_url( '/js/custom-script.js', __FILE__ ) );  
        // or  
        // Register the script like this for a theme:  
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
        wp_register_script( 'bootstrap-alert', get_template_directory_uri() . '/js/bootstrap-alert.js' );  
        wp_register_script( 'bootstrap-button', get_template_directory_uri() . '/js/bootstrap-button.js' );  
        wp_register_script( 'bootstrap-carousel', get_template_directory_uri() . '/js/bootstrap-carousel.js' );  
        wp_register_script( 'bootstrap-collapse', get_template_directory_uri() . '/js/bootstrap-collapse.js' );  
        wp_register_script( 'bootstrap-dropdown', get_template_directory_uri() . '/js/bootstrap-dropdown.js' );  
        wp_register_script( 'bootstrap-modal', get_template_directory_uri() . '/js/bootstrap-modal.js' );  
        wp_register_script( 'bootstrap-popover', get_template_directory_uri() . '/js/bootstrap-popover.js' );  
        wp_register_script( 'bootstrap-scrollspy', get_template_directory_uri() . '/js/bootstrap-scrollspy.js' );  
        wp_register_script( 'bootstrap-tab', get_template_directory_uri() . '/js/bootstrap-tab.js' );  
        wp_register_script( 'bootstrap-tooltip', get_template_directory_uri() . '/js/bootstrap-tooltip.js' );  
        wp_register_script( 'bootstrap-transition', get_template_directory_uri() . '/js/bootstrap-transition.js' );  
        wp_register_script( 'bootstrap-typeahead', get_template_directory_uri() . '/js/bootstrap-typeahead.js' );  
      
     
      
        // For either a plugin or a theme, you can then enqueue the script:  
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'bootstrap-transition' );
        wp_enqueue_script( 'bootstrap-alert' );
        wp_enqueue_script( 'bootstrap-modal' );
        wp_enqueue_script( 'bootstrap-dropdown' );
        wp_enqueue_script( 'bootstrap-scrollspy' );
        wp_enqueue_script( 'bootstrap-tab' );
        wp_enqueue_script( 'bootstrap-tooltip' );
        wp_enqueue_script( 'bootstrap-popover' );
        wp_enqueue_script( 'bootstrap-button' );
        wp_enqueue_script( 'bootstrap-collapse' );
        wp_enqueue_script( 'bootstrap-carousel' );
        wp_enqueue_script( 'bootstrap-typeahead' );

    }
    add_action('wp_footer', 'add_scripts_after_footer');

    function move_admin_bar() {
        
        echo '<style type="text/css">
        .navbar-fixed-top {
            top: 28px;
        }
        </style>';
        
    }
    if ( is_user_logged_in() ) {
        add_action( 'admin_head', 'move_admin_bar' );
        add_action( 'wp_head', 'move_admin_bar' );
    }
?>