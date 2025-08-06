<?php get_header(); ?>

<main class="p-contact">

  <section class="p-contact__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title js-fade-up">お問い合わせ</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="p-contact__main">
    <!-- パンくず -->
    <div class="m-breadcrumb">
      <div class="m-breadcrumb__inner l-inner">
        <div class="wp-breadcrumb js-fade-up">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <div class="m-contact">
      <div class="m-contact__inner l-inner">
        <div class="m-contact__wrapper">
          <p class="m-base-text js-fade-up">
            クリエイティブアルファの研修や覆面調査について関心がある方は以下のお問合せフォームよりご連絡ください。 課題・ご要望などをヒアリングさせていただき、適切なご案内や企画書を作成させていただきます。企画書の作成は無料ですので、お気軽にご相談下さい。
          </p>
        </div>
        <div class="m-contact__form">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php echo do_shortcode('[contact-form-7 id="a1daaf0" title="お問い合わせ"]'); ?>
            <?php endwhile; ?>
          <?php endif;  ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>