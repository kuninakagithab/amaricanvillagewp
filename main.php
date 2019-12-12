<div class="container">
  <main>
    <picture class="sample1">
      <source class="logo" media="(min-width:768px)" srcset="<?= get_template_directory_uri(); ?>/img/logo.png">
      <source class="logo" media="(max-width:767px)" srcset="<?= get_template_directory_uri(); ?>/img/logo.png">
      <img class="logo" src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="logo">
    </picture>
    <picture class="none">
      <source class="" media="(max-width:767px)" srcset="<?= get_template_directory_uri(); ?>/img/visual_1_sp.png">
    </picture>
    <?php echo do_shortcode('[smartslider3 slider=4]')?>
    <picture class="sample3">
      <source class="visualt" media="(min-width:768px)" srcset="<?= get_template_directory_uri(); ?>/img/visual_text_pc.png">
      <source class="visualt" media="(max-width:767px)" srcset="<?= get_template_directory_uri(); ?>/img/visual_text_sp.png">
      <img class="visualt" src="<?= get_template_directory_uri(); ?>/visual_text_pc.png" alt="visual">
    </picture>
  </main>

  <div class="textbox">
    <p class="mtext">進化し続ける「街」<br>アメリカンビレッジマガジン</p>
  </div>