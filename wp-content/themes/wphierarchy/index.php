<?php
    #get_header('splash'); //As I created the header-splash.php file I can give the parameter to load my specific header on a specific page
    get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
                <header class="entry-header">
                    <h1><?php the_title() ?></h1>
                </header>

                <div class="entry-content">
                    <p><?php the_content() ?></p>
                </div>
            </article>
        </main>
    </div>

    <?php get_sidebar(); ?>

<?php
    #get_footer('splash');
    get_footer();
?>