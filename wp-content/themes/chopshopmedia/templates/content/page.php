
  <section class="wrapper pageSection">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <nav class="sidebarNavigation">

          <a class="sidebarNavigation-menuItem" href="/our-services">02</a>
          <a class="sidebarNavigation-menuItem" href="/our-work">03</a>
          <a class="sidebarNavigation-menuItem" href="/contact-us">04</a>

        </nav>

        <article <?php post_class('pageContent') ?> id="post-<?php the_ID(); ?>">



        </article>

      <?php endwhile; ?>

    </div>

  </section>
