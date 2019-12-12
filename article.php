<article>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>

      <aside>
        <?php the_post_thumbnail(); ?>
        <div class="description">
          <p><?php the_date(); ?></p>
          <p class="textheight"><?php the_title(); ?></p>
        </div>
        <div class="readmore">
          <a href="<?php the_permalink(); ?>" class="target">READ MORE</a>
          <p class="extend"></p>
        </div>
      </aside>
    <?php endwhile; ?>
  <?php endif; ?>
  <!-- aside1 -->
  <aside>
    <img class="pic_width" src="<?= get_template_directory_uri(); ?>/img/post_img_1.png" alt="Cafe">
    <div class="description">
      <p>2018/5/20</p>
      <p>おしゃれカフェがありますよ</p>
    </div>
    <div class="readmore">
      <a href="#" class="target">READ MORE</a>
      <p class="extend"></p>
    </div>
  </aside>
  <!-- aside2 -->
  <aside>
    <img class="pic_width" src="<?= get_template_directory_uri(); ?>/img/post_img_2.png" alt="Ferris Wheel">
    <div class="margin-short">
      <p>2018/5/19</p>
      <p>あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
    </div>
    <div class="readmore">
      <a href="#" class="target">READ MORE</a>
      <p class="extend"></p>
    </div>
  </aside>
  <!-- aside3 -->
  <aside>
    <img class="pic_width" src="<?= get_template_directory_uri(); ?>/img/post_img_3.png" alt="Rasona">
    <div class="description">
      <p>2018/5/18</p>
      <p>ラソナの車内はこんなのよ</p>
    </div>
    <div class="readmore">
      <a href="#" class="target">READ MORE</a>
      <p class="extend"></p>
    </div>
  </aside>
  <!-- aside4 -->
  <aside>
    <img class="pic_width" src="<?= get_template_directory_uri(); ?>/img/post_img_4.png" alt="Araha beach">
    <div class="description">
      <p>2018/5/27</p>
      <p>お隣のアラハはハワイ？</p>
    </div>
    <div class="readmore">
      <a href="#" class="target">READ MORE</a>
      <p class="extend"></p>
    </div>
  </aside>
  <!-- aside5 -->
  <aside>
    <img class="pic_width" src="<?= get_template_directory_uri(); ?>/img/post_img_5.png" alt="Rasona's Tent">
    <div class="description">
      <p>2018/5/16</p>
      <p>なぜテント？ラソナの人に聞いてみた</p>
    </div>
    <div class="readmore">
      <a href="#" class="target">READ MORE</a>
      <p class="extend"></p>
    </div>
  </aside>
  <!-- aside6 -->
  <aside>
    <img class="pic_width" src="<?= get_template_directory_uri(); ?>/img/post_img_6.png" alt="Bay area">
    <div class="description">
      <p>2018/5/15</p>
      <p>ベイエリアおしゃれすぎる問題</p>
    </div>
    <div class="readmore">
      <a href="#" class="target">READ MORE</a>
      <p class="extend"></p>
    </div>
  </aside>
</article>
</div>