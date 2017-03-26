<?php
/*
  Plugin Name:Admin Menu Page
 *
 */
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Register a custom menu page.
 */

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
            __('Custom Menu Title', 'textdomain'), 'custom menu', 'manage_options', 'custompage', 'my_custom_menu_page', plugins_url('myplugin/images/icon.png'), 6
    );
}

add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

/**
 * Display a custom menu page
 */
function my_custom_menu_page() {
    ?>
    <div class="wrap">
        <table class="widefat">
               <thead>
                <tr>
               <th>ID</th>
               <th>Name</th>
               </tr>
               </thead>
               <tbody>
               </tbody>
            <tfoot>
               <tr>
                   <th>ID</th>
                    <th>Name</th>
                </tr>
            </tfoot>
        </table>
     </div>
               <?php
           }
           ?>