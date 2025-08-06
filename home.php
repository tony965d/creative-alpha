<?php get_header(); ?>

<main class="p-training-service">
  <!-- サブメインビジュアル -->
  <section class="p-training-service__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title m-page-title--icon-invert js-fade-up">研修サービス</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- サブメインビジュアル -->

  <!-- 研修サービス一覧 -->
  <section class="p-training-service__archive">
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
    <div class="m-archive-training-service l-outer">
      <div class="m-archive-training-service__inner l-inner">
        <div class="m-archive-training-service__wrapper">
          <h2 class="m-section-title js-fade-up-parent">
            <picture class="m-section-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-section-title__text">お店の課題を解決する体感型研修をオーダーメイドで提供</span>
          </h2>
          <div class="m-archive-training-service__text-wrapper">
            <p class="m-base-text js-fade-up">
              研修プログラムの内容は、各社様の課題やご要望に合わせてオーダーメイドで作成させて頂きます。<br>
              ご予算に合わせてカスタマイズも可能ですので、先ずはお気軽にお問合せ下さい。なお、ヒアリングや企画書の作成は無料で承っております。
            </p>
          </div>
          <div class="m-archive-training-service__title-wrapper">
            <h3 class="m-service-training-title js-fade-up-parent">
              <picture class="m-service-training-title__icon">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/  .webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service-training-title-icon.png" alt="" width="57" height="50" loading="lazy">
              </picture>
              <span class="m-service-training-title__text">サンプルプログラムのご紹介</span>
            </h3>
          </div>
          <div class="m-archive-training-service__contents l-grid-two js-fade-up-parent">
            <?php
            $trainingService_query = new WP_Query(
              array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'post__not_in'   => array(209),
              )
            );
            ?>
            <?php if ($trainingService_query->have_posts()) : ?>
              <?php while ($trainingService_query->have_posts()) : ?>
                <?php $trainingService_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="m-card u-hover">
                  <figure class="m-card__thumbnail">
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                    <?php } else { ?>
                      <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.png" alt="<?php echo esc_attr(get_the_title()); ?>" width="524" height="280" loading="lazy">
                      </picture>
                    <?php } ?>
                  </figure>
                  <div class="m-card__header">
                    <h4 class="m-card__title"><?php the_title(); ?></h4>
                  </div>
                  <div class="m-card__body">
                    <ul class="m-card__items">
                      <?php
                      // スラッグがyearの投稿の場合
                      if (get_post_field('post_name') === 'year') {
                        echo '<li class="m-card__item">事例1）家具メーカー〔従業員：約420人、売上：76億〕</li>';
                        echo '<li class="m-card__item">事例2）アパレル企業〔従業員：約3,000人、売上：625億〕</li>';
                      } else {
                        // 通常の処理
                        $blocks = parse_blocks(get_the_content());
                        foreach ($blocks as $block) {
                          if ($block['blockName'] === 'lazyblock/training-service') {
                            $trainingService_loop_json = urldecode($block['attrs']['training-service__loop']);
                            $trainingService_loop = json_decode($trainingService_loop_json, true);

                            if (!empty($trainingService_loop)) {
                              foreach ($trainingService_loop as $trainingService_item) {
                                $trainingService_title = isset($trainingService_item['training-service__title']) ? esc_html($trainingService_item['training-service__title']) : '';
                                if (!empty($trainingService_title)) {
                                  echo '<li class="m-card__item">' . $trainingService_title . '</li>';
                                }
                              }
                            }
                          }
                        }
                      }
                      ?>
                    </ul>
                  </div>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 研修サービス一覧 -->
</main>

<?php get_footer();
