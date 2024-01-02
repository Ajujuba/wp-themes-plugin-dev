<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile; else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
            
            <?php 
                //Link tags:
                edit_post_link('Edit this', '<p>', '</p>');

                echo '<a href=' . get_delete_post_link($post->ID, '', false) .'> Delete this </a>';
            ?>
            <p>Template: page.php</p>
        </main>
    </div>
    <?php get_sidebar( 'page' ); ?>
<?php get_footer(); ?>
