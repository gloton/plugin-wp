<?php
/*
 Plugin Name: cc_comment
Plugin URI: http://www.nsclick.cl
Description: Este plugin enviara un mail
Author: Jorge Gatica
Version: 1.0
Author URI: http://www.nsclick.cl/
*/

function cc_comment() {
	global $_REQUEST;
	
	$to = "jgatica@yahoo.com";
	$subject = "Nuevo comentario en el blog" . $_REQUEST["subject"];
	//$mensaje = "Mensaje de: " . $_POST["author"] . " por email " . $_POST["email"] . "\n " . $_POST["comment"];
	$mensaje = "Mensaje de: " . $_REQUEST["author"] . " por email " . $_REQUEST["email"] . "\n " . $_REQUEST["comment"];
	//$mensaje = print_r($_REQUEST);
	wp_mail($to, $subject, $mensaje);

}

add_action("comment_post", "cc_comment");