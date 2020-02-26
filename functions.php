<?php 
     function featureImage(){
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300,300);
    }
    add_action('after_setup_theme','featureImage');

    function menu(){
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu'),
        ));
    }
    add_action('after_setup_theme','menu');

?>