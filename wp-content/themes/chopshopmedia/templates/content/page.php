
  <section class="wrapper page-content">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">



        </article>

      <?php endwhile; ?>

    </div>

  </section>
