<?
// Change the permalink for News posts
add_filter( 'post_link', 'chocolife_external_permalink', 10, 2 );

/**
 * Parse post link and replace it with meta value.
 *
 * @wp-hook post_link
 * @param   string $link
 * @param   object $post
 * @return  string
 */
function chocolife_external_permalink( $link, $post )
{
    //$meta = get_post_meta( $post->ID, 'syndication_permalink', TRUE );
    $meta = get_field("news_link");
    $url  = esc_url( filter_var( $meta, FILTER_VALIDATE_URL ) );

    return $url ? $url : $link;
}
