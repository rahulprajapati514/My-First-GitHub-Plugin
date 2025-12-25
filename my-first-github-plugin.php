<?php
/**
 * Plugin Name: My First GitHub Plugin
 * Plugin URI: https://github.com/yourusername/my-first-github-plugin
 * Description: Simple plugin to learn GitHub
 * Version: 1.0.0
 * Author: Your Name
 */

defined('ABSPATH') || exit;

// Add admin notice
add_action('admin_notices', function () {
    echo '<div class="notice notice-success"><p>GitHub Plugin Active!</p></div>';
});

// Add admin menu
add_action('admin_menu', function () {
    add_menu_page(
        'My Plugin',
        'My Plugin',
        'manage_options',
        'my-plugin',
        'my_plugin_page'
    );
});

function my_plugin_page() {
    echo '<h1>Hello from plugin page</h1>';
}

