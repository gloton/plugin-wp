<?php
/*
Plugin Name: El maravilloso plugin de Jorge
Plugin URI: http://www.nsclick.cl
Description: Este plugin puede ser fantastico
Author: Jorge Gatica
Version: 1.0
Author URI: http://www.nsclick.cl/
 */
global $wp_version;
#version_compare
# esta es una funcion predefinida que permite comparar las versiones
if (!version_compare($wp_version, "3,0",">=")) {
	die("Necesitas una version posterior para este plugin");
}
?>