
  <section class="wrapper pageSection">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <nav class="sidebarNavigation">

          <a class="sidebarNavigation-menuItem" href="/about-us">01</a>
          <a class="sidebarNavigation-menuItem" href="/our-services">02</a>
          <a class="sidebarNavigation-menuItem" href="/our-work">03</a>
          <!-- <a class="sidebarNavigation-menuItem" href="/contact-us">04</a> -->

        </nav>

        <article <?php post_class('pageContent') ?> id="post-<?php the_ID(); ?>">

          <?php the_content( ); ?>

          <br>
          <br>

          <div class="contentColumn">

            <strong>Studio</strong>

            <hr class="separator separator--dark">

            <br>

            Office 2, 45 Market Street <br>
            Fremantle, Western Australia <br>
            E: <a href="mailto:hello@chopshopmedia.com.au">hello@chopshopmedia.com.au</a>

          </div>

          <div class="contentColumn">

            <strong>New Business Enquiry</strong>

            <hr class="separator separator--dark">

            <br>

            <p><strong>Gemma:</strong> <a href="mailto:gemma@chopshopmedia.com.au">gemma@chopshopmedia.com.au</a><br>
            <strong>Adam:</strong> <a href="mailto:adam@chopshopmedia.com.au">adam@chopshopmedia.com.au</a></p>

          </div>

        </article>

      <?php endwhile; ?>

    </div>

  </section>


  <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.56185817853!2d115.74385681516375!3d-32.054048881196195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a16556aed79d%3A0x8dce9632d95ac4b2!2s45+Market+St%2C+Fremantle+WA+6160!5e0!3m2!1sen!2sau!4v1482051238815" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
