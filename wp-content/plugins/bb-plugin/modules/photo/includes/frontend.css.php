<?php

// Align
FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'align',
	'selector'		=> ".fl-node-$id .fl-photo",
	'prop'			=> 'text-align',
) );

// Width
FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'width',
	'selector'		=> ".fl-node-$id .fl-photo-img",
	'prop'			=> 'width',
) );

// Border
FLBuilderCSS::border_field_rule( array(
	'settings' 		=> $settings,
	'setting_name' 	=> 'border',
	'selector' 		=> ".fl-node-$id .fl-photo-img",
) );
