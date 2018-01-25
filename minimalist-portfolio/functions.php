<?php


/**
 * Enqueue Styles and Scripts
 */
function minimalist_portfolio_enqueue() {

	if ( is_admin() ) {
		return;
	}

	// Necessary styles
	wp_enqueue_style( 'minimalist-portfolio-hamilton-style', get_template_directory_uri() . '/style.css', array( 'hamilton-fonts' ) );
	wp_enqueue_style( 'minimalist-portfolio-style', get_stylesheet_uri() );

	// Refresh portfolio after the page load
	wp_add_inline_script( 'phort-app', '
		(function(){
			setTimeout( function() {
				wp.hooks.doAction("phort.portfolio.refresh");
			}, 50);
		})();' );
}

add_action( 'wp_enqueue_scripts', 'minimalist_portfolio_enqueue', 100 );


/*
 * Easy Photography Portfolio Configuration
 */
$__DIR = get_stylesheet_directory();

if ( class_exists( 'Colormelon_Photography_Portfolio' ) ) {
	require_once $__DIR . '/inc/easy-photography-portfolio.php';
}
else {
	require $__DIR . '/inc/plugins/tgm_plugin_activation.php';
	require $__DIR . '/inc/plugins/recommend_plugins.php';
}

/**
 * Display the welcome message in admin panel
 */
if ( is_admin() ) {
	require $__DIR . '/inc/welcome_message.php';
}



add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'project'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'project');
    register_post_type('project', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Projects', 'Project'), // Rename these to suit
            'singular_name' => __('Project', 'Project'),
            'add_new' => __('Add New', 'Project'),
            'add_new_item' => __('Add New Project', 'Project'),
            'edit' => __('Edit', 'Project'),
            'edit_item' => __('Edit Project', 'Project'),
            'new_item' => __('New Project', 'Project'),
            'view' => __('View Project', 'Project'),
            'view_item' => __('View Project', 'Project'),
            'search_items' => __('Search Projects', 'Project'),
            'not_found' => __('No Project found', 'Project'),
            'not_found_in_trash' => __('No Projects found in Trash', 'Project')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}