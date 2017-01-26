# Modify Visual Editor
Plugin modifies the use of the Visual Editor, rich editor.

Contributors:  
Donate link: http://tradesouthwest.com/paystation.php/
Tags: visual editor, disable visual editor, tinymce, disable tinymce
Requires at least: 4.0
Tested up to: 4.7.1
Stable tag: 0.1.0
License: Compatible with the GNU General Public License v2 or higher


This plugin disables the visual editor for all users across the whole site. You could also remove the wp-includes/js/tinymce/ directory but that is not prudent. This plugin actually leaves the editor in place for posts and pages as well as custom posts types. Very handy for developers who do not want other users changing HTML text. Plugin, on deactvation, will update usermeta and reset the database ( $prefix_usermeta ) back to 'true for meta_value 'rich_edting' and clears options so plugin will not linger after uninstall.

== Description ==

This plugin disables the visual editor drastically at any user login state. But if a user checks the box to enable visual editor, in the Profile page, the setting will be saved so they may edit with Visual Editor yet, will always return to disabled when they log back in. This is done for version 0.1.0 as an experiment to see how well users can accept the fact that visual Editor is a dangerous thing in the hands of non-experienced HTML writers. 


== Installation ==

1. Download the zipped file.
2. Upload the file to your `/wp-contents/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= I see a dropdown for user roles but it does not work =
This current version is cut and dry. No options other than turn on or off. The option is left so that developers can have the asset to follow through with. I did not feel comfortable using `user_can` levels. I hope to add when WP_User settles down and the caps and roles are stable for using in  plugins. 

= Can I add features? =

Yes, please contribute and fork from Github or ask on WordPress plugin page for support. This is Open Source.

= What is the "hidden editor bar?" =

WordPress removed a lot of components from the latest versions to make way for more room on the page. With MVEd you can open up these hidden elements to use, which will show just below the two active menu bars of the Visual Editor. 

    Font Family, Font Sizes, Formats (dropdown), Background Color (Hightlighter), New Document
    Cut, Copy, Special Characters, Horizontal Line
    
There are a few more that are commented out in the mved-modify-media-buttons file.



// Have a Wonderful Time \\
