<?php
/*
Plugin Name: Activacion Plugin
Plugin URI: http://www.nsclick.cl
Description: Este plugin hara algo excepcional cuando lo actives
Author: Jorge Gatica
Version: 1.0
Author URI: http://www.nsclick.cl/
*/
function my_plugin_activate() {
	//Esta funcion hara X
	error_log("Has activado mi plugin ". __FILE__);
}

register_activation_hook(__FILE__, "my_plugin_activate");

function my_plugin_desactivate() {
	error_log("Has desactivado mi plugin");
}
register_deactivation_hook(__FILE__, "my_plugin_desactivate");