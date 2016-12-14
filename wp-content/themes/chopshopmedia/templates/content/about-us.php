
  <section class="wrapper pageSection">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <nav class="sidebarNavigation">

          <a class="sidebarNavigation-menuItem" href="/our-services">02</a>
          <a class="sidebarNavigation-menuItem" href="/our-work">03</a>
          <a class="sidebarNavigation-menuItem" href="/contact-us">04</a>

        </nav>

        <article <?php post_class('pageContent') ?> id="post-<?php the_ID(); ?>">

          <h2>Chop Shop Media is a creative agency specialising in video, animation and creative direction.</h2>

          <p>Founded by The Rules (Adam and Gemma) in 2008, CSM has gone from being a side project used for creative passion projects, to a full-time business with clients from varying market sectors including government, property, sport and entertainment.</p>

          <h3>Our Point of Difference?</h3>

          <hr class="separator separator--dark">

          <br>

          <br>

          <p>Everyone says they care about your brand and about your message. We are no different. Everyone says they know how to tell a compelling story and create beautiful compositions. We are no different. Everyone uses the same tools to craft their executions - Adobe, Avid, Blackmagic, Red, Arri, Canon, GoPro. We are no different. </p>

          <p>Our difference is our team. Our team has experience working in graphic and motion design, UI and UX design, advertising, radio and film. We look at your project as part of a complex ecosystem of communications and ensure there is true brand and message consistency. We believe every facet of your marketing has the ability to extend your brand and create new business opportunities. At Chop Shop we strive for solutions based on excellence and innovation, tone and pixel perfect execution. </p>

        </article>

      <?php endwhile; ?>

    </div>

  </section>
