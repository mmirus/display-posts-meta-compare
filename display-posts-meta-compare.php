<?php
/*
Plugin Name: Display Posts Meta Compare
Plugin URI: https://github.com/mmirus/display-posts-meta-compare
Description: Add a meta_compare argument to the Display Posts shortcode
Author: Matt Mirus
Author URI: https://github.com/mmirus
Version: 1.0.0
GitHub Plugin URI: https://github.com/mmirus/display-posts-meta-compare
 */

add_filter('display_posts_shortcode_args', function ($args, $atts) {
    $comparison_types = ['=', '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN', 'EXISTS', 'NOT EXISTS', 'REGEXP', 'NOT REGEXP','RLIKE'];
    if (!empty($atts['meta_compare']) && in_array($atts['meta_compare'], $comparison_types)) {
        $args['meta_compare'] = $atts['meta_compare'];

        // if you're trying to compare against an empty string,
        // you need to use a meta_query; otherwise, meta_value
        // gets dropped when it's equal to an empty string, which
        // would break some comparisons, like meta_key != ''
        if (array_key_exists('meta_value', $atts) && $atts['meta_value'] === '') {
            $args['meta_query'] = [
              [
                'key' => $args['meta_key'],
                'compare' => $args['meta_compare'],
                'value' => $atts['meta_value'],
              ]
            ];
        }
    }
    return $args;
}, 10, 2);
