<?php get_header(); ?>

<main class="p-training-service l-main">
  <!-- サブメインビジュアル -->
  <section class="m-sub-mv">
    <div class="m-sub-mv__inner l-inner">
      <div class="m-sub-mv__wrapper">
        <h1 class="m-page-title">コラム</h1>
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

  <!-- 研修サービス一覧 -->
  <section class="p-archive-training-service l-outer">
    <div class="p-archive-training-service__inner l-inner">
      <div class="p-archive-training-service__wrapper">
        <p class="p-archive-training-service__text m-base-text">
          研修プログラムの内容は、各社様の課題やご要望に合わせてオーダーメイドで作成させて頂きます。<br>
          ご予算に合わせてカスタマイズも可能ですので、先ずはお気軽にお問合せ下さい。なお、ヒアリングや企画書の作成は無料で承っております。
        </p>
        <h2 class="p-archive-training-service__title m-section-title">
          <picture class="m-section-title__icon">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
          </picture>
          <span class="m-section-title__text">お店の課題を解決する体感型研修をオーダーメイドで提供</span>
        </h2>
        <div class="p-archive-training-service__contents l-grid">
          <?php
          $trainingService_query = new WP_Query(
            array(
              'post_type'      => 'column',
              'posts_per_page' => -1,
            )
          );
          ?>
          <?php if ($trainingService_query->have_posts()) : ?>
            <?php while ($trainingService_query->have_posts()) : ?>
              <?php $trainingService_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="m-card">
                <figure class="m-card__thumbnail">
                  <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('full'); ?>
                  <?php } else { ?>
                    <picture>
                      <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy-image1.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy-image1.jpg" alt="ダミー画像" width="524" height="280" loading="lazy">
                    </picture>
                  <?php } ?>
                </figure>
                <div class="m-card__header">
                  <h3 class="m-card__title"><?php the_title(); ?></h3>
                </div>
                <div class="m-card__body">
                  <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- 研修サービス一覧 -->
</main>

<?php get_footer();
