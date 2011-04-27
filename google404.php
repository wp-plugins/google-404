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
	
}

function google404() {

	echo '<style type="text/css">
		#goog-wm .other-things { }
		#goog-wm ul, #goog-wm ul li { list-style:none; display:block; padding:0px; margin:0px; }
		#goog-wm ul { margin:1em 0; }
		</style>';
	echo '<script type="text/javascript">
		var GOOG_FIXURL_LANG = "en_GB";
		var GOOG_FIXURL_SITE = "' . get_bloginfo( 'url' ) . '";
		</script>';
	echo '<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>';

}

?>