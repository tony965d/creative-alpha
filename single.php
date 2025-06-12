<?php get_header(); ?>

<main class="p-training-service l-main">
  <!-- サブメインビジュアル -->
  <section class="m-sub-mv">
    <div class="m-sub-mv__inner l-inner">
      <div class="m-sub-mv__wrapper">
        <h1 class="m-page-title"><?php the_title(); ?></h1>
      </div>
    </div>
  </section>
  <!-- サブメインビジュアル -->

  <!-- パンくず -->
  <section class="m-breadcrumb">
    <div class="m-breadcrumb__inner l-inner">
      <div class="wp-breadcrumb">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  </section>
  <!-- パンくず -->

  <section class="p-single-training-service l-outer">
    <div class="p-single-training-service__inner l-inner">
      <div class="p-single-training-service__wrapper">
        <h3 class="m-service-training-title">
          <picture class="m-service-training-title__icon">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/  .webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service-training-title-icon.png" alt="" width="57" height="50" loading="lazy">
          </picture>
          <span class="m-service-training-title__text">サンプルプログラムのご紹介</span>
        </h3>
        <div class="p-single-training-service__contents">
          <div class="p-single-training-service__block m-training-service-block">


          </div>

        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer();
