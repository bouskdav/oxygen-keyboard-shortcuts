<?php
/*
Plugin Name:	Oxygen Keyboard Shortcuts
Plugin URI:		https://mzdynamic.com
Description:	Use Ctrl + Alt + another key as shortcuts within Oxygen.
Version:		1.0.0
Author:			Max Zimmer
Author URI:		https://mzdynamic.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'oxygen_enqueue_ui_scripts', 'oxygen_keyboard_shortcuts' );

function oxygen_keyboard_shortcuts() {
	if ( defined( 'SHOW_CT_BUILDER' ) ) {
		wp_enqueue_script( 'ctrl-s-save-oxygen', plugin_dir_url( __FILE__ ) . 'main.js', array( 'jquery' ), '1.0.0', true );
	}
}
