        </div><!-- div#content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            &copy; <?php echo date('Y') ?> | <?php echo bloginfo('name')?>
            <br>
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wphierarchy' ) ); ?>">
                <?php printf( esc_html__( 'Proudly powered by %s', 'wphierarchy' ), 'WordPress' ); ?>
            </a>
            <?php 
                wp_footer(); //Add my admin bar 
                $args = [
                    'theme_location' => 'footer-menu-code',
                    //Main wrapper around the ul of posts
                    'container'       =>  'div',
                    'container_id'    =>  'container-id',
                    // Add text before link text (outside a tag)
                    'before'          =>  '< ',
                    'after'           =>  ' >',
                    // Depth of child nav items to show
                    'depth'           =>  0,
                    // Callback function if menu is not available
                    'fallback_cb'     =>  false,
                ];
                wp_nav_menu( $args );
            ?> 
        </footer>

    </div><!-- div#page -->
</body>
</html>
