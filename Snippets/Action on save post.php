<?
function my_acf_update_value( $value, $post_id, $field  ) {
    // update_field("news_link_name", "Test");
    // only do it to certain custom fields
    $news_url = get_field("news_link");
    if($news_url){
      $meta_header = get_news_header_info($news_url, $post_id);
      update_field("news_name", $meta_header["news_name"]);
      update_field("eyecatch_url", $meta_header["news_image_src"]);
      //update_post_meta( $post_id, '_thumbnail_id', $meta_header["news_image_src"] );
    } else {
      update_field("news_name", "ERROR");
    }

	// don't forget to return to be saved in the database
    return $value;

}

// acf/update_value - filter for every field
// Scrap information when saving the post
add_action('save_post', 'my_acf_update_value', 10, 3);
