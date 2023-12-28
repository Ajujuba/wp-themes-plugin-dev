<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
    <header class="entry-header">
        <h1><?php esc_html_e('404 - page not found', 'wphierarchy') ?></h1> <!-- add 404 page -->
    </header>

    <div class="entry-content">
        <p><?php esc_html_e('Sorry! No content found', 'wphierarchy') ?></p>
        <p>
            <?php echo get_search_form() ?>
        </p>
    </div>
</article>