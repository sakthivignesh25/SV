<?php
/**
 * Plugin Name: My Admin Panel
 * Description: Custom Admin Panel for Product Management
 * Version: 1.0
 * Author: Sakthi
 */

add_action('admin_menu', 'custom_admin_menu');

function custom_admin_menu() {
    add_menu_page('Custom Admin Panel', 'Admin Panel', 'manage_options', 'custom-admin', 'custom_admin_page');
}

function custom_admin_page() {
    if ($_POST['admin_password'] === 'Sakthi') {
        echo '<h2>Welcome Admin!</h2>';
        // Add form for product entry here
    } else {
        echo '<form method="post">
                <label>Password:</label>
                <input type="password" name="admin_password">
                <button type="submit">Login</button>
              </form>';
    }
}
?>
