=== Plugin Name ===
Contributors: Dianakc
Donate link: 
Tags: smilies, wordpress, emoticons
Requires at least: 3.0
Tested up to: 3.9
Stable tag: trunk

Let users insert WordPress smilies when commenting in you site.

== Description ==

Very simple pluing, no configs, no screens, just action!
Simple Smilies add all WordPress smillies in comments form and a simple javascript let users click them to insert.
This is a very light plugin, the javascript only loads when in singular/single contexts, also there is no stylesheets.


== Installation ==

1. Upload the `simples-smilies` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Visit your site and see the smilies right up in the comment form!

== Frequently Asked Questions ==
= How to display the smilies? =
Just activate the plugin and will works automatically. You can manually insert by placing `<?php if(function_exists('call_smilies')) { call_smilies(); } ;?>`
near the textarea field in your theme `comments.php` file.

= My theme does not shows any smilies next to comment form =
Some themes create a comment.php file and add every field. Ins this case, you can add `<?php if(function_exists('call_smilies')) { call_smilies(); } ;?>`
right after the comment textarea field.

= How to use new smilies? =
Backup and replace WordPress smilies at `wp-include/images/smilies` with the ones within the plugin pack.
Because this is avery simple plugin, I do not intend to make this available through plugin panels.

= How to style the smilies area? =
If you need to fine tune something, there is only one CSS id for that: `#wp_emoticons`, just append this into yousr `style.css` file.

== Changelog ==

= 1.0 =
* Initial release
