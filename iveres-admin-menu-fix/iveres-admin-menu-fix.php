<?php

/*
 * Plugin Name: iVeres Admin Menu Fix
 * Plugin URI: http://ivan-veres.com/tools/admin-fix
 * Description: Fixes left menu in admin area
 * Author: Ivan Veres
 * Version: 0.2
 * Author URI: http://ivan-veres.com
 * License: GPL2+
 */

function iveresAdminMenuFix()
{
    wp_register_style('iveresAdminMenuFix', plugins_url('css/admin-menu-fix.css', __FILE__), false, 15092015, 'screen');
    wp_enqueue_style('iveresAdminMenuFix');
}

add_action ('admin_enqueue_scripts', 'iveresAdminMenuFix');

