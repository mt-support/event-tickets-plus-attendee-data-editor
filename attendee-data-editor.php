<?php
/**
 * Plugin Name:       Event Tickets Plus Extension: Attendee Data Editor
 * Description:       Provides facilities to edit submitted custom attendee data.
 * Version:           1.3.0
 * Extension Class:   Tribe__Extension__Attendee_Data_Editor
 * Author:            Modern Tribe, Inc.
 * Author URI:        http://m.tri.be/1971
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: mt-support/event-tickets-plus-attendee-data-editor
 *
 *     Attendee Data Editor is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 2 of the License, or
 *     any later version.
 *
 *     Attendee Data Editor is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *     GNU General Public License for more details.
 */

/**
 * Provides access to the Attendee Data Editor object.
 *
 * @return Tribe__Tickets__Attendee_Data_Editor__Main
 */
function tribe_attendee_data_editor() {
	static $main;

	if ( empty( $main ) ) {
		Tribe__Autoloader::instance()->register_prefixes( array(
			'Tribe__Tickets__Attendee_Data_Editor__' => __DIR__ . DIRECTORY_SEPARATOR . 'src'
		) );

		$main = new Tribe__Tickets__Attendee_Data_Editor__Main( plugin_dir_url( __FILE__ ) );
	}

	return $main;
}

add_action( 'tribe_tickets_plugin_loaded', 'tribe_attendee_data_editor', 20 );