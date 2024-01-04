<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
    <header class="entry-header">
        <?php echo get_post_format($post->ID) ?>
        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title() ?></h1>
            <div class="byline">
                Date: <?php the_time('F j, Y'); ?> |
                <?php esc_html_e('Author: '); the_author_posts_link(); ?> (<?php the_author_posts()?>) |
                <?php  esc_html_e('Category: '); the_category(' , ', ''); ?> |
                <?php  esc_html_e('Tags: ');  the_tags(' , ', ''); ?>
            </div>
        </a>
    </header>

    <div class="entry-content">
        <p><?php the_content() ?></p>
    </div>

    <?php 
        if( comments_open() ){
            comments_template();
        }
    ?>
</article>