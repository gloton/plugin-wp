<?php
/*
 Plugin Name: Copyright plugin
Plugin URI: http://www.nsclick.cl
Description: Contiene informacion del Copyright
Author: Jorge Gatica
Version: 1.0
Author URI: http://www.nsclick.cl/
*/
function add_copyright () {
	echo "Este es el copyright de nsclick &copy; ".date("Y");
}