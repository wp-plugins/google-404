<?php



/*
Plugin Name: Google 404
Plugin URI: http://wordpress.org/extend/plugins/google-404/
Description: Adds a Google 404 widget to your missing 'page not found' pages.
Author: Ben Huson
Version: 1.0.1
Author URI: http://www.benhuson.co.uk/
*/



function google404()
{

	echo '<style type="text/css">
		#goog-wm { }
		#goog-wm h3.closest-match { }
		#goog-wm h3.closest-match a { }
		#goog-wm h3.other-things { }
		#goog-wm ul li { }
		#goog-wm li.search-goog { display: block; }
		</style>';
	echo '<script type="text/javascript">
		var GOOG_FIXURL_LANG = "en_GB";
		var GOOG_FIXURL_SITE = "' . get_bloginfo('url') . '";
		</script>';
	echo '<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>';

}



?>