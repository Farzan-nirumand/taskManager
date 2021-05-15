<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'func_activate_plugin' ) ){

    function  func_activate_plugin(){

        global $wpdb;
    
        $charset_collate = "";
    
        if ( !empty( $wpdb->charset ) )
            $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} ";
    
        if ( !empty( $wpdb->collate ) )
            $charset_collate .= "COLLATE {$wpdb->collate}";
    
        $create_table_SQL = "CREATE TABLE `" . $wpdb->prefix . "mytable` (
                        `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
                        `title` VARCHAR(20),
                        `description` VARCHAR(20) ,
                        `deadline` VARCHAR(20) ,
                         PRIMARY KEY (`id`)
                    ) $charset_collate ENGINE=InnoDB ;";
    
        require( ABSPATH . "/wp-admin/includes/upgrade.php" );
        dbDelta( $create_table_SQL );
    }

}