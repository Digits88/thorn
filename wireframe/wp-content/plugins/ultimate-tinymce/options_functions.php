<?php

// Finally, our custom functions for how we want the options to work.
// Functions for Row 3
function tinymce_add_button_fontselect($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_fontselect = isset($options['jwl_fontselect_field_id']); 
if ($jwl_fontselect == "1") $buttons[] = 'fontselect'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_fontselect_dropdown']['row'])) {
$jwl_fontselect_dropdown2 = $options2['jwl_fontselect_dropdown']['row'];
if ($jwl_fontselect_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_fontselect"); } 
if ($jwl_fontselect_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_fontselect"); } 
if ($jwl_fontselect_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_fontselect"); }
if ($jwl_fontselect_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_fontselect"); }
}

function tinymce_add_button_fontsizeselect($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_fontsizeselect = isset($options['jwl_fontsizeselect_field_id']);
if ($jwl_fontsizeselect == "1") $buttons[] = 'fontsizeselect'; return $buttons; }
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_fontsizeselect_dropdown']['row'])) {
$jwl_fontsizeselect_dropdown2 = $options2['jwl_fontsizeselect_dropdown']['row'];
if ($jwl_fontsizeselect_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_fontsizeselect"); } 
if ($jwl_fontsizeselect_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_fontsizeselect"); } 
if ($jwl_fontsizeselect_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_fontsizeselect"); }
if ($jwl_fontsizeselect_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_fontsizeselect"); }
}

function tinymce_add_button_cut($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_cut = isset($options['jwl_cut_field_id']); 
if ($jwl_cut == "1") $buttons[] = 'cut'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_cut_dropdown']['row'])) {
$jwl_cut_dropdown2 = $options2['jwl_cut_dropdown']['row'];
if ($jwl_cut_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_cut"); } 
if ($jwl_cut_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_cut"); } 
if ($jwl_cut_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_cut"); }
if ($jwl_cut_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_cut"); }
}

function tinymce_add_button_copy($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_copy = isset($options['jwl_copy_field_id']); 
if ($jwl_copy == "1") $buttons[] = 'copy'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_copy_dropdown']['row'])) {
$jwl_copy_dropdown2 = $options2['jwl_copy_dropdown']['row'];
if ($jwl_copy_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_copy"); } 
if ($jwl_copy_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_copy"); } 
if ($jwl_copy_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_copy"); }
if ($jwl_copy_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_copy"); }
}

function tinymce_add_button_paste($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_paste = isset($options['jwl_paste_field_id']); 
if ($jwl_paste == "1") $buttons[] = 'paste'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_paste_dropdown']['row'])) {
$jwl_paste_dropdown2 = $options2['jwl_paste_dropdown']['row'];
if ($jwl_paste_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_paste"); } 
if ($jwl_paste_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_paste"); } 
if ($jwl_paste_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_paste"); }
if ($jwl_paste_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_paste"); }
}

function tinymce_add_button_backcolorpicker($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_backcolorpicker = isset($options['jwl_backcolorpicker_field_id']); 
if ($jwl_backcolorpicker == "1") $buttons[] = 'backcolorpicker'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_backcolorpicker_dropdown']['row'])) {
$jwl_backcolorpicker_dropdown2 = $options2['jwl_backcolorpicker_dropdown']['row'];
if ($jwl_backcolorpicker_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_backcolorpicker"); } 
if ($jwl_backcolorpicker_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_backcolorpicker"); } 
if ($jwl_backcolorpicker_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_backcolorpicker"); }
if ($jwl_backcolorpicker_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_backcolorpicker"); }
}

function tinymce_add_button_forecolorpicker($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_forecolorpicker = isset($options['jwl_forecolorpicker_field_id']); 
if ($jwl_forecolorpicker == "1") $buttons[] = 'forecolorpicker'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_forecolorpicker_dropdown']['row'])) {
$jwl_forecolorpicker_dropdown2 = $options2['jwl_forecolorpicker_dropdown']['row'];
if ($jwl_forecolorpicker_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_forecolorpicker"); } 
if ($jwl_forecolorpicker_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_forecolorpicker"); } 
if ($jwl_forecolorpicker_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_forecolorpicker"); }
if ($jwl_forecolorpicker_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_forecolorpicker"); }
}

function tinymce_add_button_advhr($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_advhr = isset($options['jwl_advhr_field_id']); 
if ($jwl_advhr == "1") $buttons[] = 'advhr'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_advhr_dropdown']['row'])) {
$jwl_advhr_dropdown2 = $options2['jwl_advhr_dropdown']['row'];
if ($jwl_advhr_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_advhr"); } 
if ($jwl_advhr_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_advhr"); } 
if ($jwl_advhr_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_advhr"); }
if ($jwl_advhr_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_advhr"); }
}

function tinymce_add_button_visualaid($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_visualaid = isset($options['jwl_visualaid_field_id']); 
if ($jwl_visualaid == "1")
$buttons[] = 'visualaid'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_visualaid_dropdown']['row'])) {
$jwl_visualaid_dropdown2 = $options2['jwl_visualaid_dropdown']['row'];
if ($jwl_visualaid_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_visualaid"); } 
if ($jwl_visualaid_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_visualaid"); } 
if ($jwl_visualaid_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_visualaid"); }
if ($jwl_visualaid_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_visualaid"); }
}

function tinymce_add_button_anchor($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_anchor = isset($options['jwl_anchor_field_id']); 
if ($jwl_anchor == "1")
$buttons[] = 'anchor'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_anchor_dropdown']['row'])) {
$jwl_anchor_dropdown2 = $options2['jwl_anchor_dropdown']['row'];
if ($jwl_anchor_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_anchor"); } 
if ($jwl_anchor_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_anchor"); } 
if ($jwl_anchor_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_anchor"); }
if ($jwl_anchor_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_anchor"); }
}

function tinymce_add_button_sub($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_sub = isset($options['jwl_sub_field_id']); 
if ($jwl_sub == "1") $buttons[] = 'sub'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_sub_dropdown']['row'])) {
$jwl_sub_dropdown2 = $options2['jwl_sub_dropdown']['row'];
if ($jwl_sub_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_sub"); } 
if ($jwl_sub_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_sub"); } 
if ($jwl_sub_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_sub"); }
if ($jwl_sub_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_sub"); }
}

function tinymce_add_button_sup($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_sup = isset($options['jwl_sup_field_id']); 
if ($jwl_sup == "1") $buttons[] = 'sup'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_sup_dropdown']['row'])) {
$jwl_sup_dropdown2 = $options2['jwl_sup_dropdown']['row'];
if ($jwl_sup_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_sup"); } 
if ($jwl_sup_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_sup"); } 
if ($jwl_sup_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_sup"); }
if ($jwl_sup_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_sup"); }
}

function tinymce_add_button_search($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_search = isset($options['jwl_search_field_id']); 
if ($jwl_search == "1") $buttons[] = 'search'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_search_dropdown']['row'])) {
$jwl_search_dropdown2 = $options2['jwl_search_dropdown']['row'];
if ($jwl_search_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_search"); } 
if ($jwl_search_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_search"); } 
if ($jwl_search_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_search"); }
if ($jwl_search_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_search"); }
}

function tinymce_add_button_replace($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_replace = isset($options['jwl_replace_field_id']); 
if ($jwl_replace == "1") $buttons[] = 'replace'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_replace_dropdown']['row'])) {
$jwl_replace_dropdown2 = $options2['jwl_replace_dropdown']['row'];
if ($jwl_replace_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_replace"); } 
if ($jwl_replace_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_replace"); } 
if ($jwl_replace_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_replace"); }
if ($jwl_replace_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_replace"); }
}

function tinymce_add_button_datetime($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_datetime = isset($options['jwl_datetime_field_id']); 
if ($jwl_datetime == "1") $buttons[] = 'insertdate,inserttime'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_datetime_dropdown']['row'])) {
$jwl_datetime_dropdown2 = $options2['jwl_datetime_dropdown']['row'];
if ($jwl_datetime_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_datetime"); } 
if ($jwl_datetime_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_datetime"); } 
if ($jwl_datetime_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_datetime"); }
if ($jwl_datetime_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_datetime"); }
}

function tinymce_add_button_nonbreaking($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_nonbreaking = isset($options['jwl_nonbreaking_field_id']); 
if ($jwl_nonbreaking == "1") $buttons[] = 'nonbreaking'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_nonbreaking_dropdown']['row'])) {
$jwl_nonbreaking_dropdown2 = $options2['jwl_nonbreaking_dropdown']['row'];
if ($jwl_nonbreaking_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_nonbreaking"); } 
if ($jwl_nonbreaking_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_nonbreaking"); } 
if ($jwl_nonbreaking_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_nonbreaking"); }
if ($jwl_nonbreaking_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_nonbreaking"); }
}

function tinymce_add_button_mailto($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_mailto = isset($options['jwl_mailto_field_id']); 
if ($jwl_mailto == "1") $buttons[] = 'mailto'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_mailto_dropdown']['row'])) {
$jwl_mailto_dropdown2 = $options2['jwl_mailto_dropdown']['row'];
if ($jwl_mailto_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_mailto"); } 
if ($jwl_mailto_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_mailto"); } 
if ($jwl_mailto_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_mailto"); }
if ($jwl_mailto_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_mailto"); }
}

function tinymce_add_button_layers($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_layers = isset($options['jwl_layers_field_id']); 
if ($jwl_layers == "1") $buttons[] = 'insertlayer,moveforward,movebackward,absolute'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_layers_dropdown']['row'])) {
$jwl_layers_dropdown2 = $options2['jwl_layers_dropdown']['row'];
if ($jwl_layers_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_layers"); } 
if ($jwl_layers_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_layers"); } 
if ($jwl_layers_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_layers"); }
if ($jwl_layers_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_layers"); }
}

function tinymce_add_button_span($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_span = isset($options['jwl_span_field_id']); 
if ($jwl_span == "1") $buttons[] = 'jwlSpan'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_span_dropdown']['row'])) {
$jwl_span_dropdown2 = $options2['jwl_span_dropdown']['row'];
if ($jwl_span_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_span"); } 
if ($jwl_span_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_span"); } 
if ($jwl_span_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_span"); }
if ($jwl_span_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_span"); }
}

function tinymce_add_button_equation($buttons) { 
$options = get_option('jwl_options_group1');
$jwl_equation = isset($options['jwl_equation_field_id']); 
if ($jwl_equation == "1") $buttons[] = 'equation'; return $buttons; } 
$options2 = get_option('jwl_options_group1');
if (isset($options2['jwl_equation_dropdown']['row'])) {
$jwl_equation_dropdown2 = $options2['jwl_equation_dropdown']['row'];
if ($jwl_equation_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_equation"); } 
if ($jwl_equation_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_equation"); } 
if ($jwl_equation_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_equation"); }
if ($jwl_equation_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_equation"); }
}

// Functions for Row 4
function tinymce_add_button_styleselect($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_styleselect = isset($options['jwl_styleselect_field_id']); 
if ($jwl_styleselect == "1") $buttons[] = 'styleselect'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_styleselect_dropdown']['row'])) {
$jwl_styleselect_dropdown2 = $options2['jwl_styleselect_dropdown']['row'];
if ($jwl_styleselect_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_styleselect"); } 
if ($jwl_styleselect_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_styleselect"); } 
if ($jwl_styleselect_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_styleselect"); }
if ($jwl_styleselect_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_styleselect"); }
}

function tinymce_add_button_tableDropdown($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_tableDropdown = isset($options['jwl_tableDropdown_field_id']); 
if ($jwl_tableDropdown == "1") $buttons[] = 'tableDropdown'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_tableDropdown_dropdown']['row'])) {
$jwl_tableDropdown_dropdown2 = $options2['jwl_tableDropdown_dropdown']['row'];
if ($jwl_tableDropdown_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_tableDropdown"); } 
if ($jwl_tableDropdown_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_tableDropdown"); } 
if ($jwl_tableDropdown_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_tableDropdown"); }
if ($jwl_tableDropdown_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_tableDropdown"); }
}

function tinymce_add_button_emotions($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_emotions = isset($options['jwl_emotions_field_id']); 
if ($jwl_emotions == "1") $buttons[] = 'emotions'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_emotions_dropdown']['row'])) {
$jwl_emotions_dropdown2 = $options2['jwl_emotions_dropdown']['row'];
if ($jwl_emotions_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_emotions"); } 
if ($jwl_emotions_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_emotions"); } 
if ($jwl_emotions_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_emotions"); }
if ($jwl_emotions_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_emotions"); }
}

function tinymce_add_button_image($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_image = isset($options['jwl_image_field_id']); 
if ($jwl_image == "1") $buttons[] = 'image'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_image_dropdown']['row'])) {
$jwl_image_dropdown2 = $options2['jwl_image_dropdown']['row'];
if ($jwl_image_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_image"); } 
if ($jwl_image_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_image"); } 
if ($jwl_image_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_image"); }
if ($jwl_image_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_image"); }
}

function tinymce_add_button_preview($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_preview = isset($options['jwl_preview_field_id']); 
if ($jwl_preview == "1") $buttons[] = 'preview'; return $buttons; }
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_preview_dropdown']['row'])) {
$jwl_preview_dropdown2 = $options2['jwl_preview_dropdown']['row'];
if ($jwl_preview_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_preview"); } 
if ($jwl_preview_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_preview"); } 
if ($jwl_preview_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_preview"); }
if ($jwl_preview_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_preview"); }
}

function tinymce_add_button_cite($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_cite = isset($options['jwl_cite_field_id']); 
if ($jwl_cite == "1") $buttons[] = 'cite'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_cite_dropdown']['row'])) {
$jwl_cite_dropdown2 = $options2['jwl_cite_dropdown']['row'];
if ($jwl_cite_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_cite"); } 
if ($jwl_cite_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_cite"); } 
if ($jwl_cite_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_cite"); }
if ($jwl_cite_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_cite"); }
}

function tinymce_add_button_abbr($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_abbr = isset($options['jwl_abbr_field_id']); 
if ($jwl_abbr == "1") $buttons[] = 'abbr'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_abbr_dropdown']['row'])) {
$jwl_abbr_dropdown2 = $options2['jwl_abbr_dropdown']['row'];
if ($jwl_abbr_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_abbr"); } 
if ($jwl_abbr_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_abbr"); } 
if ($jwl_abbr_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_abbr"); }
if ($jwl_abbr_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_abbr"); }
}

function tinymce_add_button_acronym($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_acronym = isset($options['jwl_acronym_field_id']); 
if ($jwl_acronym == "1") $buttons[] = 'acronym'; return $buttons; }
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_acronym_dropdown']['row'])) {
$jwl_acronym_dropdown2 = $options2['jwl_acronym_dropdown']['row'];
if ($jwl_acronym_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_acronym"); } 
if ($jwl_acronym_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_acronym"); } 
if ($jwl_acronym_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_acronym"); }
if ($jwl_acronym_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_acronym"); }
}

function tinymce_add_button_del($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_del = isset($options['jwl_del_field_id']); 
if ($jwl_del == "1") $buttons[] = 'del'; return $buttons; }
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_del_dropdown']['row'])) {
$jwl_del_dropdown2 = $options2['jwl_del_dropdown']['row'];
if ($jwl_del_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_del"); } 
if ($jwl_del_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_del"); } 
if ($jwl_del_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_del"); }
if ($jwl_del_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_del"); }
}

function tinymce_add_button_ins($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_ins = isset($options['jwl_ins_field_id']); 
if ($jwl_ins == "1") $buttons[] = 'ins'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_ins_dropdown']['row'])) {
$jwl_ins_dropdown2 = $options2['jwl_ins_dropdown']['row'];
if ($jwl_ins_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_ins"); } 
if ($jwl_ins_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_ins"); } 
if ($jwl_ins_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_ins"); }
if ($jwl_ins_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_ins"); }
}

function tinymce_add_button_attribs($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_attribs = isset($options['jwl_attribs_field_id']); 
if ($jwl_attribs == "1") $buttons[] = 'attribs'; return $buttons; }
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_attribs_dropdown']['row'])) {
$jwl_attribs_dropdown2 = $options2['jwl_attribs_dropdown']['row'];
if ($jwl_attribs_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_attribs"); } 
if ($jwl_attribs_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_attribs"); } 
if ($jwl_attribs_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_attribs"); }
if ($jwl_attribs_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_attribs"); }
}

function tinymce_add_button_styleprops($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_styleprops = isset($options['jwl_styleprops_field_id']); 
if ($jwl_styleprops == "1") $buttons[] = 'styleprops'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_styleprops_dropdown']['row'])) {
$jwl_styleprops_dropdown2 = $options2['jwl_styleprops_dropdown']['row'];
if ($jwl_styleprops_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_styleprops"); } 
if ($jwl_styleprops_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_styleprops"); } 
if ($jwl_styleprops_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_styleprops"); }
if ($jwl_styleprops_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_styleprops"); }
}

function tinymce_add_button_code($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_code = isset($options['jwl_code_field_id']); 
if ($jwl_code == "1") $buttons[] = 'code'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_code_dropdown']['row'])) {
$jwl_code_dropdown2 = $options2['jwl_code_dropdown']['row'];
if ($jwl_code_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_code"); } 
if ($jwl_code_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_code"); } 
if ($jwl_code_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_code"); }
if ($jwl_code_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_code"); }
}

function tinymce_add_button_codemagic($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_codemagic = isset($options['jwl_codemagic_field_id']); 
if ($jwl_codemagic == "1") $buttons[] = 'codemagic'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_codemagic_dropdown']['row'])) {
$jwl_codemagic_dropdown2 = $options2['jwl_codemagic_dropdown']['row'];
if ($jwl_codemagic_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_codemagic"); } 
if ($jwl_codemagic_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_codemagic"); } 
if ($jwl_codemagic_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_codemagic"); }
if ($jwl_codemagic_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_codemagic"); }
}

function tinymce_add_button_html5($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_html5 = isset($options['jwl_html5_field_id']); 
if ($jwl_html5 == "1") $buttons[] = 'tagwrap'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_html5_dropdown']['row'])) {
$jwl_html5_dropdown2 = $options2['jwl_html5_dropdown']['row'];
if ($jwl_html5_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_html5"); } 
if ($jwl_html5_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_html5"); } 
if ($jwl_html5_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_html5"); }
if ($jwl_html5_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_html5"); }
}

function tinymce_add_button_media($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_media = isset($options['jwl_media_field_id']); 
if ($jwl_media == "1") $buttons[] = 'media'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_media_dropdown']['row'])) {
$jwl_media_dropdown2 = $options2['jwl_media_dropdown']['row'];
if ($jwl_media_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_media"); } 
if ($jwl_media_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_media"); } 
if ($jwl_media_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_media"); }
if ($jwl_media_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_media"); }
}

function tinymce_add_button_youtube($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_youtube = isset($options['jwl_youtube_field_id']); 
if ($jwl_youtube == "1") $buttons[] = 'youtube'; return $buttons; }
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_youtube_dropdown']['row'])) {
$jwl_youtube_dropdown2 = $options2['jwl_youtube_dropdown']['row'];
if ($jwl_youtube_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_youtube"); } 
if ($jwl_youtube_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_youtube"); } 
if ($jwl_youtube_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_youtube"); }
if ($jwl_youtube_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_youtube"); }
}

function tinymce_add_button_youtubeIframe($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_youtubeIframe = isset($options['jwl_youtubeIframe_field_id']); 
if ($jwl_youtubeIframe == "1") $buttons[] = 'youtubeIframe'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_youtubeIframe_dropdown']['row'])) {
$jwl_youtubeIframe_dropdown2 = $options2['jwl_youtubeIframe_dropdown']['row'];
if ($jwl_youtubeIframe_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_youtubeIframe"); } 
if ($jwl_youtubeIframe_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_youtubeIframe"); } 
if ($jwl_youtubeIframe_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_youtubeIframe"); }
if ($jwl_youtubeIframe_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_youtubeIframe"); }
}

function tinymce_add_button_imgmap($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_imgmap = isset($options['jwl_imgmap_field_id']); 
if ($jwl_imgmap == "1") $buttons[] = 'imgmap'; return $buttons; }
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_imgmap_dropdown']['row'])) {
$jwl_imgmap_dropdown2 = $options2['jwl_imgmap_dropdown']['row'];
if ($jwl_imgmap_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_imgmap"); } 
if ($jwl_imgmap_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_imgmap"); } 
if ($jwl_imgmap_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_imgmap"); }
if ($jwl_imgmap_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_imgmap"); }
}

function tinymce_add_button_visualchars($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_visualchars = isset($options['jwl_visualchars_field_id']); 
if ($jwl_visualchars == "1") $buttons[] = 'visualchars'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_visualchars_dropdown']['row'])) {
$jwl_visualchars_dropdown2 = $options2['jwl_visualchars_dropdown']['row'];
if ($jwl_visualchars_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_visualchars"); } 
if ($jwl_visualchars_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_visualchars"); } 
if ($jwl_visualchars_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_visualchars"); }
if ($jwl_visualchars_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_visualchars"); }
}

function tinymce_add_button_print($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_print = isset($options['jwl_print_field_id']); 
if ($jwl_print == "1") $buttons[] = 'print'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_print_dropdown']['row'])) {
$jwl_print_dropdown2 = $options2['jwl_print_dropdown']['row'];
if ($jwl_print_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_print"); } 
if ($jwl_print_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_print"); } 
if ($jwl_print_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_print"); }
if ($jwl_print_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_print"); }
}

function tinymce_add_button_shortcodes($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_shortcodes = isset($options['jwl_shortcodes_field_id']); 
if ($jwl_shortcodes == "1") $buttons[] = 'shortcodes'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_shortcodes_dropdown']['row'])) {
$jwl_shortcodes_dropdown2 = $options2['jwl_shortcodes_dropdown']['row'];
if ($jwl_shortcodes_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_shortcodes"); } 
if ($jwl_shortcodes_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_shortcodes"); } 
if ($jwl_shortcodes_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_shortcodes"); }
if ($jwl_shortcodes_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_shortcodes"); }
}

function tinymce_add_button_loremipsum($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_loremipsum = isset($options['jwl_loremipsum_field_id']); 
if ($jwl_loremipsum == "1") $buttons[] = 'loremipsum'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_loremipsum_dropdown']['row'])) {
$jwl_loremipsum_dropdown2 = $options2['jwl_loremipsum_dropdown']['row'];
if ($jwl_loremipsum_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_loremipsum"); } 
if ($jwl_loremipsum_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_loremipsum"); } 
if ($jwl_loremipsum_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_loremipsum"); }
if ($jwl_loremipsum_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_loremipsum"); }
}

function tinymce_add_button_w3cvalidate($buttons) { 
$options = get_option('jwl_options_group2');
$jwl_w3cvalidate = isset($options['jwl_w3cvalidate_field_id']); 
if ($jwl_w3cvalidate == "1") $buttons[] = 'w3cvalidate'; return $buttons; } 
$options2 = get_option('jwl_options_group2');
if (isset($options2['jwl_w3cvalidate_dropdown']['row'])) {
$jwl_w3cvalidate_dropdown2 = $options2['jwl_w3cvalidate_dropdown']['row'];
if ($jwl_w3cvalidate_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_w3cvalidate"); } 
if ($jwl_w3cvalidate_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_w3cvalidate"); } 
if ($jwl_w3cvalidate_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_w3cvalidate"); }
if ($jwl_w3cvalidate_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_w3cvalidate"); }
}

// Functions for Other Plugin Buttons
function tinymce_add_button_wp_photo_album($buttons) { 
$options = get_option('jwl_options_group9');
$jwl_wp_photo_album = isset($options['jwl_wp_photo_album_field_id']); 
if ($jwl_wp_photo_album == "1") $buttons[] = 'mygallery_button'; return $buttons; } 
$options2 = get_option('jwl_options_group9');
if (isset($options2['jwl_wp_photo_album_dropdown']['row'])) {
$jwl_wp_photo_album_dropdown2 = $options2['jwl_wp_photo_album_dropdown']['row'];
if ($jwl_wp_photo_album_dropdown2 == 'Row 1') { add_filter("mce_buttons", "tinymce_add_button_wp_photo_album"); } 
if ($jwl_wp_photo_album_dropdown2 == 'Row 2') { add_filter("mce_buttons_2", "tinymce_add_button_wp_photo_album"); } 
if ($jwl_wp_photo_album_dropdown2 == 'Row 3') { add_filter("mce_buttons_3", "tinymce_add_button_wp_photo_album"); }
if ($jwl_wp_photo_album_dropdown2 == 'Row 4') { add_filter("mce_buttons_4", "tinymce_add_button_wp_photo_album"); }
}

// Test button
//function tinymce_add_test_button($buttons) {  $buttons[] = 'tagwrap';  return $buttons;  }
//add_filter("mce_buttons", "tinymce_add_test_button");

// Add the plugin array for extra features
function jwl_mce_external_plugins( $jwl_plugin_array ) {
		$jwl_plugin_array['table'] = plugin_dir_url( __FILE__ ) . 'table/editor_plugin.js';
		$jwl_plugin_array['emotions'] = plugin_dir_url(__FILE__) . 'emotions/editor_plugin.js';
		$jwl_plugin_array['advlist'] = plugin_dir_url(__FILE__) . 'advlist/editor_plugin.js';
		$jwl_plugin_array['advimage'] = plugin_dir_url(__FILE__) . 'advimage/editor_plugin.js';
		$jwl_plugin_array['searchreplace'] = plugin_dir_url(__FILE__) . 'searchreplace/editor_plugin.js';
		$jwl_plugin_array['preview'] = plugin_dir_url(__FILE__) . 'preview/editor_plugin.js';
		$jwl_plugin_array['xhtmlxtras'] = plugin_dir_url(__FILE__) . 'xhtmlxtras/editor_plugin.js';
		$jwl_plugin_array['style'] = plugin_dir_url(__FILE__) . 'style/editor_plugin.js';
		$jwl_plugin_array['media'] = plugin_dir_url(__FILE__) . 'media/editor_plugin.js';
		$jwl_plugin_array['advhr'] = plugin_dir_url(__FILE__) . 'advhr/editor_plugin.js';
		$jwl_plugin_array['clear'] = plugin_dir_url( __FILE__ ) . 'clear/editor_plugin.js';
		$jwl_plugin_array['tableDropdown'] = plugin_dir_url( __FILE__ ) . 'tableDropdown/editor_plugin.js';
		$jwl_plugin_array['codemagic'] = plugin_dir_url( __FILE__ ) . 'codemagic/editor_plugin.js';
		$jwl_plugin_array['youtube'] = plugin_dir_url( __FILE__ ) . 'youtube/editor_plugin.js';
		$jwl_plugin_array['imgmap'] = plugin_dir_url( __FILE__ ) . 'imgmap/editor_plugin.js';
		$jwl_plugin_array['visualchars'] = plugin_dir_url( __FILE__ ) . 'visualchars/editor_plugin.js';
		$jwl_plugin_array['print'] = plugin_dir_url( __FILE__ ) . 'print/editor_plugin.js';
		$jwl_plugin_array['insertdatetime'] = plugin_dir_url( __FILE__ ) . 'insertdatetime/editor_plugin.js';
		$jwl_plugin_array['nonbreaking'] = plugin_dir_url( __FILE__ ) . 'nonbreaking/editor_plugin.js';
		$jwl_plugin_array['mailto'] = plugin_dir_url( __FILE__ ) . 'mailto/editor_plugin_src.js';
		$jwl_plugin_array['layer'] = plugin_dir_url( __FILE__ ) . 'layer/editor_plugin_src.js';
		$jwl_plugin_array['jwlspan']  =  plugin_dir_url( __FILE__ ) . 'jwl_span/jwl_span.js';
		$jwl_plugin_array['youtubeIframe']  =  plugin_dir_url( __FILE__ ) . 'youtubeIframe/editor_plugin.js';	
		$jwl_plugin_array['equation']  =  plugin_dir_url( __FILE__ ) . 'equation/editor_plugin.js';
		$jwl_plugin_array['shortcodes'] = plugin_dir_url(__FILE__) . 'shortcodes/editor_plugin_src.js';
		$jwl_plugin_array['loremipsum'] = plugin_dir_url(__FILE__) . 'loremipsum/editor_plugin.js';
		$jwl_plugin_array['w3cvalidate'] = plugin_dir_url(__FILE__) . 'w3cvalidate/editor_plugin.js';	
		$jwl_plugin_array['toggletoolbars'] = plugin_dir_url(__FILE__) . 'toggletoolbars/editor_plugin.js';
		$jwl_plugin_array['tagwrap'] = plugin_dir_url(__FILE__) . 'tagwrap/editor_plugin_src.js';
		
		// Test plugin array
		//$jwl_plugin_array['tagwrap'] = plugin_dir_url(__FILE__) . 'tagwrap/editor_plugin_src.js';
		   
		return $jwl_plugin_array;
}
add_filter( 'mce_external_plugins', 'jwl_mce_external_plugins' );

// Adds toggle to the content editor (actually option removes toggle)
global $pagenow;
if ($pagenow=='post.php') {
	$options_toggle = get_option('jwl_options_group3');
	$jwl_toggle = isset($options_toggle['jwl_toggle_field_id']); 
	if ($jwl_toggle == "1") { 
		function jwl_hide_on_toggle() {
			?><style type="text/css"> #content_toggle_toolbar { display: none !important; }</style><?php
		}
		add_action('admin_head','jwl_hide_on_toggle');
	}
}

// Function to hide the HTML tab from the content editor.
global $pagenow;
if ($pagenow=='post.php' || ($pagenow == "admin.php" && (isset($_GET['page'])) == 'cleverness-to-do-list') || ($pagenow == "options-general.php" && (isset($_GET['page'])) == 'ultimate-tinymce')) {
	$options_html = get_option('jwl_options_group4');
	$jwl_html = isset($options_html['jwl_hide_html_tab']); 
	if ($jwl_html == "1") {
		function jwl_hide_on_todo() {
			?><style type="text/css"> #excerpt-html { display: none !important; } #content-id-html { display: none !important; }  #content-html { display: none !important; } #clevernesstododescription-html { display: none !important; }</style><?php
		}
		add_filter('admin_head','jwl_hide_on_todo');
	}
}

// Function for removing force reload of tinymce editor
function jwl_tiny_mce_version($version) { // trick tinymce version number to force update and clear cache
	return ++$version;
}
add_filter('tiny_mce_version', 'jwl_tiny_mce_version');
$options7 = get_option('jwl_options_group4');
$jwl_tinymce_refresh = isset($options7['jwl_tinymce_refresh']);
if ($jwl_tinymce_refresh == "1"){
	remove_filter('tiny_mce_version', 'jwl_tiny_mce_version');
}

// Functions for miscellaneous options and features
// This is a "partial-global" (yes, my term) variable used for the miscellaneous options and features section
$options4 = get_option('jwl_options_group3');

// Function for NextPage Feature
$jwl_tinymce_nextpage = isset($options4['jwl_tinymce_nextpage_field_id']);
if ($jwl_tinymce_nextpage == "1"){
    add_filter('mce_buttons','jwl_nextpage_button');
    function jwl_nextpage_button($mce_buttons) {
    $pos = array_search('wp_more',$mce_buttons,true);
    if ($pos !== false) {
        $tmp_buttons = array_slice($mce_buttons, 0, $pos+1);
        $tmp_buttons[] = 'wp_page';
        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos+1));
    }
    return $mce_buttons;
    }
}

// Function to show post/page id in admin column area
$jwl_postid = isset($options4['jwl_postid_field_id']);
if ($jwl_postid == "1"){
   		function jwl_posts_columns_id($defaults){
			$defaults['wps_post_id'] = __('ID');
			return $defaults;
		}
		add_filter('manage_posts_columns', 'jwl_posts_columns_id', 5);
		add_filter('manage_pages_columns', 'jwl_posts_columns_id', 5);
		function jwl_posts_custom_id_columns($column_name, $id){
			if($column_name === 'wps_post_id'){
					echo $id;
			}
		}
		add_action('manage_posts_custom_column', 'jwl_posts_custom_id_columns', 5, 2);
    	add_action('manage_pages_custom_column', 'jwl_posts_custom_id_columns', 5, 2);
}

// Function to show shortcodes in widget area
$options_short_widget = get_option('jwl_options_group3');
$jwl_shortcode = isset($options_short_widget['jwl_shortcode_field_id']);
if ($jwl_shortcode == "1"){
   	add_filter( 'widget_text', 'shortcode_unautop');
	add_filter( 'widget_text', 'do_shortcode');
}

// Adding PHP text widgets
$jwl_php_widget = isset($options4['jwl_php_widget_field_id']);
if ($jwl_php_widget == "1"){

class jwl_PHP_Code_Widget extends WP_Widget {

	function jwl_PHP_Code_Widget() {
		$widget_ops = array('classname' => 'widget_execphp', 'description' => __('Arbitrary text, HTML, or PHP Code'));
		$control_ops = array('width' => 400, 'height' => 350);
		$this->WP_Widget('execphp', __('Ultimate Tinymce PHP Widget'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance );
		$text = apply_filters( 'widget_execphp', $instance['text'], $instance );
		echo $before_widget;
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } 
			ob_start();
			eval('?>'.$text);
			$text = ob_get_contents();
			ob_end_clean();
			?>			
			<div class="execphpwidget"><?php echo $instance['filter'] ? wpautop($text) : $text; ?></div>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( $new_instance['text'] ) );
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = format_to_edit($instance['text']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs.'); ?></label></p>
<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("jwl_PHP_Code_Widget");'));
}

// Enable the linebreak shortcode
$jwl_linebreak = isset($options4['jwl_linebreak_field_id']);
if ($jwl_linebreak == "1"){
	//[break]
	function jwl_insert_linebreak( $atts ){
 		return '<br clear="none" />';
	}
	add_shortcode( 'break', 'jwl_insert_linebreak' );
}

// Add button and array for advanced insert/edit link button.
$jwl_defaults = isset($options4['jwl_defaults_field_id']);
if ($jwl_defaults == "1") {
	
	function disable_advanced_link_array( $plugin_array ) {
		$options5 = get_option('jwl_options_group3');
		$jwl_defaults = $options5['jwl_defaults_field_id'];
		if ($jwl_defaults == "1") {
		$plugin_array['advlink'] = plugin_dir_url(__FILE__) . 'advlink/editor_plugin.js';
		return $plugin_array;
		}
	}
	add_filter( 'mce_external_plugins', 'disable_advanced_link_array' );
	
	function jwl_advlink_button($mce_buttons2) {
		$options6 = get_option('jwl_options_group3');
		$jwl_defaults2 = $options6['jwl_defaults_field_id'];
			if ($jwl_defaults2 == "1") {
			$pos = array_search('link',$mce_buttons2,true);
				if ($pos !== false) {
				 $tmp_buttons2 = array_slice($mce_buttons2, 0, $pos+1);
				 $tmp_buttons2[] = 'advlink';
				 $mce_buttons2 = array_merge($tmp_buttons2, array_slice($mce_buttons2, $pos+1));
				}
			return $mce_buttons2;
			}
	}
	add_filter('mce_buttons','jwl_advlink_button');
}

// User option for adding the clear div buttons in the visual editor
function tinymce_add_button_div($buttons) {
$options = get_option('jwl_options_group3');
$jwl_div = isset($options['jwl_div_field_id']);
if ($jwl_div == "1")
array_push($buttons, "separator", "clearleft","clearright","clearboth","advlink");
   return $buttons;
}
add_filter('mce_buttons', 'tinymce_add_button_div');

// Function to remove wpautop
$jwl_autop = isset($options4['jwl_autop_field_id']);
if ($jwl_autop == "1"){
	remove_filter ('the_content', 'wpautop');
}

// User option for adding a signoff shortcode for tinymce visual editor (Goes with custom message box below)
function jwl_sign_off_text() {
	$options = get_option('jwl_options_group3');  
	if (isset($options['jwl_signoff_field_id'])) {
		$jwl_signoff = $options['jwl_signoff_field_id'];
	}
    return $jwl_signoff;  
} 
add_shortcode('signoff', 'jwl_sign_off_text');

// Add column shortcodes for tinymce editor
$jwl_columns = isset($options4['jwl_columns_field_id']);
if ($jwl_columns == "1"){
	
	function jwl_one_third( $atts, $content = null ) { return '<div class="one_third">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_third', 'jwl_one_third');
	function jwl_one_third_last( $atts, $content = null ) { return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_third_last', 'jwl_one_third_last');
	function jwl_two_third( $atts, $content = null ) { return '<div class="two_third">' . do_shortcode($content) . '</div>'; }
	add_shortcode('two_third', 'jwl_two_third');
	function jwl_two_third_last( $atts, $content = null ) { return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('two_third_last', 'jwl_two_third_last');
	function jwl_one_half( $atts, $content = null ) { return '<div class="one_half">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_half', 'jwl_one_half');
	function jwl_one_half_last( $atts, $content = null ) { return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_half_last', 'jwl_one_half_last');
	function jwl_one_fourth( $atts, $content = null ) { return '<div class="one_fourth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_fourth', 'jwl_one_fourth');
	function jwl_one_fourth_last( $atts, $content = null ) { return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_fourth_last', 'jwl_one_fourth_last');
	function jwl_three_fourth( $atts, $content = null ) { return '<div class="three_fourth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('three_fourth', 'jwl_three_fourth');
	function jwl_three_fourth_last( $atts, $content = null ) { return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('three_fourth_last', 'jwl_three_fourth_last');
	function jwl_one_fifth( $atts, $content = null ) { return '<div class="one_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_fifth', 'jwl_one_fifth');
	function jwl_one_fifth_last( $atts, $content = null ) { return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_fifth_last', 'jwl_one_fifth_last');
	function jwl_two_fifth( $atts, $content = null ) { return '<div class="two_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('two_fifth', 'jwl_two_fifth');
	function jwl_two_fifth_last( $atts, $content = null ) { return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('two_fifth_last', 'jwl_two_fifth_last');
	function jwl_three_fifth( $atts, $content = null ) { return '<div class="three_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('three_fifth', 'jwl_three_fifth');
	function jwl_three_fifth_last( $atts, $content = null ) { return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('three_fifth_last', 'jwl_three_fifth_last');
	function jwl_four_fifth( $atts, $content = null ) { return '<div class="four_fifth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('four_fifth', 'jwl_four_fifth');
	function jwl_four_fifth_last( $atts, $content = null ) { return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('four_fifth_last', 'jwl_four_fifth_last');
	function jwl_one_sixth( $atts, $content = null ) { return '<div class="one_sixth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('one_sixth', 'jwl_one_sixth');
	function jwl_one_sixth_last( $atts, $content = null ) { return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('one_sixth_last', 'jwl_one_sixth_last');
	function jwl_five_sixth( $atts, $content = null ) { return '<div class="five_sixth">' . do_shortcode($content) . '</div>'; }
	add_shortcode('five_sixth', 'jwl_five_sixth');
	function jwl_five_sixth_last( $atts, $content = null ) { return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>'; }
	add_shortcode('five_sixth_last', 'jwl_five_sixth_last');

	function jwl_column_stylesheet() {
		$my_style_url = WP_PLUGIN_URL . '/ultimate-tinymce/css/column-style.css';
		$my_style_file = WP_PLUGIN_DIR . '/ultimate-tinymce/css/column-style.css';
	
		if ( file_exists($my_style_file) ) {
			wp_register_style('column-styles', $my_style_url);
			wp_enqueue_style('column-styles');
		}
	}
	add_action('wp_print_styles', 'jwl_column_stylesheet');
}

// Class and Functions for Cursor Position in Editor
$jwl_cursor = isset($options4['jwl_cursor_field_id']);
if ($jwl_cursor == "1") {
	
	global $pagenow;
	if ($pagenow != "widgets.php") {
		global $pagenow;
		if (($pagenow != "admin.php") && (isset($_GET['page']) == 'cleverness-to-do-list')) {
		
			final class Preserve_Editor_Scroll_Position {
			
			public static function init() {
				add_filter( 'redirect_post_location', array( __CLASS__, 'add_query_arg' ) );
				add_action( 'edit_form_advanced', array( __CLASS__, 'add_input_field' ) );
				add_action( 'edit_page_form', array( __CLASS__, 'add_input_field' ) );
				add_filter( 'tiny_mce_before_init', array( __CLASS__, 'extend_tiny_mce' ) );
			}
		
			public static function add_input_field() {
				$position = ! empty( $_GET['scrollto'] ) ? $_GET['scrollto'] : 0;
				printf( '<input type="hidden" id="scrollto" name="scrollto" value="%d"/>', esc_attr( $position ) );
				add_action( 'admin_print_footer_scripts', array( __CLASS__, 'print_js' ), 55 ); // Print after Editor JS
			}
		
			public static function extend_tiny_mce( $init ) {
				if ( wp_default_editor() == 'tinymce' )
					$init['setup'] = 'rich_scroll';
		
				return $init;
			}
		
			public static function add_query_arg( $location ) {
				if( ! empty( $_POST['scrollto'] ) )
					$location = add_query_arg( 'scrollto', (int) $_POST['scrollto'], $location );
		
				return $location;
			}
		
			public static function print_js() {
				?>
			<script>
			( function( $ ) {
				$( '#post' ).submit( function() {
					scrollto =
						$('#content' ).is(':hidden') ?
						$('#content_ifr').contents().find( 'body' ).scrollTop() :
						$('#content' ).scrollTop();
					$( '#scrollto' ).val( scrollto );
				} );
				$( '#content' ).scrollTop( $( '#scrollto' ).val() );
			} )( jQuery );
			function rich_scroll( ed ) {
				ed.onInit.add( function() {
					jQuery( '#content_ifr' ).contents().find( 'body' ).scrollTop( jQuery( '#scrollto' ).val() );
				} );
			};
			</script>
				<?php
			}
			}
			add_action( 'admin_init', array( 'Preserve_Editor_Scroll_Position', 'init' ) );
		}
	}
}

// Functions for adding Ultimate Tinymce to Excerpt Area
$options9 = get_option('jwl_options_group4');
$jwl_tinymce_excerpt = isset($options9['jwl_tinymce_excerpt']);
if ($jwl_tinymce_excerpt == "1") {
	add_action( 'admin_init', 'jwl_change_excerpt' );
	function jwl_change_excerpt() {
		remove_meta_box('postexcerpt', 'post', 'normal');
		add_meta_box('postexcerpt', __('Ultimate Tinymce Excerpt'), 'ultimate_tinymce_excerpt_meta_box', 'post', 'normal');
	}
	
	function ultimate_tinymce_excerpt_meta_box() {
		global $wpdb,$post;
		$tinymce_summary = $wpdb->get_row("SELECT post_excerpt FROM $wpdb->posts WHERE id = '$post->ID'");
		$post_tinymce_excerpt 	 = $tinymce_summary->post_excerpt;
	
		$settings = array(
						'quicktags' 	=> array('buttons' => 'em,strong,link',),
						'text_area_name'=> 'excerpt',
						'quicktags' 	=> true,
						'tinymce' 		=> true,
						'editor_css'	=> '<style>#wp-excerpt-editor-container .wp-editor-area{height:150px; width:100%;}</style>'
						);
		$id = 'excerpt';
		wp_editor($post_tinymce_excerpt,$id,$settings);
	}
}

?>