<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
    <header class="entry-header">
        <?php echo get_post_format($post->ID) ?>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title() ?></h2>
            <div class="byline">
                <?php esc_html_e('Author: '); the_author(); ?>
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