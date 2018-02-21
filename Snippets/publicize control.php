<?
add_filter( 'wpas_submit_post?', 'vipx_wpas_submit_post', 10, 4 );
function vipx_wpas_submit_post( $ret, $post_id, $name, $connection ) {

    $categories = get_the_terms( $post_id, 'category' );
    if ( 'facebook' == $name ) {

        if ( is_array( $categories ) )
            $categories = wp_list_pluck( $categories, 'slug' );

        if ( !empty( $categories ) ||  in_array( 'news', $categories ) )
            $ret = false;

    }
    return $ret;
}
