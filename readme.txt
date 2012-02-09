=== Plugin Name ===
Contributors: GeekLad
Donate link: http://geeklad.com/projects/wordpress-plugins
Tags: adsense, analytics, Google AdSense, Google Analytics
Requires at least: 1.0
Tested up to: 3.3.1
Stable tag: 1.0

Prevent Google AdSense ads from being displayed and remove Google Analytics, while you are logged into your WordPress blog.

== Description ==

Are you sick of generating unwanted Google Adsense and Google Analytics impressions?  Just install this simple plugin.  When you're logged into your WordPress blog, the plugin will [prevent AdSense ads from displaying](http://geeklad.com/wordpress-plugin-to-remove-google-adsense-and-google-analytics "Prevent Google AdSense and Google Analytics from Displaying in WordPress") and the Analytics tracking code is removed as well.

**Features**

* Plugin only affects the display of pages when users are logged into WordPress
* AdSense ads are not displayed, preventing blog users from generating ad impressions when viewing blog pages
* AdSense ads are replaced with placeholders with the proper dimensions
* Google Analytics code is removed, preventing you from generating statistics
* Plugin should work whether AdSense and Analytics are loaded via plugins or with the WordPress template
* Given the simplicity of the plugin and its purpose, there are no plugin options

== Installation ==

1. Upload 'google-script-remover.php' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it!  When you are logged in and view your blog pages, AdSense and Analytics are not loaded

== Frequently Asked Questions ==

= I use plugin XYZ to load Adsense/Google Analytics.  Will your plugin work for me? =

Yes!  The plugin works by searching the entire contents of each page generated for Google AdSense and Google Analytics.  It doesn't matter whether you do this with plugins or with your template, the plugin should still work.

= Why aren't there any options? =

The purpose of the plugin is quite simple: prevent Adsense and Analytics from being loaded when you're working on your own blog.  There's really no reason to make it more complicated with options.  Perhaps in a future release I may add options to adjust the colors for the placeholders, but that's the only option that comes to mind.

== Screenshots ==

1. Here is an example of what the advertisement placeholders look like.

== Changelog ==

= 1.0.0 =
* Initial release
