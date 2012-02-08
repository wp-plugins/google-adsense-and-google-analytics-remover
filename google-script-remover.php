<?php
/*
Plugin Name: Google AdSense and Google Analytics Remover
Plugin URI: http://geeklad.com/wordpress-plugin-to-remove-google-adsense-and-google-analytics
Description: Are you generating unwanted Google AdSense and Google Analytics impressions when working with your blog?  The Google AdSense and Google Analytics Remover will disable them when users are logged into WordPress.  It doesn't matter if you use plugins to display them or you've modified your template.
Version: 1.0.0
Author: GeekLad
Author URI: http://geeklad.com/
License: GPLv2 or later
*/

function google_script_remover_callback($buffer) {
	// If we're logged out, modify the buffer to remove the AdSense and Analytics code
	if (is_user_logged_in()) {
		// First, remove Google AdSense code and replace with placeholders of the same dimensions
		$buffer = preg_replace("/<script(?:(?!<\/script>|google_ad_client)[\s\S])+google_ad_client(?:(?!google_ad_width)[\s\S])+google_ad_width\s*=\s*([\d]+)(?:(?!google_ad_height)[\s\S])+google_ad_height\s*=\s*([\d]+)(?:(?!<\/script>)[\s\S])+<\/script>/i", "<div class=\"google_script_remover_adsense_placeholder\" style=\"border: 0; position: relative; padding: 0; margin: 0; width: $1px; height: $2px; background-color: gray; color: black; line-height: $2px; text-align: center;  font-size: 16px; overflow: hidden;\">$1x$2 Ad</div>", $buffer);

		// Next, remove the show_ads.js script references
		$buffer = preg_replace("/<script(?:(?!<\/script>|googlesyndication\.com\/pagead\/show_ads\.js)[\s\S])+googlesyndication\.com\/pagead\/show_ads\.js(?:(?!<\/script>)[\s\S])+<\/script>/i", "", $buffer);		// Remove the show_ads.js script reference as well

		// Finally, remove the analytics code
		$buffer = preg_replace("/<script(?:(?!<\/script>|_gaq)[\s\S])+_gaq(?:(?!<\/script>)[\s\S])+<\/script>/i", "", $buffer);				// Remove Google Analytics code
	}
	return $buffer;
}

// Callbacks for the head/footer hooks 
function google_script_remover_buffer_start() { ob_start("google_script_remover_callback"); }
function google_script_remover_buffer_end() { ob_end_flush(); }
 
// Set the hooks to the highest priority, so that we catch any plugins that may add in AdSense or Analytics
add_action('wp_head', 'google_script_remover_buffer_start', 0);
add_action('wp_footer', 'google_script_remover_buffer_end', 0);
