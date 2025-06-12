<?php get_header(); ?>

<section class="m-mv-sub">
  <div class="m-mv-sub__wrapper">
    <picture class="m-mv-sub__image js-mv-sub">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-contact.jpg" alt="" width="1366" height="300" loading="lazy">
    </picture>
    <div class="m-mv-sub__body">
      <h2 class="m-mv-sub__title">お問い合わせ</h2>
      <p class="m-mv-sub__subtitle">Contact</p>
    </div>
  </div>
</section>

<section class="p-contact">
  <div class="p-contact__inner l-inner">
    <div class="p-contact__wrapper">
      <p class="p-contact__text">
        クリエイティブアルファの研修やサービスについて関心がある方は以下のお問合せフォームよりご連絡ください。
        課題・ご要望などをヒアリングさせていただき、研修の企画書を作成させていただきます。企画書の作成は無料ですので、お気軽にご相談いただきますと幸いです。
      </p>
    </div>
  </div>
  <div class="p-contact__form">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php echo do_shortcode('[contact-form-7 id="a1daaf0" title="お問い合わせ"]'); ?>
      <?php endwhile; ?>
    <?php endif;  ?>
  </div>
</section>

<?php get_footer(); ?>