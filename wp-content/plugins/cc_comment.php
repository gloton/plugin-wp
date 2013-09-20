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

function cccomm_option_page() {
?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2>Plugin CC Comment</h2>
		<p>Bienvenido al plugin CC Comment</p>
	</div>
<?php 
}
function cccom_plugin_menu() {
	#parametro 1
	# titulo de la pagina (tipo title)
	#parametro 2
	# Nombre del item de menu
	#parametro 3
	# tiene que ver con los roles y capacidades http://codex.wordpress.org/Roles_and_Capabilities#manage_options
	#parametro 4
	# Ira en la url
	//esto va a registrar el elemento con el menu de administrador
	#parametro 5
	# llama a la funcion que genera la pagina
	add_options_page('CC Comment Settings', 'CC Comments', 'manage_options', 'cc-comments','cccomm_option_page');
}

add_action('admin_menu', 'cccom_plugin_menu');
?>