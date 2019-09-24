<?php

function load_stylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery(){

    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', 1, true);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs(){

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme')
    )
    );

function page_titles() {
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'page_titles');

function company_post_types(){
    register_post_type('company_info', array(
        'public' => true,
        'labels' => array(
            'name' => 'Company Info',
            'add_new_item' => 'Add new Info',
            'edit_item' => 'Edit Info',
            'all_items' => 'All Info'
        )
        ));
}

add_action('init', 'company_post_types');

