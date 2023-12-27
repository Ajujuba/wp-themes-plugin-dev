<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title() ?></h1>
        </a>
    </header>

    <div class="entry-content">
        <p><?php the_content() ?></p>
    </div>
</article>