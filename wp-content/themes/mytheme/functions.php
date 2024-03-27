<?php 
register_nav_menus(
    array(
        'primary-menu' => 'Top Menu'
    )
);

add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_post_type_support('page', 'excerpt');

register_sidebar( 
    array(
        'name' => 'Sidebar location',
        'id' => 'sidebar'
    )
);

// Add custom post type
function add_custom_post_type() {
    register_post_type('features',
        array(
            'labels' => array(
                'name' => __('Features', 'textdomain'), // Plural name
                'singular_name' => __('Feature', 'textdomain'), // Singular name
                'all_items' => __('All Features', 'textdomain'), // Label for all items view
                'add_new' => _x('Add Feature', 'Features', 'textdomain'), // Label for adding new item
                'add_new_item' => __('Add New Feature', 'textdomain'), // Label for adding new item
            ),
            'public' => true, // Accessible publicly
            'has_archive' => true, // Has archive page
            'menu_icon' => 'dashicons-admin-generic', // Menu icon
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments'), // Now supports comments
        )
    );
}
add_action('init', 'add_custom_post_type');


function add_custom_taxonomies() {
    // Add new "Feature Types" taxonomy to "features"
    register_taxonomy('feature-types', 'features', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x('Feature Types', 'taxonomy general name', 'textdomain'),
            'singular_name' => _x('Feature Type', 'taxonomy singular name', 'textdomain'),
            'menu_name' => __('Feature Types', 'textdomain'),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'feature-types',
            'with_front' => false, 
            'hierarchical' => true 
        ),
    ));
}

add_action('init', 'add_custom_taxonomies', 0);
?>
