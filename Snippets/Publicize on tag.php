<?
/**
 * Do not trigger Publicize if the post uses the `private` tag.
 */
function jeherve_control_publicize( $should_publicize, $post ) {
    // Return early if we don't have a post yet (it hasn't been saved as a draft)
    if ( ! $post ) {
        return $should_publicize;
    }

    // Get list of tags for our post.
    $tags = wp_get_post_tags( $post->ID );

    // Loop though all tags, and return false if the tag's name is `private`
    foreach ( $tags as $tag ) {
        if ( 'private' == $tag->name ) {
            return false;
        }
    }

    return $should_publicize;
}
add_filter( 'publicize_should_publicize_published_post', 'jeherve_control_publicize', 10, 2 );
