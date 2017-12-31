<?php

/* ----------------------------------------------------------------------------------- */
# Meta box
/* ----------------------------------------------------------------------------------- */
$product_meta_box = array(
    'id' => 'product-meta-box',
    'title' => __('Information', 'aurum'),
    'page' => 'product',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => __('Màu CSS', 'aurum'),
            'desc' => '',
            'id' => 'maucss',
            'type' => 'text',
            'std' => '',
        ),
        array(
            'name' => __('Thành phần', 'aurum'),
            'desc' => '',
            'id' => 'thanhphan',
            'type' => 'textarea',
            'std' => '',
        ),
        array(
            'name' => __('Hiệu quả', 'aurum'),
            'desc' => '',
            'id' => 'hieuqua',
            'type' => 'textarea',
            'std' => '',
        ),
        array(
            'name' => __('Độ an toàn', 'aurum'),
            'desc' => '',
            'id' => 'antoan',
            'type' => 'textarea',
            'std' => '',
        ),
        array(
            'name' => __('Cách sử dụng', 'aurum'),
            'desc' => '',
            'id' => 'cachsudung',
            'type' => 'textarea',
            'std' => '',
        ),
));

// Add product meta box
if(is_admin()){
    add_action('admin_menu', 'product_add_box');
    add_action('save_post', 'product_add_box');
    add_action('save_post', 'product_save_data');
}

function product_add_box(){
    global $product_meta_box;
    add_meta_box($product_meta_box['id'], $product_meta_box['title'], 'product_show_box', $product_meta_box['page'], $product_meta_box['context'], $product_meta_box['priority']);
}
/**
 * Callback function to show fields in product meta box
 * @global array $product_meta_box
 * @global Object $post
 * @global array $area_fields
 */
function product_show_box() {
    global $product_meta_box, $post;
    custom_output_meta_box($product_meta_box, $post);    
}
/**
 * Save data from product meta box
 * @global array $product_meta_box
 * @param Object $post_id
 * @return 
 */
function product_save_data($post_id) {
    global $product_meta_box;
    custom_save_meta_box($product_meta_box, $post_id);
}

/* ----------------------------------------------------------------------------------- */
# Register main Scripts and Styles
/* ----------------------------------------------------------------------------------- */
add_action('admin_enqueue_scripts', 'product_register_scripts');

function product_register_scripts(){
    
    ## Register All Styles
    wp_register_style('colorpicker-template', THEMEASSETS . 'css/colorpicker.css');
    
    wp_enqueue_style('colorpicker-template');
    
    ## Register All Scripts
    wp_register_script(SHORT_NAME . '-colorpicker', THEMEASSETS . 'js/colorpicker.js', array('jquery'));
    wp_register_script(SHORT_NAME . '-scripts', THEMEASSETS . 'js/scripts.js', array('jquery'));

    ## Get Global Scripts
    wp_enqueue_script(SHORT_NAME . '-colorpicker');
    wp_enqueue_script(SHORT_NAME . '-scripts');
}