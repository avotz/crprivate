<?php

function crprivate_get_meta_box($meta_boxes)
{
	$prefix = 'rw_';

	$meta_boxes[] = array(
		'id' => 'info-gallery',
		'title' => esc_html__('Additional Info', 'crprivate'),
		'post_types' => array('tour', 'page'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'gallery',
				'type' => 'image_advanced',
				'name' => esc_html__('Gallery', 'crprivate'),
			),
		
		),
    );
    
    $meta_boxes[] = array(
		'id' => 'info-options',
		'title' => esc_html__('Options Info', 'crprivate'),
		'post_types' => array('tour'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
            array(
				'name' => __('Option Title', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_title_1',
				'type' => 'text',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
			),
			array(
				'name' => __('Option Details', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_details_1',
				'type' => 'wysiwyg',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
            ),
             array(
				'name' => __('Option Title', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_title_2',
				'type' => 'text',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
			),
			array(
				'name' => __('Option Details', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_details_2',
				'type' => 'wysiwyg',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
            ),
             array(
				'name' => __('Option Title', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_title_3',
				'type' => 'text',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
			),
			array(
				'name' => __('Option Details', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_details_3',
				'type' => 'wysiwyg',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
            ),
             array(
				'name' => __('Option Title', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_title_4',
				'type' => 'text',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
			),
			array(
				'name' => __('Option Details', 'crprivate'),
				'desc' => '',
				'id' => $prefix . 'op_details_4',
				'type' => 'wysiwyg',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
			),
		),
	);

	return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'crprivate_get_meta_box');