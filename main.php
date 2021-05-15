<?php
/* 
Plugin Name: پلاگین مدیریت وظایف 
Description:در این پلاگین امکان ثبت ، ویرایش و حذف وظایف آماده شده است
Author: Farzan Niruomand
Version: 1.0.0.
Author URI: farzan_nirumand@yahoo.com
telegram :@Farzan_nirumand
*/
if (!defined('ABSPATH')) exit;

define('PLUGIN_DIRHW4',plugin_dir_path(__FILE__));
define('PLUGIN_INCHW4',PLUGIN_DIRHW4 . '/inc/');
define('PLUGIN_TMPHW4',PLUGIN_DIRHW4 . '/tmp/');


if (is_admin())
{
    include PLUGIN_INCHW4 . 'admin/menu.php';

}


include('includes/activate.php');

register_activation_hook(__FILE__, 'func_activate_plugin');
