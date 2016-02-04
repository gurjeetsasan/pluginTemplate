<?php 
/*
	Plugin Name: Plugin Template.
	Plugin URI: 
	Description: This is template for creating Plugins.
	Version: 0.1
	Author: Gurjeet singh.
	Author URI:
	License:
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class PluginTemplate {

    //** Constructor **//
    function __construct() {

        //** Action to load Assets Css **//
        // add_action( 'wp_enqueue_scripts',  array(&$this, 'loadAssectCss') );
        // add_action( 'admin_enqueue_scripts',  array(&$this, 'loadAdminAssects') );

        //** Register menu. **//
        add_action('admin_menu', array(&$this, 'register_plugin_menu') );
    }

    function loadAdminAssects( $hook ){
        
        //** Load  Styling. **//
        /*wp_enqueue_style( 'PluginTemplate-datatables-css', 'https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css' );
        wp_enqueue_script('PluginTemplate-datatables','https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js',array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'PluginTemplate-custom -js', plugin_dir_url( __FILE__ ) . '/js/custom_script.js' );       */
    }

    function loadAssectCss(){
        $plugin_url = plugin_dir_url( __FILE__ );

        //** Load  Styling. **//
        //wp_enqueue_style( 'PluginTemplate_style', $plugin_url . 'css/mmi_search_style.css' );   
        // wp_enqueue_script('PluginTemplate-datatables','https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js',array('jquery'), '1.0.0', true );
        
    }

    //** Register menu Item. **//
    function register_plugin_menu(){
            add_menu_page( 'PluginTemplate', 'PluginTemplate', 'manage_options', 'PluginTemplate', array(&$this, 'admin_page'), '', 26 );
            add_submenu_page('PluginTemplate', 'PluginTemplateSubPage', 'sub Page', 'manage_options','sub-page', array(&$this, 'sub_page'));
            
    }


    /*function to show the page. */
    function admin_page(){
        /*Admin page content goes here */
    }

    /*function for sub page. */
    function sub_page(){
        /*Admin page content goes here */
    }
}

/*  create plugin object. */
$PluginTemplate = new PluginTemplate;
?>