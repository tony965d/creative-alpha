<?php get_header(); ?>

<main class="p-error">

  <section class="p-error__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title js-fade-up">404</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="p-error__main">
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
    <div class="m-error l-outer">
      <div class="m-error__inner l-inner">
        <div class="m-error__wrapper">
          <p class="m-error__text m-base-text js-fade-up">
            申し訳ございません。<br>お探しのページが見つかりません。
          </p>
        </div>
      </div>
      <div class="m-error__button js-fade-up">
        <a href="<?php echo get_esc_home_url('/'); ?>" class="m-contact-button">TOP</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>