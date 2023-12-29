<?php
    get_header();
?>

    <div id="primary" class="content-area extended">
        <h1><?php single_tag_title('Test archive tags Tags: ')?></h1>
        <main id="main" class="site-main" role="main">
            <h1><?php the_archive_title()?></h1>
            <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'portfolio')?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part('template-parts/content', 'none')?>
            <?php endif; ?>

            <?php echo paginate_links()?>
        </main>
    </div>
    <p>taxonomy-skills.php</p>
           
<?php
    get_footer();
?>