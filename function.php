function lc_relative_date($post_time) {

    // Only apply to front-end
    if(!is_admin()) {

        global $post;
        $post_time = strtotime($post->post_date); 
        return human_time_diff($post_time, current_time('timestamp')).' '.__('ago');

    } else {

        // Output the date and time as normal in WP Admin
        return $post_time;

    }

}
add_filter('get_the_date', 'lc_relative_date', 10, 1); 
add_filter('the_date', 'lc_relative_date', 10, 1); 
add_filter('get_the_time', 'lc_relative_date', 10, 1); 
add_filter('the_time', 'lc_relative_date', 10, 1);
