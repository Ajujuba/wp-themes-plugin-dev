<?php
    #get_header('splash'); //As I created the header-splash.php file I can give the parameter to load my specific header on a specific page
    get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'posts')?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part('template-parts/content', 'none')?>
            <?php endif; ?>
        </main>
        front-page.php :D
    </div>

    <?php get_sidebar(); ?>

<?php
    #get_footer('splash');
    get_footer();
?>