<?php
require ('inc/class-wp-bootstrap-navwalker.php');
// Register for navigation menu
wp_enqueue_style( 'MyStyle', get_template_directory_uri().'/style.css' );    

register_nav_menus(
	array(
		'primary'	=>__('Primary Menu', 'websiteku'),
		)
	);

add_action('wp_head', 'MyAssets');
function MyAssets(){
	?>
		<link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Viga&display=swap" rel="stylesheet"> 
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap-grid.min.css" rel="stylesheet" />
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap-reboot.min.css" rel="stylesheet" />	
		<ling href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
	<?php
}

add_action('wp_enqueue_scripts', 'getScript');
function getScript(){
	wp_register_script('jquery-3.5.1', get_stylesheet_directory_uri().'/assets/js/jquery.min.js', FALSE, NULL, 'all');
	wp_register_script('popper-1.16.0', get_stylesheet_directory_uri().'/assets/js/popper-1.16.0.min.js', FALSE, NULL, 'all');
	wp_register_script('bootstrap.min.js', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', FALSE, NULL, 'all');
	wp_register_script('Obj', get_stylesheet_directory_uri().'/assets/js/Obj.js', FALSE, NULL, 'all');
	wp_register_script('MyScript', get_stylesheet_directory_uri().'/assets/js/MyScript.js', FALSE, NULL, 'all');
	wp_register_script('MyJs', get_stylesheet_directory_uri().'/assets/js/MyJs.js', FALSE, NULL, 'all');

	wp_enqueue_script('jquery-3.5.1');
	wp_enqueue_script('popper-1.16.0');
	wp_enqueue_script('bootstrap.min.js');
	wp_enqueue_script('Obj');
	wp_enqueue_script('MyScript');
	wp_enqueue_script('MyJs');
}

add_action('wp_footer', 'MyVue');
function MyVue(){
	?>
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
	<?php
}