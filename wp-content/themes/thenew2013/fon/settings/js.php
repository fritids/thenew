<?php // Chargement des JS
add_action('init', 'fon_script_init');
function fon_script_init() {
    if (!is_admin()){
        wp_deregister_script( 'jquery' ); // unregistered key jQuery
        // wp_enqueue_script('jquery',ASSETS_URL.'/js/lib/jquery-1.7.1.min.js','','1.7.1',false);
        wp_enqueue_script('canvasloader',ASSETS_URL.'/js/lib/heartcode-canvasloader-min-0.9.1.js','','0.9.1',false);
        wp_enqueue_script('mootools',ASSETS_URL.'/js/lib/mootools-core-1.3.2-full-compat-yc.js','','1.3.2',false);
        wp_enqueue_script('mootools-more',ASSETS_URL.'/js/lib/mootools-more-1.4.0.1.js','','1.4.0.1',false);
        wp_enqueue_script('modernizr',ASSETS_URL.'/js/lib/modernizr-1.7.min.js','','1.7',false);
        wp_enqueue_script('fondations',ASSETS_URL.'/js/fondations.js','','1.0',false);
        wp_enqueue_script('functions',ASSETS_URL.'/js/functions.js','','1.0',false);
        // wp_enqueue_script('fonsearch',ASSETS_URL.'/js/Fon_search.js','','1.0',false);
        wp_enqueue_script('events',ASSETS_URL.'/js/events.js','','1.0',false);
    }
    // Admin
    else {
        // wp_deregister_script( 'jquery' ); // unregistered key jQuery
        // wp_enqueue_script('jquery',ASSETS_URL.'/js/lib/jquery-1.7.1.min.js','','1.7.1',false);
        // wp_enqueue_script('mediaupload',ASSETS_URL.'/js/media-upload.js','','1.0',false);
        // wp_enqueue_script('admin',ASSETS_URL.'/js/admin.js','','1.0',false);
    }
}