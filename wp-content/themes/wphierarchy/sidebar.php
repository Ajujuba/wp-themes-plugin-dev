<?php
    if(!is_active_sidebar('main-sidebar')){
        return;
    }
?>
<aside id="secondary" class="widget-area" role="complementary">

    <?php 

        //wp_loginout(); //Show option to login / logout in sidebar
        wp_loginout( get_permalink() ); //Show option to login / logout in sidebar and when I log I open my page and not my BO

        if(!is_user_logged_in()){
            $args = [
                'label_username' => 'Enter your user: ',
                'label_password' => 'Enter your pass: '
            ];
            wp_login_form($args); //Show login form inside my sidebar, so don't redirectto other page to login/logout
        }

        echo '<br><br>';

        $datas = [
            'type' => 'weekly', //I can use 'yearly too'
            'limit' => 5,
            'show_post_count' => true,
            'order' => 'DESC'
        ];
        wp_get_archives($datas); //Show in my side bar my posts group by weekly

        echo '<br><br>';

        get_calendar();

        dynamic_sidebar('main-sidebar');

    ?>

</aside>