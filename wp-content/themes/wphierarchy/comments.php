<?php
    if ( post_password_required() ) {
        return;
    }
?>

<div id="comments">

    <?php if( have_comments() ): ?>

        <?php
            $comments_total = get_comments_number( $post->ID );
            if( 1 == $comments_total ):
        ?>

        <h2><?php esc_html_e( '1 Comment', 'wphierarchy' ); ?></h2>

    <?php else: ?>

        <h2><?php esc_html_e( $comments_total . ' Comments', 'wphierarchy' ); ?></h2>

        <?php endif; ?>

        <ul>
        <?php

            // Show default comment list
            // wp_list_comments();

            // Custom comment list
            $args = [
                'callback' => 'wphierarchy_comment',
            ];
            wp_list_comments( $args );
            paginate_comments_links();
        ?>
        </ul>


    <?php endif; ?>

    <?php 
        if(comments_open()){
            comment_form(); 
        }else{
            echo '<p class="no-comments"> ' . esc_html_e( 'Comments are closed.', 'wphierarchy' );
            echo '</p>';
        }

    ?>

</div>
