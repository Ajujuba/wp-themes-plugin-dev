<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="author-bio">
                <div class="author-bio">
                    <h1><?php the_archive_title(); ?></h1>
                    <img src="<?php ;?>" alt="">
                    <h2><?php the_author_meta( 'display_name' ) ?></h2>
                    <ul>
                        <li>user_login: <?php the_author_meta( 'user_login' ); ?></li>
                        <li>user_pass: <?php the_author_meta( 'user_pass' ); ?></li>
                        <li>user_nicename: <?php the_author_meta( 'user_nicename' ); ?></li>
                        <li>user_email: <?php the_author_meta( 'user_email' ); ?></li>
                        <li>user_url: <?php the_author_meta( 'user_url' ); ?></li>
                        <li>display_name: <?php the_author_meta( 'display_name' ); ?></li>
                        <li>nickname: <?php the_author_meta( 'nickname' ); ?></li>
                        <li>first_name: <?php the_author_meta( 'first_name' ); ?></li>
                        <li>last_name: <?php the_author_meta( 'last_name' ); ?></li>
                        <li>description: <?php the_author_meta( 'description' ); ?></li>
                        <li>user_level: <?php the_author_meta( 'user_level' ); ?></li>
                        <li>get_avatar <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></li>
                        <li>get_edit_user_link
                            <a href="<?php echo get_edit_user_link( get_the_author_meta( 'ID' ) ); ?>">
                                <?php _e( 'Edit', 'wphierarchy' ); ?>
                            </a>
                        </li>
                    </ul>
                    <br>
                </div>
                <p>
                    <?php echo the_author_meta( 'description', $post->post_author ); ?>
                </p>
            </div>

            <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format())?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part('template-parts/content', 'none')?>
            <?php endif; ?>

            <?php echo paginate_links(); ?>
            <!-- <p class="prev-posts"><?php previous_posts_link(); ?></p>
            <p class="next-posts"><?php next_posts_link(); ?></p> -->

            <p>Template: author.php</p>

        </main>
    </div>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>
