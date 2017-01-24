# modify-visual-editor
plugin modifies the WordPress visual editor

Contributors: 

Donate link: http://tradesouthwest.com/paystation.php/

Tags: visual editor, disable visual editor, tinymce, disable tinymce

Requires at least: 0.1.0

Tested up to: 0.1.0

Stable tag: 0.1.0


This plugin disables the visual editor for all users across the whole site. You could also remove the wp-includes/js/tinymce/ directory. This actually leaves the editor in place for posts and pages as well as custom posts types. Very handy for developers who do not want other users changing HTML text. Plugin can reset the database ( prefix_wp_usermeta ) back to 'true for meta_value 'rich_edting' and clears options so plugin will not linger after uninstall.

== Description ==

This plugin disables the visual editor drastically at any user login state. But if a user checks the box to enable visual editor, in the Profile page, the setting will be saved so they may edit with Visual Editor yet, will always return to disabled when they log back in. This is done for version 1.0 as an experiment to see how well users can accept the fact that visual Editor is a dangerous thing in the hands of non-experienced HTML writers. 


== Installation ==

1. Download the zipped file.
2. Upload the file to your `/wp-contents/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= I only see one option =

This current version is cut and dry. No options other than turn on or off.
for example, the user_can levels are not active and I hope to add very soon.

= Can you add features? =

Yes, please contribute from Github or ask on WordPress plugin page for support



