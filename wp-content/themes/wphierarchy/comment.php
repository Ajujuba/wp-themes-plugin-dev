<div id="<?php  comment_ID(); ?>" class="area-custom-comment">

    <div class="author-datas">
        <?php echo get_avatar(get_comment_author_email()); ?>
        <div class="personal-information">
            <?php  comment_author(); ?>
            | 
            <?php 
                //comment_date( 'm.d.y g:ia' ); 
                esc_html_e(
                    sprintf(
                        'Posted on %s - %s',
                        get_comment_date( 'd.m.y' ),
                        get_comment_time()
                    ),
                    'wphierarchy'
                );
            ?>
        </div>
    </div>

    <div class="my-comment-area">
        <?php comment_text(); ?>
    </div>

    <?php
        $args = [
            'depth' => 1,
            'max_depth' => 3,
        ];
        comment_reply_link($args);
    ?>

</div>
