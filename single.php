<?php get_header(); ?>

<main class="p-training-service">
  <!-- サブメインビジュアル -->
  <section class="p-training-service__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title m-page-title--icon-invert js-fade-up"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </section>
  <!-- サブメインビジュアル -->

  <section class="p-training-service__single">
    <div class="m-single-training-service">
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
      <div class="m-single-training-service__outer l-outer">
        <div class="m-single-training-service__inner l-inner">
          <?php
          $current_slug = get_post_field('post_name', get_post());
          if ($current_slug === 'nps' || $current_slug === 'yearl') :
          ?>
            <div class="m-single-training-service__body js-fade-up-parent">
              <?php the_content(); ?>
            </div>
          <?php else : ?>
            <div class="m-single-training-service__wrapper">
              <h2 class="m-service-training-title js-fade-up-parent">
                <picture class="m-service-training-title__icon">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/  .webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service-training-title-icon.png" alt="" width="57" height="50" loading="lazy">
                </picture>
                <span class="m-service-training-title__text">サンプルプログラムのご紹介</span>
              </h2>
              <div class="m-single-training-service__contents js-fade-up-parent">
                <?php $blocks = parse_blocks(get_the_content());
                foreach ($blocks as $block) {
                  if ($block['blockName'] === 'lazyblock/training-service') {
                    $trainingService_loop_json = urldecode($block['attrs']['training-service__loop']);
                    $trainingService_loop = json_decode($trainingService_loop_json, true);

                    if (!empty($trainingService_loop)) {
                      foreach ($trainingService_loop as $trainingService_item) {
                        $trainingService_title = isset($trainingService_item['training-service__title']) ? esc_html($trainingService_item['training-service__title']) : '';
                        $trainingService_purpose = isset($trainingService_item['training-service__purpose']) ? esc_html($trainingService_item['training-service__purpose']) : '';
                        $trainingService_target = isset($trainingService_item['training-service__target']) ? esc_html($trainingService_item['training-service__target']) : '';
                        $trainingService_content = isset($trainingService_item['training-service__content']) ? esc_html($trainingService_item['training-service__content']) : '';
                        $trainingService_voice = isset($trainingService_item['training-service__voice']) ? esc_html($trainingService_item['training-service__voice']) : '';
                        $trainingService_time = isset($trainingService_item['training-service__time']) ? esc_html($trainingService_item['training-service__time']) : '';
                        $trainingService_price = isset($trainingService_item['training-service__price']) ? esc_html($trainingService_item['training-service__price']) : '';
                        $trainingService_note = isset($trainingService_item['training-service__note']) ? esc_html($trainingService_item['training-service__note']) : '';

                        // すべての項目が未入力かチェック
                        $has_content = !empty($trainingService_title) ||
                          !empty($trainingService_purpose) ||
                          !empty($trainingService_target) ||
                          !empty($trainingService_content) ||
                          !empty($trainingService_voice) ||
                          !empty($trainingService_time) ||
                          !empty($trainingService_price) ||
                          !empty($trainingService_note);

                        if ($has_content) :
                ?>
                          <div class="m-training-service-block ">
                            <h3 class="m-training-service-block__title js-fade-up"><?php echo $trainingService_title; ?></h3>
                            <div class="m-training-service-block__wrapper">
                              <dl class="m-definition-list">
                                <?php if (!empty($trainingService_purpose)) : ?>
                                  <div class="m-definition-list__item js-fade-up-parent">
                                    <dt class="m-definition-list__term">
                                      <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-flag.svg" alt="" width="22" height="22" loading="lazy"></span>目的
                                    </dt>
                                    <dd class="m-definition-list__description"><?php echo nl2br($trainingService_purpose); ?></dd>
                                  </div>
                                <?php endif; ?>

                                <?php if (!empty($trainingService_target)) : ?>
                                  <div class="m-definition-list__item js-fade-up-parent">
                                    <dt class="m-definition-list__term">
                                      <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-student.svg" alt="" width="22" height="22" loading="lazy"></span>受講対象者
                                    </dt>
                                    <dd class="m-definition-list__description"><?php echo nl2br($trainingService_target); ?></dd>
                                  </div>
                                <?php endif; ?>

                                <?php if (!empty($trainingService_content)) : ?>
                                  <div class="m-definition-list__item js-fade-up-parent">
                                    <dt class="m-definition-list__term">
                                      <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-article.svg" alt="" width="22" height="22" loading="lazy"></span>研修内容
                                    </dt>
                                    <dd class="m-definition-list__description">
                                      <?php
                                      if (!empty($trainingService_content)) {
                                        $content_array = explode("\n", $trainingService_content);
                                        if (count($content_array) > 1) {
                                          echo '<ul class="m-definition-list__description-items">';
                                          foreach ($content_array as $content) {
                                            if (!empty(trim($content))) {
                                              echo '<li class="m-definition-list__description-item m-definition-list__description-item--training">' . esc_html($content) . '</li>';
                                            } else {
                                              echo '<br>';
                                            }
                                          }
                                          echo '</ul>';
                                        } else {
                                          echo nl2br($trainingService_content);
                                        }
                                      }
                                      ?>
                                    </dd>
                                  </div>
                                <?php endif; ?>

                                <?php if (!empty($trainingService_voice)) : ?>
                                  <div class="m-definition-list__item js-fade-up-parent">
                                    <dt class="m-definition-list__term">
                                      <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-voice.svg" alt="" width="22" height="22" loading="lazy"></span>参加者の声
                                    </dt>
                                    <dd class="m-definition-list__description">
                                      <?php
                                      if (!empty($trainingService_voice)) {
                                        $voice_array = explode("\n", $trainingService_voice);
                                        if (count($voice_array) > 1) {
                                          echo '<ul class="m-definition-list__description-items">';
                                          foreach ($voice_array as $voice) {
                                            if (!empty(trim($voice))) {
                                              echo '<li class="m-definition-list__description-item m-definition-list__description-item--triangle">' . esc_html($voice) . '</li>';
                                            }
                                          }
                                          echo '</ul>';
                                        } else {
                                          echo nl2br($trainingService_voice);
                                        }
                                      }
                                      ?>
                                    </dd>
                                  </div>
                                <?php endif; ?>

                                <?php if (!empty($trainingService_price)) : ?>
                                  <div class="m-definition-list__item js-fade-up-parent">
                                    <dt class="m-definition-list__term m-definition-list__term--last">
                                      <span class="m-definition-list__term-item"><span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-watch.svg" alt="" width="22" height="22" loading="lazy"></span>時間</span>
                                      <span class="m-definition-list__term-item"><span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-wallet.svg" alt="" width="22" height="22" loading="lazy"></span>料金</span>
                                    </dt>
                                    <dd class="m-definition-list__description">
                                      <?php
                                      if (!empty($trainingService_price)) {
                                        $price_array = explode("\n", $trainingService_price);
                                        if (count($price_array) > 1) {
                                          echo '<ul class="m-definition-list__description-items">';
                                          foreach ($price_array as $price) {
                                            if (!empty(trim($price))) {
                                              echo '<li class="m-definition-list__description-item">' . esc_html($price) . '</li>';
                                            }
                                          }
                                          echo '</ul>';
                                        } else {
                                          echo nl2br($trainingService_price);
                                        }
                                      }
                                      ?>
                                    </dd>
                                  </div>
                                <?php endif; ?>
                              </dl>
                            </div>
                            <p class="m-training-service-block__note js-fade-up"><?php echo nl2br($trainingService_note); ?></p>
                          </div>
                <?php
                        endif;
                      }
                    }
                  }
                } ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- お問い合わせ -->
  <section class="p-training-service__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->
</main>



<?php get_footer();
