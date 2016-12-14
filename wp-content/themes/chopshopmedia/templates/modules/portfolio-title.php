
  <section class="wrapper pageTitle">

    <div class="container">

      <span class="pageTitle-number"><?php the_field( 'page_number', get_page_by_path( 'our-work' ) ); ?></span>

      <hr class="separator pageTitle-separator">

      <a href="<?php echo get_permalink( get_page_by_path( 'our-work' ) ); ?>"><h2 class="pageTitle-title"><?php echo get_the_title( get_page_by_path( 'our-work' ) ); ?></h2></a>

    </div>

  </section>
