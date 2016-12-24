
  <?php if (have_rows('testimonials', 'options')) { ?>

  <section class="quoteSlider">

    <?php while (have_rows('testimonials', 'options')) { the_row(); ?>

    <div class="quoteSlider-slide">

      <div class="container">

        <?php $image = get_sub_field( 'logo' ); ?>

        <div class="sectionSplit sectionSplit--small">
          <img class="quoteSlider-logo" alt="<?php the_sub_field( 'author' ); ?>" src="<?php echo $image['url'] ?>">
        </div>

        <div class="sectionSplit sectionSplit--large">

          <div class="quoteSlider-services"><?php the_sub_field( 'services' ); ?></div>

          <hr class="separator quoteSlider-separator">

          <blockquote class="quoteSlider-quote"><?php the_sub_field( 'content' ); ?></blockquote>

          <span class="quoteSlider-author"><?php the_sub_field( 'author' ); ?></span>

        </div>

      </div>

    </div>

    <?php } ?>

  </section>

  <?php } ?>
