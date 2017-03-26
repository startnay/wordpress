<?php
/*
Plugin Name: Posts
 
 */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function person_post_admin(){
    add_posts_page('Person-Page','Person-Menu','manage_options','person-posts','person_post_content_handler');
    
}

function person_post_content_handler(){
    
}
add_action('admin_menu','person_post_admin');