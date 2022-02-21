<?php
require get_template_directory() . '/bootstrap-navwalker.php';
add_theme_support('post-thumbnails');
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function d($date){
	if(date("Y-m-d")==date("Y-m-d", strtotime($date))){
		echo "<span style='font-weight:bold;color:green;font-family:tahoma'>اليوم في  ";
		echo date("H:i:s", strtotime($date));
		echo"</span>";
	}else{
		echo "<span style='color:orange'>".$date."</span>";
	}
}