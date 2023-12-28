<?php
    get_header( 'splash' );
?>

    <div id="primary" class="content-area extended">
        <main id="main" class="site-main" role="main">
            <h1><?php the_archive_title()?></h1>
            <p><?php echo category_description()?></p>
            <hr>
            <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content')?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part('template-parts/content', 'none')?>
            <?php endif; ?>

            category-7.php
            <?php echo paginate_links()?>
        </main>
    </div>

    <?php get_sidebar(); ?>

<?php
    get_footer( 'splash' );
?>