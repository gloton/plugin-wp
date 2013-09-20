<?php
/*
 Plugin Name: Simple Dashboard widget
Plugin URI: http://www.nsclick.cl
Description: Agregaremos un Widget a nuestro Dashboard
Author: Jorge Gatica
Version: 1.0
Author URI: http://www.nsclick.cl/
*/

function simple_dashboard_widget() {
?>

<h2>Acceso a la Web</h2>
<p>Bienvenidos al curso de creacion de plugins en Wordpress</p>
<p><a href="http://www.nsclick.cl">Este enlace te lleva a otro curso</a></p>
<?php
}

function sdbw_register_widget() {
#parametro 1
# es el id del widget
#parametro 2 
# Es el nombre del widget
#parametro 3
# llamada a la funcion que mostrara el widget en el backend
wp_add_dashboard_widget('simple-dashboar-widget', 'Simple Dashboard Widget', 'simple_dashboard_widget');
}
add_action('wp_dashboard_setup', 'sdbw_register_widget');
?>