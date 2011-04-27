<?php

/*
Plugin Name: Google 404
Plugin URI: http://wordpress.org/extend/plugins/google-404/
Description: Adds a Google 404 widget to your missing 'page not found' pages.
Author: Ben Huson
Version: 1.0.2
Author URI: http://www.benhuson.co.uk/
*/

class Google404 {

	var $langs = array(
		'ar'    => 'Arabic',
		'bg'    => 'Bulgarian',
		'ca'    => 'Catalan',
		'zh-CN' => 'Chinese (China)',
		'zh-TW' => 'Chinese (Taiwan)',
		'hr'    => 'Croatian',
		'cz'    => 'Czech',
		'da'    => 'Danish',
		'nl'    => 'Dutch',
		'en'    => 'English',
		'en-GB' => 'English (United Kingdom)',
		'fi'    => 'Finnish',
		'fr'    => 'French',
		'de'    => 'German',
		'el'    => 'Greek',
		'iw'    => 'Hebrew',
		'hi'    => 'Hindi',
		'hu'    => 'Hungarian',
		'in'    => 'Indonesian',
		'it'    => 'Italian',
		'ja'    => 'Japanese',
		'ko'    => 'Korean',
		'lv'    => 'Latvian',
		'lt'    => 'Lithuanian',
		'no'    => 'Norwegian',
		'pl'    => 'Polish',
		'pt-BR' => 'Portuguese (Brazil)',
		'pt-PT' => 'Portuguese (Portugal)',
		'ro'    => 'Romanian',
		'ru'    => 'Russian',
		'sr'    => 'Serbian',
		'sk'    => 'Slovak',
		'sl'    => 'Slovenian',
		'es'    => 'Spanish',
		'sv'    => 'Swedish',
		'fil'   => 'Tagalog',
		'th'    => 'Thai',
		'tr'    => 'Turkish',
		'uk'    => 'Ukrainian',
		'vi'    => 'Vietnamese'
	);
	
	function google_output() {
	
		$output = '<style type="text/css">
			#goog-wm .other-things { }
			#goog-wm ul, #goog-wm ul li { list-style:none; display:block; padding:0px; margin:0px; }
			#goog-wm ul { margin:1em 0; }
			</style>';
		$output .= '<script type="text/javascript">
			var GOOG_FIXURL_LANG = \'' . $this->get_language() . '\';
			var GOOG_FIXURL_SITE = \'' . get_bloginfo( 'url' ) . '\';
			</script>';
		$output .= '<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>';
		
		return $output;
	}
	
	function get_language() {
		$wp_lang = get_bloginfo( 'language' );
		if ( array_key_exists( $wp_lang, $this->langs ) ) {
			return $wp_lang;
		}
		return 'en';
	}
	
}

$Google404 = new Google404();

function google404() {
	global $Google404;
	echo $Google404->google_output();
}

?>