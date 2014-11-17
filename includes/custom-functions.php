<?php

/**
 *	Pagination
 */
function denta_lite_pagination() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="articles-pagination"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li class="pagination-previous">%s</li>' . "\n", get_previous_posts_link( '' ) );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="pagination-active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li><a title="Pagination">&hellip;</a></li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="pagination-active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li><a title="Pagination">&hellip;</a></li>' . "\n";

		$class = $paged == $max ? ' class="pagination-active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li class="pagination-next">%s</li>' . "\n", get_next_posts_link( '' ) );

	echo '</ul></div>' . "\n";

}

/**
 *	Comments
 */
if ( ! function_exists( 'denta_lite_comments' ) ) :

function denta_lite_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'ti' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'ti' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="comment-<?php comment_ID(); ?>" class="cf">
        	<div class="comment-gravatar">
        		<?php echo get_avatar( $comment, 115 ); ?>
        	</div><!--/.comment-gravatar-->
        	<div class="comment-content">
        		<div class="comment-content-meta">
        			<div class="content-meta-left">
        				<?php printf( __( '<span class="meta-left-author">%s</span>', 'ti' ), sprintf( '%s', get_comment_author_link() ) ); ?>
        				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" class="content-meta-date">
	                        <time pubdate datetime="<?php comment_time( 'c' ); ?>">
	                            <?php printf( __( '%1$s at %2$s', 'ti' ), get_comment_date(), get_comment_time() ); ?>
	                        </time>
	                    </a><!--/.content-meta-date-->
        			</div><!--/.content-meta-left-->
        			<div class="content-meta-right">
        				<?php edit_comment_link( __( 'Edit comment', 'ti' ), '' ); ?>
        				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        			</div><!--/.content-meta-right-->
        		</div><!--/.comment-content-meta-->
        		<div class="comment-content-entry">
        			<?php comment_text(); ?>
        			<?php if ( $comment->comment_approved == '0' ) : ?>
	                    <em class="awaiting-moderation cf">
	                    	<?php _e( 'Your comment is awaiting moderation.', 'ti' ); ?>
	                    </em>
	                <?php endif; ?>
        		</div><!--/.comment-content-entry-->
        	</div><!--/.comment-content-->
        </article><!--/article-->

    <?php
            break;
    endswitch;
}
endif;

/**
 *  Post Gallery
 */
add_filter('post_gallery', 'denta_lite_post_gallery', 10, 2);
function denta_lite_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';
    // Here's your actual output, you may customize it to your need
    $output = "<div id='custom-gallery gallery-". $post->ID ."' class='gallery galleryid-". $post->ID ." gallery-columns-". $columns ."'>\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<dl class='gallery-item gallery-columns-". $columns ."'>";
        $output .= "<a href=\"{$img[0]}\" rel='post-". $post->ID ."' class=\"fancybox\" title='". $attachment->post_excerpt ."'>\n";
        $output .= "<div class='gallery-item-thumb'><img src=\"{$img[0]}\" alt='". $attachment->post_excerpt ."' /></div>\n";
        $output .= "<div class='wp-caption-text'>";
        $output .= $attachment->post_excerpt;
        $output .= "</div>";
        $output .= "</a>\n";
        $output .= "</dl>";
    }

    $output .= "</div>\n";

    return $output;
}

?>