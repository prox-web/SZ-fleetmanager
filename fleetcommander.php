<?php
/**
 *	Plugin Name: Star Citizen fleet commander alpha
 *  Author: Prox-Web
 *  Licence: GNU GPLv3
 *  Version: In Development
 * Description: The plugin for Wordpress to help organize you fleet, commodities, members and much more
 *
 */

/**
 * Checking Database and making sure everything is up te date
 */
include_once ('install_fleet.php');
register_activation_hook( __FILE__, 'vehicle_install' );



/** Starting the options configurator for the plugin */
add_action( 'admin_menu', 'my_fleet_menu' );

/** Adding menu to settings */
function my_fleet_menu() {
	add_options_page( 'Prox Web Star Citizen Fleet Commander', 'Fleetcommander', 'manage_options', 'my_fleet_plugin_config', 'my_fleet_plugin_options' );
}

/** The settings themselfs */
function my_fleet_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

/** Main Menu for Fleet Operations */

//add_action();

