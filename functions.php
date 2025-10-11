<?php
/**
 * Sports Cram Theme Functions
 */

// Theme setup
function sportscram_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'sportscram_setup');

// Enqueue styles and scripts
function sportscram_scripts() {
    wp_enqueue_style('sportscram-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue jQuery (WordPress includes it by default, but we can ensure it's loaded)
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'sportscram_scripts');

// Customize excerpt length
function sportscram_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'sportscram_excerpt_length');

// Customize excerpt more text
function sportscram_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'sportscram_excerpt_more');

// Add custom post type for articles (optional)
function sportscram_custom_post_types() {
    register_post_type('article', array(
        'labels' => array(
            'name' => 'Articles',
            'singular_name' => 'Article',
            'add_new' => 'Add New Article',
            'add_new_item' => 'Add New Article',
            'edit_item' => 'Edit Article',
            'new_item' => 'New Article',
            'view_item' => 'View Article',
            'search_items' => 'Search Articles',
            'not_found' => 'No articles found',
            'not_found_in_trash' => 'No articles found in trash',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-edit',
    ));
}
add_action('init', 'sportscram_custom_post_types');

// Customize admin menu
function sportscram_admin_menu() {
    // Remove unnecessary menu items
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'sportscram_admin_menu');

// Add custom fields for article metadata (optional)
function sportscram_add_meta_boxes() {
    add_meta_box(
        'article_meta',
        'Article Information',
        'sportscram_article_meta_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'sportscram_add_meta_boxes');

function sportscram_article_meta_callback($post) {
    wp_nonce_field('sportscram_article_meta', 'sportscram_article_meta_nonce');
    $value = get_post_meta($post->ID, '_article_date', true);
    echo '<label for="article_date">Article Date:</label>';
    echo '<input type="date" id="article_date" name="article_date" value="' . esc_attr($value) . '" />';
}

function sportscram_save_article_meta($post_id) {
    if (!isset($_POST['sportscram_article_meta_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['sportscram_article_meta_nonce'], 'sportscram_article_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['article_date'])) {
        update_post_meta($post_id, '_article_date', sanitize_text_field($_POST['article_date']));
    }
}
add_action('save_post', 'sportscram_save_article_meta');
?>
