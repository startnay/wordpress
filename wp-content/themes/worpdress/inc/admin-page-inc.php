<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function worpdress_admin_page(){
    add_menu_page(
            'Worpdress Option',
            'Worpdress',
            'manage_options',
            'worpdress_admin',
            'worpdress_create_page',
            'dashicons-wordpress',
            110
            
            );
    add_action('admin_init','worpdress_custom_settings');
}

function worpdress_custom_settings(){
    register_setting('worpdress-settings-group','first_name');
    add_settings_section('worpdress-sidebar-options','Sidebar Options','worpdress_sidebar_options','worpdress_admin');   
}

function worpdress_sidebar_options(){
    echo '<p>Customize Sidebar Information</p>';
}
add_action('admin_menu', 'worpdress_admin_page');
function worpdress_create_page(){
    //Generate page Admin 
    ?>
    <h1>Worpdress Generate</h1>
    <?php var_dump(current_user_can('install_themes')); ?>
    <form method="post" action="">
        <?php settings_fields('worpdress_settings_group'); ?>
        
    </form>
<?php
}