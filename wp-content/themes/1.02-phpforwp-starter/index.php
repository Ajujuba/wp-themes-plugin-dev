<?php get_header(); ?>

    <div id="content">

    <?php
      #CLASS 1 - Theme 1.02
      // Create a variable called $name and assign it your name
      $name = 'Ana';

      echo '<h1>CLASS 1:</h1>';
      echo '<h2> Welcome!</h2>';

      echo '<p>My name is ' . $name . ' </p>';

      echo '---------------------------------------<br>';

      #---------------------------------------------------------

      #CLASS 2 - Theme 1.04
      // Create an array of post objects using the display_post function
      $post_titles = [
        'Hello World',
        'Hello PHP',
        'Hello Ana',
        'Test show string'
      ];

      echo '<h1>CLASS 2</h1>'; 
      // Loop through array of posts and display each one on the page
      foreach($post_titles as $post_title){
        // Call the display_title function and pass it the $post
        display_title($post_title);
      }

      function display_title( $title ) {
        echo "<h3>$title</h3>";
      }
      echo '---------------------------------------<br>';

      #---------------------------------------------------------

      #CLASS 3 - Theme 1.08
      // PRATICE LOOP
      echo '<h1>CLASS 3: </h1>';
      if( have_posts() ){
        while(have_posts()){
          the_post();
          echo '<h2>' . get_the_title() . '</h2>';
          the_content();
        }
      }else{
       _e('Sorry, No content found!', 'phpfowp');
      }

      echo '<br/>---------------------------------------<br>';

      #---------------------------------------------------------

      #CLASS 4 - Theme 1.10
      // PRATICE TEMPLATE TAGS
      echo '<h1>CLASS 4: </h1>';
      if( have_posts() ){
        while(have_posts()){
          the_post();
          echo '<article>';
            echo '<h2>' . get_the_title() . '</h2>';
            the_content();
            echo '<footer>';
              echo '<p class="byline">';
                echo 'Author: <a href="' . get_author_posts_url( $post->post_author) . '"> ' . get_the_author() . ' </a>';
                echo '<br/>Date: ' . get_the_time('M. j, Y');
                echo '<br/>Categories: '; the_category(',');
                echo '<br/>Tags: '; the_tags('', ',', '');
              echo '</p>';
            echo '</footer>';
          echo '</article>';
        }
      }else{
       _e('Sorry, No content found!', 'phpfowp');
      }

      echo '<br/>---------------------------------------<br>';

      #---------------------------------------------------------

      #CLASS 5 - Theme 1.12
      // PRATICE CONDITIONAL TAGS
      echo '<h1>CLASS 5: </h1>';
      if( is_front_page() && !is_home() ): ?>
        <!-- Static Front Page -->
        <h1>Static Front Page</h1>
      <?php endif; ?>
  
      <!-- Blog Home -->
      <?php if( is_home() ): ?>
        <h1>Blog Home</h1>
      <?php endif; ?>
  
      <!-- Page (Not Front Page) -->
      <?php if( is_page() &&  !is_front_page() ): ?>
        <h1>Page</h1>
      <?php endif; ?>
  
      <!-- Single Post -->
      <?php if( is_single() && !is_attachment() ): ?>
        <h1>Post</h1>
      <?php endif; ?>
  
      <!-- Attachment (Media) -->
      <?php if( is_attachment() ): ?>
        <h1>Attachment</h1>
      <?php endif; ?>
  
      <!-- Category Archive - To test use yoursite/category/yourCategory -->
      <?php if( is_category() ):  ?>
        <h1><?php single_cat_title(); ?></h1>
      <?php endif; ?>
  
      <!-- Tag Archive - To test use yoursite/tag/yourTag -->
      <?php if( is_tag() ): ?>
        <h1><?php single_tag_title(); ?></h1>
      <?php endif; ?>
  
      <!-- Author Archive -->
      <?php if( is_author() ): ?>
        <h1><?php the_archive_title(); ?></h1>
      <?php endif; ?>
  
      <!-- Date Archive - To test use yoursite/2023 -->
      <?php if( is_date() ): ?>
        <h1><?php the_archive_title(); ?></h1>
      <?php endif; ?>
  
      <!-- 404 Page - To test use yoursite/qualquerCoisa -->
      <?php if( is_404() ): ?>
        <h1><?php esc_html_e( '404 - Content not found', 'phpforwp' ); ?></h1>
      <?php endif;

      echo '<br/>---------------------------------------<br>';

      #---------------------------------------------------------

      #CLASS 6 - Theme 1.14
      // PRATICE HOOKS
      echo '<h1>CLASS 6: </h1>';
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="<?php post_class(); ?>">

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p class="byline">
          </p>

          <?php the_excerpt(); ?>

          <footer>
            <p class="byline">
              Author:
              <a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php the_author(); ?></a> |
              Date: <?php the_time( 'M. j, Y' ); ?> |
              Categories: <?php the_category( ',' ); ?> |
              Tags: <?php the_tags( '', ',', '' ); ?>
            </p>
          </footer>

        </article>

      <?php endwhile; else: ?>

        <h2><?php esc_html_e( '404 Error' ); ?></h2>
        <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

      <?php endif;

      echo '---------------------------------------<br>';
    ?>

  </div>

  <?php get_footer(); ?>