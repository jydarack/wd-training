function jr_get_tags_but_exclude() {
    $args = array('exclude' => '36 17'); // see notes below
        $alltags = get_tags( $args );
        shuffle($alltags);
        $count=0;
        if ($alltags) {
            foreach($alltags as $tag) {
                $count++;
                echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
        if( $count >19 ) break;
        }
    }
}
