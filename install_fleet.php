<?php

global $vehicle_db_version;
global $manufacturer_db_version;
$vehicle_db_version = '0.1';
$manufacturer_db_version = '0.1';

function vehicle_install() {
	global $wpdb;
	global $vehicle_db_version;

	$table_name = $wpdb->prefix . 'sz_vehicles';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		descr text NOT NULL,
		manufact INT NOT NULL,
		mincrew INT(3) NOT NULL,
		maxcrew INT(3) NOT NULL,
		captain INT(5) NOT NULL,
		role INT(2) NOT NULL,
		location INT(3) NOT NULL,
		url varchar(55) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'vehicle_db_version', $vehicle_db_version );
}

function manufacturer_install() {
	global $wpdb;
	global $manufacturer_db_version;

	$table_name = $wpdb->prefix . 'sz_manufacturers';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		lore text NOT NULL,
		url varchar(55) DEFAULT '' NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'manufacturer_db_version', $manufacturer_db_version );
}