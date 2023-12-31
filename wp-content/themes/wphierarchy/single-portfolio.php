<?php get_header(); ?>
    <div id="primary" class="content-area extended">
        <main id="main" class="site-main" role="main">
            <a href="<?php echo site_url('/portfolio'); ?>"> Back Portfolio </a>
            <hr>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1>', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                                if(has_post_thumbnail()){
                                    $attr = [
                                        'class' => 'test-ana',
                                        'title' => get_the_title()
                                    ]; // if you inspect the image in portfolio you can see this attributes in the tag img
                                    the_post_thumbnail( 'full' , $attr);
                                }
                            ?>
                        </a>
                        <?php the_content(); ?>
                        <p>
                            Skills:
                            <?php the_terms($post->ID, 'skills') ?>
                        </p>
                        <p>
                            <a class="button" href="#">
                                <?php esc_html_e( 'Visit the Site', 'wphierarchy' ); ?>
                            </a>
                        </p>
                    </div>
                </article>

            <?php endwhile; endif; ?>

            <p>Template: single-portfolio.php</p>
        </main>
    </div>
<?php get_footer(); ?>
