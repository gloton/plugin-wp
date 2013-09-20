<?php
/* 
Plugin Name: Simple Widget
Plugin URI: http://www.nsclick.cl
Description: Plugin Widget Awesome, vamos a crear una interfaz basica de un widget-http://codex.wordpress.org/es:API_de_Widget
Version: 1.0
Author: Jorge Gatica
Author URI: http://www.nsclick.cl
*/
class SimpleWidget extends WP_Widget {
	#SimpleWidget
	# Es lo que aparecera en Widgets disponibles
	function SimpleWidget () {
		$widget_options = array(
				#classname
				# este clase es lo unico que sera reflejada en el frontend
				'classname' => 'simple-widget',
				#description
				# esta es la descripcion que aparecera en el backend(Widgets disponibles)
				'description' => 'Un simple Widget de jorge'
		);
		
		#parametro 1
		# es parte del id que aparece en backend(Widgets disponibles)
		#parametro 2
		# Es el Nombre que aparecera como titulo
		#parametro 3
		# Son las opciones de widget
		//simple_widget vera reflejado en la funcion form
		parent::WP_Widget('simple_widget', 'Simple Widget', $widget_options);
	}
	
	#$instance
	# esta pertenecen al formulario de personalizacion del widget
	# el cual sera definido en la funcion form
	//lo que se mostrara en el frontend
	function widget($args, $instance) {
			/*
			Array
			(
			    [name] => Zona principal de Widgets
			    [id] => sidebar-1
			    [description] => Aparece en la sección de pie de página del sitio.
			    [class] => 
			    [before_widget] => <aside id="simple_widget-2" class="widget simple-widget">
			    [after_widget] => </aside>
			    [before_title] => <h3 class="widget-title">
			    [after_title] => </h3>
			    [widget_id] => simple_widget-2
			    [widget_name] => Simple Widget
			)
		 */

		/*
		Array
		(
		    [title] => Otro titulo
		    [body] => <strong>el cuerpo del mensaje</strong>
		)		
		*/
		#$args
		# seran los argumentos del tema.
		extract($args, EXTR_SKIP);
		$title = ($instance['title']) ? ($instance['title']) : 'Un Widget cualquiera';
		$body = ($instance['body']) ? ($instance['body']) : 'texto de prueba';
		?>
		<?php 
			//esto me mostrara los argumentos y podre acceder a ellos como variables locales
			//gracias a la funcion extract
			echo $before_widget; 
		?>
		<?php echo $before_title . $title . $after_title; ?>
		<p class="contenidowidget"><?php echo $body; ?></p>
		
<?php 
	}

	//este es el formulario que aparecera en el backend
	function form($instance) {
		#$instance
		# estara disponible solo apartir del momento en que agregue algun dato a este formulario
		echo "<pre>fff";
		print_r($instance);
		echo "</pre>";
?>
		<label for="aaa<?php echo $this->get_field_id('title')?>bbb">Title:</label>
		<input  id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo esc_attr($instance['title'])?>"/>
		<label for="<?php echo $this->get_field_id('body')?>">body:</label>
		<textarea  id="<?php echo $this->get_field_id('body')?>" name="<?php echo $this->get_field_name('body')?>"><?php echo esc_attr($instance['body'])?></textarea>
<?php 		
	}
}
/* INICIO REGISTRAR WIDGET*/
function simple_widget_init() {
	//llama a la funcion register_widget del archivo wp-includes/widgets.php
	register_widget("SimpleWidget");
}

//para que aparezca este widget en el entorno de worpress hay que registralo con la accion widgets_init
add_action('widgets_init', 'simple_widget_init');
/* FIN REGISTRAR WIDGET*/
?>
