<?php
if(function_exists('register_nav_menus')){     
	register_nav_menus(  
	    array(  
	    'header-menu' => __( '导航菜单' ),  
	    )  
    );  
} 
function test_function(){   
    add_theme_page( 'Lzy主题设置', 'Lzy主题设置', 'administrator', 'lzy_theme','display_function');   
}   
add_action('admin_menu', 'test_function');   
  
function display_function(){
	include("theme-options.php");      
	} 
?> 