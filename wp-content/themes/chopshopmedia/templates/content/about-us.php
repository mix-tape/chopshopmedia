
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


        <figure class="aboutContent-imageOne">

          <img class="aboutContent-imageOne-image" src="<?php image_directory() ?>/content-about-us-train.jpg" alt="A company’s personality is represented by its values.">

          <figcaption class="aboutContent-imageOne-caption">A company’s personality is represented by its values.</figcaption>

        </figure>

      <?php endwhile; ?>

    </div>

  </section>

  <section class="aboutValues">

    <div class="container">

      <header class="aboutValues-header">

        <h3 class="aboutValues-title">
          Our Values
        </h3>

        <hr class="separator">

      </header>

      <div class="aboutValues-values">

        <div class="valueBox">

          <h4 class="valueBox-title">Integrity</h4>

          <span class="valueBox-content">Acting ethically and with a respectful approach to business relationships</span>

          <div class="valueBox-hover">
            <span class="valueBox-hover-content">Do As I Do</span>
          </div>

        </div>

        <div class="valueBox">

          <h4 class="valueBox-title">Generosity</h4>

          <span class="valueBox-content">Giving comes first, both of our time and talents</span>

          <div class="valueBox-hover">
            <span class="valueBox-hover-content">No One Has Ever Become Poor <br>By Giving</span>
          </div>

        </div>

        <div class="valueBox">

          <h4 class="valueBox-title">Boldness</h4>

          <span class="valueBox-content">Always seeking out opportunity to attain better results by way of fearless creative thinking</span>

          <div class="valueBox-hover">
            <span class="valueBox-hover-content">Fortune Favours The Brave</span>
          </div>

        </div>

        <div class="valueBox">

          <h4 class="valueBox-title">Transparency</h4>

          <span class="valueBox-content">Openness, honesty and accountability in reporting, feedback, ideas and relationships</span>

          <div class="valueBox-hover">
            <span class="valueBox-hover-content">Gotta Have Trust</span>
          </div>

        </div>

      </div>

    </div>

  </section>


  <section class="wrapper pageSection">

    <div class="container">

      <div class="pageContent shift--one">

        <h3>Our Edge</h3>
        <hr class="separator separator--dark">

        <br>

        <h2>We are not the ‘out-of-the-box’ guys, instead we push boundaries and discover new territories.</h2>

        <p>This edge is what helps set us apart from others. We apply lateral thinking to problems in order to find solutions that can achieve real cut-through when given the chance. We are serious and passionate about our work but also have a wicked (usually inappropriate) sense of humour which helps the creative thinking process.</p>

      </div>

    </div>

  </section>


  <section class="wrapper pageSection">

    <div class="container">

      <div class="pageContent shift--one">

        <header class="pageContent-header align--center">
          <h3>Our People</h3>
          <hr class="separator separator--dark">
        </header>

        <div class="pageContent-profile pageContent-profile--right">

          <div class="pageContent-profile-content">

            <h2>Adam Rule</h2>

            <p>Adam’s greatest asset is his experience, across both a wide variety of creative fields and industries plus also project scale. He’s worked in production companies, small design studios and large advertising agencies. Despite being a relatively late bloomer, through Adam’s journey he has mastered the art vs business balance which, when coupled with a variety of skills, has enabled a quick elevation through the ranks into senior director roles in prominent digital and advertising agencies.</p>

            <p>His first love has always been the moving image however a strong thirst for all things creative has seen him working in print, digital and screen for clients in Government, commercial, retail, hospitality, leisure and tourism, sport and the arts.</p>
          </div>

          <figure class="pageContent-profile-photo">
            <img src="http://placehold.it/350x350" alt="">
          </figure>

        </div>

        <div class="pageContent-profile pageContent-profile--left">

          <figure class="pageContent-profile-photo">
            <img src="http://placehold.it/350x350" alt="">
          </figure>

          <div class="pageContent-profile-content">

            <h2>Gemma Rule</h2>

            <p>With a backgound in photography and video production, Gemma has a keen eye and creative imagination ready to bring your ideas to life all while understanding the importance of a well-kept timeline. <br>
            Being super organised and providing clients with regular updates and communication, Gemma keeps projects tightly run and excellently produced.</p>

            <p>Gemma’s provided photographic and video work for a variety of clients ranging from fashion, music and radio through to corporate clients such as financial advisors and local government.</p>
          </div>



        </div>

      </div>

    </div>

  </section>
