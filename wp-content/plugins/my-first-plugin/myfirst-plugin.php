<?php
/*
 Plugin Name: My First Plugins
 Plugin URI: http://www.start-nay.blogspot.com
 Description: A first plugins to test
 Author : Nay
 Version: 1.0
 Author URI: https://www.start-nay.blogspot.com 
 */

add_action('admin_menu','myfirstplugin_admin_actions');
    function myfirstplugin_admin_actions(){
        add_options_page(
                'MyFirstPlugin',
                'MyFirstPlusin',
                'manage_options',
                __FILE__,
                'myfirstplugin_admin'/***function name that display content page*****/
                );
    }

    
    function myfirstplugin_admin(){
        ?>
<div class="wrap">
    <h4> A More Interesting Hello World Plugin</h4>
    <table class="widefat">
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Post Id</th>
            </tr>
        </thead>
        <tbody>
            
           <?php
                    global $wp_query;
                    $wp_query=new WP_Query(['posts_per_page'=>-1] );
                    while(have_posts()){
                        the_post();
                        echo '<tr>'.
                                '<td>'.get_the_title().'</td>'.
                                '<td>'.get_the_ID().'</td>'.
                             '</tr>';
                    }
           ?> 
        </tbody>
        
        <tfoot>
             <tr>
                <th>Post Title</th>
                <th>Post Id</th>
            </tr>
        </tfoot>
    </table>
</div>

    <?php    
    }
?>