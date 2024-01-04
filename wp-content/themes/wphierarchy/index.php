<?php
    #get_header('splash'); //As I created the header-splash.php file I can give the parameter to load my specific header on a specific page
    get_header();
?>

    <div id="primary" class="content-area">
        <h2><?php _e( 'Sanitization Tags', 'wptags' ); ?></h2>
        <ul>
            <li>
                sanitize_text_field
                <?php echo sanitize_text_field( "<h1>Header</h1>" ); ?>
            </li>
            <li>
                sanitize_title
                <?php echo sanitize_title( "<h1>Post Title</h1>" ); ?>
            </li>
            <li>
                sanitize_email
                <?php echo sanitize_email( "edu c<tion>@zacgordon.com" ); ?>
            </li>
            <li>
                sanitize_html_class
                <?php echo sanitize_html_class( "new## class*%" ); ?>
            </li>
            <li>
                esc_url_raw
                <?php echo esc_url_raw( "https;//`javascript<forwp>.com" ); ?>
            </li>
        </ul>

        <h2><?php _e( 'Escaping Tags', 'wptags' ); ?></h2>
        <ul>
            <li>
                esc_html
                <?php echo esc_html( '<h1>Hello</h1>' ); ?>
            </li>
            <li>
                esc_url
                <?php echo esc_url( 'https://javascript <<>forwp.com' ); ?>
            </li>
            <li>
                esc_js
                <script>
                    <?php echo esc_js( "alert( 'Hello!' );" ); ?>
                </script>
            </li>
            <li>
                esc_attr
                <span title="<?php echo esc_attr( '<"%&h> another 9*&^%$#@!<h1>' ); ?>">Span w ID</span>
            </li>
            <li>
                esc_textarea
                <?php
                echo esc_textarea( '<input type="submit">' ); ?>
            </li>
        </ul>

        <h2><?php _e( 'Localization Tags', 'wptags' ); ?></h2>
        <ul>
            <li>
                esc_html_e
                <?php esc_html_e( '<h1>Hello!</h1>' ); ?>
            </li>
            <li>
                esc_html__
                <?php $title = esc_html__( '<h1>Hello!</h1>' ); ?>
            </li>
            <li>
                _e
                <?php _e( 'Hello! <em>Em</em>', 'wptags' ); ?>
            </li>
            <li>
                __
                <?php __( 'Hello! <em>Em</em>', 'wptags' ); ?>
            </li>
        </ul>

        <h1><?php single_post_title('Test achive tags Post: ')?></h1>
        <main id="main" class="site-main" role="main">
            <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content')?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part('template-parts/content', 'none')?>
            <?php endif; ?>

            <?php echo paginate_links()?>
            blog.php
        </main>
    </div>

    <?php get_sidebar(); ?>

<?php
    #get_footer('splash');
    get_footer();
?>