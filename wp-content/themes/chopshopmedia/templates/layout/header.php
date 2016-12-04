  <header class="wrapper pageHeader">

    <div class="container">

      <a class="pageHeader-brand" href="<?php echo home_url(); ?>/"><img src="<?php image_directory() ?>/logo.svg" alt=""><span class="hide"><?php bloginfo('name'); ?></span></a>

      <div class="menuTrigger pageHeader-menuTrigger"><span class="menuTrigger-bars"></span></div>

    </div>

  </header>

  <?php get_template_part('templates/layout/navigation') ?>
