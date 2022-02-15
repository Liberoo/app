<?php
wp_enqueue_script('jquery', get_template_directory_uri() . '/bower_components/foundation/js/vendor/jquery.js', array(), '2.1.3', false);
//Global Sections
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Global Sections',
        'menu_title'    => 'Global Sections',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => true
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Header',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}


//Blocks
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        //open section block
        acf_register_block_type(array(
            'name'              => 'Hero Section with background',
            'title'             => __('Hero Section with background'),
            'description'       => __('Hero Section block with background'),
            'render_template'   => 'blocks/open.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('Hero', 'Open'),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/css/open.css',
            'category'          => 'formatting',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'Cart',
            'title'             => __('Cart'),
            'description'       => __('Cart'),
            'render_template'   => 'blocks/cart.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('Hero', 'Open'),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/css/cart.css',
            'category'          => 'formatting',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'Hero with list',
            'title'             => __('Hero section with list'),
            'description'       => __('Hero section with list'),
            'render_template'   => 'blocks/list.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('Hero', 'List Items'),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/css/list.css',
            'category'          => 'formatting',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'Hero with Accordion',
            'title'             => __('Hero section with accordion'),
            'description'       => __('Hero section with accordion'),
            'render_template'   => 'blocks/heroAccordion.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('Hero', 'List Items'),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/css/heroAccordion.css',
            'category'          => 'formatting',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'Accordion',
            'title'             => __('Accordion'),
            'description'       => __('Accordion'),
            'render_template'   => 'blocks/accordion.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('Hero', 'List Items'),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/css/accordion.css',
            'enqueue_script'     => get_template_directory_uri() . '/blocks/js/accordion.js',
            'category'          => 'formatting',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'Counter',
            'title'             => __('Counter'),
            'description'       => __('Counter'),
            'render_template'   => 'blocks/counter.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('Hero', 'List Items'),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/css/counter.css',
            'enqueue_script'     => get_template_directory_uri() . '/blocks/js/coutner.js',
            'category'          => 'formatting',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
    }
}
function ghub_child_setup()
{
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'ghub_child_setup');


//unclocs svg files
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
