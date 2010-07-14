<?php

// Register widgetized areas

function the_widgets_init() {
    if ( !function_exists('register_sidebars') )
        return;

    register_sidebars(1,array('name' => 'Sidebar','before_widget' => '<div id="%1$s" class="block widget %2$s">','after_widget' => '</div>','before_title' => '<h2>','after_title' => '</h2><div class="fix"></div>'));
    register_sidebars(3,array('name' => 'Footer %d','before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h2 class="widget_title">','after_title' => '</h2><div class="fix"></div>'));
    register_sidebars(1,array('name' => 'Sidebar Top','before_widget' => '<div id="%1$s" class="block widget %2$s">','after_widget' => '</div>','before_title' => '<h2>','after_title' => '</h2><div class="fix"></div>'));

}

add_action( 'init', 'the_widgets_init' );


    
?>