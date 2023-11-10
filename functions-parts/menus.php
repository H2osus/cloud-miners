<?php 

	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header', 'cloud_miners' ),
			'footer-menu' => esc_html__( 'Footer', 'cloud_miners' )
		)
	);

	//External method for menus link 

	function additional_class($classes, $item, $args) {

	    if (isset($args->link_class)) {
	        $classes['class'] = $args->link_class;
	    }
	    if ( in_array('current_page_item', $item->classes) ) {
	        $classes['class'] .= ' active';
	    }

	    return $classes;
	}
 
  
	function wpml_floating_language_switcher($items) { 
		return $items .= do_shortcode('[wpml_language_switcher]');
	}



	add_filter('nav_menu_link_attributes', 'additional_class', 1, 3);
	add_filter('wp_nav_menu_items', 'wpml_floating_language_switcher', 9, 5);



 ?>