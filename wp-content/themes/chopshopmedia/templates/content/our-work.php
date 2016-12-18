
  <section class="wrapper pageSection">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <nav class="sidebarNavigation">

          <a class="sidebarNavigation-menuItem" href="/about-us">01</a>
          <a class="sidebarNavigation-menuItem" href="/our-services">02</a>
          <!-- <a class="sidebarNavigation-menuItem" href="/our-work">03</a> -->
          <a class="sidebarNavigation-menuItem" href="/contact-us">04</a>

        </nav>

        <article <?php post_class('pageContent') ?> id="post-<?php the_ID(); ?>">

          <?php the_content( ); ?>

        </article>

      <?php endwhile; ?>

    </div>

  </section>


  <?php

    /**
     * The WordPress Query class.
     * @link http://codex.wordpress.org/Function_Reference/WP_Query
     *
     */
    $args = array(
      'post_type'      => 'portfolio',
      'posts_per_page' => -1,
      'post_status'    => array(
        'publish',
      ),
    );

  $query = get_posts( $args );

  foreach ($query as $key => $post) { setup_postdata( $post ); ?>

  <a href="<?php the_permalink(); ?>" class="portfolioTeaser">

    <div class="container">

      <div class="portfolioTeaser-content">

        <h3 class="portfolioTeaser-title"><?php the_title(); ?></h3>

        <span class="portfolioTeaser-services"><?php the_field( 'services' ); ?></span>

      </div>

    </div>

  </a>

  <?php } ?>
