
  <section class="wrapper pageSection">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <nav class="sidebarNavigation">

          <a class="sidebarNavigation-menuItem" href="/our-services">back</a>

        </nav>

        <article <?php post_class('pageContent') ?> id="post-<?php the_ID(); ?>">

          <h1 class="pageContent-pageTitle"><?php echo roots_title() ?></h1>
          <?php the_field( 'content' ); ?>

        </article>

      <?php endwhile; ?>

    </div>

  </section>


  <section class="gallery">

    <?php

    // --------------------------------------------------------------------------
    //   Gallery
    // --------------------------------------------------------------------------

    if ( have_rows( 'gallery' ) ) {

      while ( have_rows( 'gallery' ) ) { the_row();

        if ( get_row_layout() == 'three_images' ) {

          $images = get_sub_field( 'images' );

          if ( $images ) { ?>

            <div class="galleryRow galleryRow--three">

              <?php foreach ( $images as $image ) { ?>

                <figure class="galleryRow-image" style="background-image: url(<?php echo $image['url']; ?>)" title="<?php echo $image['alt']; ?>"></figure>

              <?php } ?>

            </div>

          <?php }

        } elseif ( get_row_layout() == 'two_blocks' ) {

          $blocks = get_sub_field( 'blocks' );

          if ( $blocks ) { ?>

            <div class="galleryRow galleryRow--two">

              <?php foreach ( $blocks as $block ) { ?>

                <div class="galleryRow-block <?php if ($block['video']) echo 'galleryRow-block--video' ?>" style="background-image: url(<?php echo $block['image']['url']; ?>)" title="<?php echo $block['image']['alt']; ?>">

                  <?php if ($block['video']) { ?>
                    <a href="#<?php //echo $block['video']['url'] ?>" data-featherlight="#lbtest" class="galleryRow-block-link">Watch Video</a>
                  <?php } ?>

                  <iframe src="<?php echo $block['video']['url'] ?>" width="1280" height="720" id="lbtest" class="lightbox" style="border:none;" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

                </div>

              <?php } ?>

            </div>

          <?php }

        }
      }
    }

    ?>

  </section>
