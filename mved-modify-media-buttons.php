<?php
// Customize extra components for the `hidden` third toolbar

function mved_modify_visual_editor_ExtendButtonSet($buttons){

$buttons[] = 'fontselect';
$buttons[] = 'fontsizeselect';
$buttons[] = 'styleselect';
$buttons[] = 'backcolor';
$buttons[] = 'newdocument';
$buttons[] = 'cut';
$buttons[] = 'copy';
$buttons[] = 'charmap';
$buttons[] = 'hr';
$buttons[] = 'visualaid';
//$buttons[] = 'del';
//$buttons[] = 'sub';
//$buttons[] = 'sup';
//$buttons[] = 'cleanup';

return $buttons;
}

add_filter('mce_buttons_3', 'mved_modify_visual_editor_ExtendButtonSet', 12, 15);

add_filter( 'tiny_mce_before_init', 'mved_modify_visual_editor_ExtendTinyMCE' );
function mved_modify_visual_editor_ExtendTinyMCE( $in ) {

$in['wordpress_adv_hidden'] = FALSE;

return $in;
}
?>
