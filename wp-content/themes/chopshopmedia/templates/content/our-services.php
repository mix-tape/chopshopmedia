
  <section class="wrapper pageSection">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <nav class="sidebarNavigation">

          <a class="sidebarNavigation-menuItem" href="/about-us">01</a>
          <!-- <a class="sidebarNavigation-menuItem" href="/our-services">02</a> -->
          <a class="sidebarNavigation-menuItem" href="/our-work">03</a>
          <a class="sidebarNavigation-menuItem" href="/contact-us">04</a>

        </nav>

        <article <?php post_class('pageContent') ?> id="post-<?php the_ID(); ?>">

          <h2>Our service capabilities allow us to bridge the gap that exists between idea and execution.</h2>

          <p>A wise man once said that a camel is a horse designed by committee. Our work history has taught us that the best work is done when less people are involved - all you need are the right skills and experience. We have built our service offering on a foundation of streamlined process and minimal administration layers in order to maximise the creative return for your dollar. We don’t claim to know everything, on the contrary, we are transparent about the skills we don’t have in-house and have strong relationships with external collaborators and specialists to ensure your work is consistently produced at a high level across all extensions. We are lean and mean.</p>

          <p>There’s a time and a place for large advertising & communications agencies - we know this having worked for a few of them. There’s also a time when you need a scaled back approach and that’s where we come in. Chop Shop Media is a small studio that can offer personalised experience and assist you in various creative disciplines without the complexities and costly layers of larger agencies.</p>

          <br>


          <h3>Film & Content</h3>

          <hr class="separator separator--dark">

          <br>
          <br>

          <p><strong>Photography / Branded Content / Corporate Promotion / Profiles / Event Coverage / TV Commercials / Motion Infographics / Music Videos</strong></p>

          <p>We are passionate about high quality motion pictures. In a world flooded with an overabundance of cheap and nasty looking commercials, pre-roll and content, we are seeing the value of great story telling shown through aesthetically pleasing images as a means of achieving cut through . Every brand has a unique story and an interesting angle to explore and share. We respect that and more importantly, we love to unearth it.</p>

          <p>The value of having video content on your website is huge and a recommended component of modern SEO development. Well crafted video content is the best way to deliver your message with minimal room for miscommunication. It also builds trust and integrity in a company or its products as well as showcase the many layers of personality and value your brand has. The flip side is that poorly produced content can do a great deal of damage to both your online ranking and brand equity.</p>

        </article>

      <?php endwhile; ?>


      <img class="services-content-image-1" src="<?php image_directory() ?>/content-services-01.jpg">

    </div>

  </section>


  <section class="pageSection pageSection--dark pageSection--medium">

    <div class="container">

      <header class="pageSection-header align--right">
        <h3>Creative Direction</h3>

        <hr class="separator">
      </header>

      <br>
      <br class="breakSpacer">
      <br class="breakSpacer">

      <p>
        <strong>Brand & Identity / Campaign / Print Comms / Environmental / UX & UI Design / Motion Design</strong>
      </p>

      <p>We love what can be done through the online world however branding and offline communications are very important to us. Your brand is where it all begins - without a brand and communications strategy you will be misguided and ultimately lost when putting together your online plan. We can help position you in the right area with the right voice for the right market. From brand design through to web design and development.</p>

      <p>Whilst a lot of the expertise and direction comes from in-house, we work with a team of awarded experts across various disciplines allowing us to deliver campaign solutions including copywriting, design and point of sale for both online and offline markets.</p>

    </div>

  </section>


  <section class="pageSection align--center">

    <div class="container">

      <a href="/our-work" class="button button--right button--dark">explore <strong>our work</strong></a>

      <div class="imageGrid">

        <div class="imageGrid-row imageGrid-row--left">

          <div href="<?php echo get_permalink(get_page_by_path('our-muso-related-works')); ?>" class="imageGrid-image" style="background-image: url(<?php image_directory() ?>/content-services-folio-01.jpg)"></div>
          <div href="<?php echo get_permalink(get_page_by_path('our-muso-related-works')); ?>" class="imageGrid-image" style="background-image: url(<?php image_directory() ?>/content-services-folio-02.jpg)"></div>
          <div href="<?php echo get_permalink(get_page_by_path('our-muso-related-works')); ?>" class="imageGrid-image" style="background-image: url(<?php image_directory() ?>/content-services-folio-03.jpg)"></div>

        </div>

        <div class="imageGrid-row imageGrid-row--right">

          <div href="<?php echo get_permalink(get_page_by_path('our-muso-related-works')); ?>" class="imageGrid-image" style="background-image: url(<?php image_directory() ?>/content-services-folio-05.jpg)"></div>
          <div href="<?php echo get_permalink(get_page_by_path('riverstone-custom-homes')); ?>" class="imageGrid-image" style="background-image: url(<?php image_directory() ?>/content-services-folio-04.jpg)"></div>
          <div href="<?php echo get_permalink(get_page_by_path('our-muso-related-works')); ?>" class="imageGrid-image" style="background-image: url(<?php image_directory() ?>/content-services-folio-06.jpg)"></div>

        </div>

      </div>

    </div>

  </section>
