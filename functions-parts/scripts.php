<?php 
	$WP_LOAD = $_SERVER['DOCUMENT_ROOT'].'/wp-load.php';
	require_once($WP_LOAD);


	if(!function_exists("style_scripts")) {
		function style_scripts() {
			wp_enqueue_style( 'cloud_miners-style', get_stylesheet_uri(), array(), _S_VERSION );

            wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/styles/main.css', array(), _S_VERSION );

		}
	}
	if(!function_exists("lib_scripts")) {
		function lib_scripts() {


			wp_enqueue_script( 'cloud_miners-swiper', get_template_directory_uri() . '/libs/swiper/js/swiper.min.js', null, 1.0, true );

		}
	}
	if(!function_exists("core_scripts")) {
		function core_scripts() {

			wp_enqueue_script( 'cloud_miners-main', get_template_directory_uri() . '/dist/js/main.js', null, 1.0, true );
		}

	}

//	if(!function_exists("module_scripts")) {
//	    function module_scripts() {
//
//	        while ( have_rows('page_builder') ) : the_row();
//	            if (get_row_layout() == 'module_name_1') {
//	                wp_enqueue_script( 'script_name_1', get_template_directory_uri() . '/dist/js/modules/script_name_1', null, 1.0, true );
//	            }
//	            elseif( get_row_layout() == 'module_name_2' ) {
//	                wp_enqueue_script( 'script_name_2', get_template_directory_uri() . '/dist/js/modules/script_name_2', null, 1.0, true );
//	            }
//	        endwhile;
//
//	    }
//	}
	if(!function_exists("post_scripts")) {
		function post_scripts() {
			if (is_single()) {
				
				wp_enqueue_script( 'script_name_3', get_template_directory_uri() . '/src/js/helper/comment.js', '', 1.0, true );
			}
		}
	}

    if (!function_exists("jquery_scripts")) {
        function jquery_scripts() {
            wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js');
        }
    }

    if (!function_exists("fonts_scripts")) {
        function fonts_scripts() {
//            wp_enqueue_style('preconnect', 'https://fonts.gstatic.com');
//            wp_enqueue_style('preconnect-2', 'https://fonts.googleapis.com');
            wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Commissioner:wght@100;200;300;400;500;600;700;800;900&display=swap');
        }
    }

    //enqueue jquery
    add_action('wp_enqueue_scripts', 'jquery_scripts');

	add_action( 'wp_enqueue_scripts', 'style_scripts' );
	add_action( 'wp_enqueue_scripts', 'lib_scripts' );
//	add_action( 'wp_enqueue_scripts', 'module_scripts' );
	add_action( 'wp_enqueue_scripts', 'post_scripts');
	add_action( 'wp_enqueue_scripts', 'core_scripts' );
    add_action( 'wp_enqueue_scripts', 'fonts_scripts' );

 ?>