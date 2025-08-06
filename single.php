<?php get_header(); ?>

<?php
// ポイントセクションのブロックデータを取得（最初に定義）
$point_blocks = parse_blocks(get_the_content());
$has_point_content = false;
$has_actual_content = false;

foreach ($point_blocks as $block) {
  if ($block['blockName'] === 'lazyblock/training-service-point') {
    $has_point_content = true;

    // ブロック内に実際のコンテンツがあるかチェック
    $point_loop_json = isset($block['attrs']['training-service-point__loop']) ? urldecode($block['attrs']['training-service-point__loop']) : '';
    $point_loop = !empty($point_loop_json) ? json_decode($point_loop_json, true) : array();

    if (!empty($point_loop)) {
      foreach ($point_loop as $point_item) {
        $point_subtitle = isset($point_item['training-service-point__subtitle']) ? trim($point_item['training-service-point__subtitle']) : '';
        $point_text = isset($point_item['training-service-point__text']) ? trim($point_item['training-service-point__text']) : '';

        // 画像データの処理
        $point_image_url = '';
        if (isset($point_item['training-service-point__image']) && !empty($point_item['training-service-point__image'])) {
          $image_data = $point_item['training-service-point__image'];
          if (is_array($image_data) && isset($image_data['url'])) {
            $point_image_url = $image_data['url'];
          } elseif (is_string($image_data)) {
            $point_image_url = $image_data;
          }
        }

        // 実際のコンテンツがあるかチェック
        if (!empty($point_subtitle) || !empty($point_text) || !empty($point_image_url)) {
          $has_actual_content = true;
          break 2; // 両方のループを抜ける
        }
      }
    }
    break;
  }
}
?>

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
          if ($current_slug === 'nps' || $current_slug === 'year') :
          ?>
            <div class="m-single-training-service__body js-fade-up-parent">
              <?php the_content(); ?>
            </div>
          <?php else : ?>
            <?php
            // ブロックデータを取得
            $blocks = parse_blocks(get_the_content());
            $trainingServiceHeader_title = '';
            $trainingServiceHeader_text = '';
            foreach ($blocks as $block) {
              if ($block['blockName'] === 'lazyblock/training-service-header') {
                $trainingServiceHeader_title = isset($block['attrs']['training-service-header__title']) ? esc_html($block['attrs']['training-service-header__title']) : '';
                $trainingServiceHeader_text = isset($block['attrs']['training-service-header__text']) ? esc_html($block['attrs']['training-service-header__text']) : '';
                break; // 最初の該当するブロックだけを処理したい場合
              }
            }
            ?>
            <div class="m-single-training-service__header">
              <?php if (!empty($trainingServiceHeader_title) || !empty($trainingServiceHeader_text)) : ?>
                <h2 class="m-section-title m-section-title--center js-fade-up-parent">
                  <picture class="m-section-title__icon">
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
                  </picture>
                  <span class="m-section-title__text m-section-title__text--middle"><?php echo $trainingServiceHeader_title; ?></span>
                </h2>
                <?php if (!empty($trainingServiceHeader_text)) : ?>
                  <p class="m-base-text">
                    <?php echo nl2br($trainingServiceHeader_text); ?>
                  </p>
                <?php endif; ?>
              <?php endif; ?>
            </div>
            <?php if ($has_point_content && $has_actual_content) : ?>
              <div class="m-single-training-service__menu">
                <a href="#training-service-point" class="m-button m-button--training-service-menu">研修の特徴を見る</a>
              </div>
            <?php endif; ?>
            <?php
            // カスタムブロックの内容をチェック
            $has_training_service_content = false;
            $blocks = parse_blocks(get_the_content());
            foreach ($blocks as $block) {
              if ($block['blockName'] === 'lazyblock/training-service') {
                $trainingService_loop_json = isset($block['attrs']['training-service__loop']) ? urldecode($block['attrs']['training-service__loop']) : '';
                $trainingService_loop = !empty($trainingService_loop_json) ? json_decode($trainingService_loop_json, true) : array();

                if (!empty($trainingService_loop)) {
                  foreach ($trainingService_loop as $trainingService_item) {
                    $trainingService_title = isset($trainingService_item['training-service__title']) ? esc_html($trainingService_item['training-service__title']) : '';
                    $trainingService_purpose = isset($trainingService_item['training-service__purpose']) ? esc_html($trainingService_item['training-service__purpose']) : '';
                    $trainingService_target = isset($trainingService_item['training-service__target']) ? esc_html($trainingService_item['training-service__target']) : '';
                    $trainingService_content = isset($trainingService_item['training-service__content']) ? esc_html($trainingService_item['training-service__content']) : '';
                    $trainingService_voice = isset($trainingService_item['training-service__voice']) ? esc_html($trainingService_item['training-service__voice']) : '';
                    $trainingService_time = isset($trainingService_item['training-service__time']) ? esc_html($trainingService_item['training-service__time']) : '';
                    $trainingService_price = isset($trainingService_item['training-service__price']) ? esc_html($trainingService_item['training-service__price']) : '';

                    // すべての項目が未入力かチェック
                    $has_content = !empty($trainingService_title) ||
                      !empty($trainingService_purpose) ||
                      !empty($trainingService_target) ||
                      !empty($trainingService_content) ||
                      !empty($trainingService_voice) ||
                      !empty($trainingService_time) ||
                      !empty($trainingService_price);

                    if ($has_content) {
                      $has_training_service_content = true;
                      break 2; // 内側のループと外側のループの両方を抜ける
                    }
                  }
                }
              }
            }

            // コンテンツがある場合のみ表示
            if ($has_training_service_content) :
            ?>
              <div class="m-single-training-service__wrapper">
                <h3 class="m-service-training-title js-fade-up-parent">
                  <picture class="m-service-training-title__icon">
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/service-training-title-icon.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service-training-title-icon.png" alt="" width="57" height="50" loading="lazy">
                  </picture>
                  <span class="m-service-training-title__text">サンプルプログラムのご紹介</span>
                </h3>
                <div class="m-single-training-service__contents js-fade-up-parent">
                  <?php $blocks = parse_blocks(get_the_content());
                  foreach ($blocks as $block) {
                    if ($block['blockName'] === 'lazyblock/training-service') {
                      $trainingService_loop_json = isset($block['attrs']['training-service__loop']) ? urldecode($block['attrs']['training-service__loop']) : '';
                      $trainingService_loop = !empty($trainingService_loop_json) ? json_decode($trainingService_loop_json, true) : array();

                      if (!empty($trainingService_loop)) {
                        foreach ($trainingService_loop as $trainingService_item) {
                          $trainingService_title = isset($trainingService_item['training-service__title']) ? esc_html($trainingService_item['training-service__title']) : '';
                          $trainingService_purpose = isset($trainingService_item['training-service__purpose']) ? esc_html($trainingService_item['training-service__purpose']) : '';
                          $trainingService_target = isset($trainingService_item['training-service__target']) ? esc_html($trainingService_item['training-service__target']) : '';
                          $trainingService_content = isset($trainingService_item['training-service__content']) ? esc_html($trainingService_item['training-service__content']) : '';
                          $trainingService_voice = isset($trainingService_item['training-service__voice']) ? esc_html($trainingService_item['training-service__voice']) : '';
                          $trainingService_time = isset($trainingService_item['training-service__time']) ? esc_html($trainingService_item['training-service__time']) : '';
                          $trainingService_price = isset($trainingService_item['training-service__price']) ? esc_html($trainingService_item['training-service__price']) : '';

                          // すべての項目が未入力かチェック
                          $has_content = !empty($trainingService_title) ||
                            !empty($trainingService_purpose) ||
                            !empty($trainingService_target) ||
                            !empty($trainingService_content) ||
                            !empty($trainingService_voice) ||
                            !empty($trainingService_time) ||
                            !empty($trainingService_price);

                          if ($has_content) :
                  ?>
                            <div class="m-training-service-block ">
                              <h4 class="m-training-service-block__title js-fade-up"><?php echo $trainingService_title; ?></h4>
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
                                <div class="m-single-training-service__button">
                                  <?php
                                  // ブロックデータを取得
                                  $blocks = parse_blocks(get_the_content());
                                  foreach ($blocks as $block) {
                                    if ($block['blockName'] === 'lazyblock/training-service') {
                                      // ボタンテキストの取得（キーの存在をチェック）
                                      $trainingService_button = isset($block['attrs']['training-service__button']) ? $block['attrs']['training-service__button'] : '';
                                      if (!empty($trainingService_button)) {
                                        echo '<a href="' . home_url('/contact/') . '" class="m-button m-button--training-service">';
                                        echo esc_html($trainingService_button); // 変数を正しく出力
                                        echo '</a>';
                                      }
                                      break; // 最初の該当するブロックだけを処理したい場合
                                    }
                                  }
                                  ?>
                                </div>
                              </div>
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
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>



  <?php if ($has_point_content && $has_actual_content) : ?>
    <section id="training-service-point" class="p-training-service__point">
      <div class="m-mystery-shopper-point">
        <div class="m-mystery-shopper-point__inner l-inner">
          <?php
          // ブロックデータを取得
          $blocks = parse_blocks(get_the_content());
          $trainingServicePointTitle_text = '';

          foreach ($blocks as $block) {
            if ($block['blockName'] === 'lazyblock/training-service-point-title') {
              // 配列キーの存在をチェック
              $trainingServicePointTitle_text = isset($block['attrs']['training-service-point-title__text']) ? $block['attrs']['training-service-point-title__text'] : '';
              break; // 最初の該当するブロックだけを処理したい場合
            }
          }

          // カスタムタイトルが設定されている場合のみ表示
          if (!empty($trainingServicePointTitle_text)) :
          ?>
            <h2 class="m-section-title m-section-title--center js-fade-up-parent">
              <picture class="m-section-title__icon">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
              </picture>
              <span class="m-section-title__text m-section-title__text--middle">
                <span>クリエイティブアルファの</span><br>
                <?php echo esc_html($trainingServicePointTitle_text); ?>
              </span>
            </h2>
          <?php endif; ?>
          <div class="m-mystery-shopper-point__wrapper l-two-columns">
            <?php
            foreach ($point_blocks as $block) {
              if ($block['blockName'] === 'lazyblock/training-service-point') {
                $point_loop_json = isset($block['attrs']['training-service-point__loop']) ? urldecode($block['attrs']['training-service-point__loop']) : '';
                $point_loop = !empty($point_loop_json) ? json_decode($point_loop_json, true) : array();

                if (!empty($point_loop)) {
                  foreach ($point_loop as $index => $point_item) {
                    $point_subtitle = isset($point_item['training-service-point__subtitle']) ? esc_html($point_item['training-service-point__subtitle']) : '';
                    $point_text = isset($point_item['training-service-point__text']) ? esc_html($point_item['training-service-point__text']) : '';

                    // 画像データの処理
                    $point_image_url = '';
                    $point_image_alt = '';
                    if (isset($point_item['training-service-point__image']) && !empty($point_item['training-service-point__image'])) {
                      $image_data = $point_item['training-service-point__image'];
                      if (is_array($image_data) && isset($image_data['url'])) {
                        $point_image_url = esc_url($image_data['url']);
                        $point_image_alt = isset($image_data['alt']) ? esc_attr($image_data['alt']) : '';
                      } elseif (is_string($image_data)) {
                        $point_image_url = esc_url($image_data);
                        $point_image_alt = '';
                      }
                    }

                    // すべての項目が未入力かチェック
                    $has_content = !empty($point_subtitle) || !empty($point_text) || !empty($point_image_url);

                    if ($has_content) :
            ?>
                      <div class="m-mystery-shopper-point__contents l-two-columns__item">
                        <div class="m-mystery-shopper-point__body l-two-columns__left js-fade-up-parent">
                          <div class="m-mystery-shopper-point__body-heading">
                            <span class="m-mystery-shopper-point__sub-text">特徴</span>
                            <span class="m-mystery-shopper-point__number"><?php echo sprintf('%02d', $index + 1); ?></span>
                          </div>
                          <?php if (!empty($point_subtitle)) : ?>
                            <h3 class="m-mystery-shopper-point__subtitle">
                              <?php echo nl2br($point_subtitle); ?>
                            </h3>
                          <?php endif; ?>
                          <?php if (!empty($point_text)) : ?>
                            <div class="m-mystery-shopper-point__text-wrapper">
                              <p class="m-base-text">
                                <?php echo nl2br($point_text); ?>
                              </p>
                            </div>
                          <?php endif; ?>
                        </div>
                        <?php if (!empty($point_image_url)) : ?>
                          <picture class="m-mystery-shopper-point__image l-two-columns__right js-fade-up">
                            <source srcset="<?php echo $point_image_url; ?>" type="image/webp">
                            <img src="<?php echo $point_image_url; ?>" alt="<?php echo !empty($point_image_alt) ? $point_image_alt : $point_subtitle; ?>" width="400" height="300" loading="lazy">
                          </picture>
                        <?php endif; ?>
                      </div>
            <?php
                    endif;
                  }
                }
              }
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>




  <?php
  // FAQセクションのブロックデータを取得
  $faq_blocks = parse_blocks(get_the_content());
  $has_faq_content = false;
  $has_actual_faq_content = false;

  foreach ($faq_blocks as $block) {
    if ($block['blockName'] === 'lazyblock/training-service-faq') {
      $has_faq_content = true;

      // ブロック内に実際のコンテンツがあるかチェック
      $faq_loop_json = isset($block['attrs']['training-service-faq__loop']) ? urldecode($block['attrs']['training-service-faq__loop']) : '';
      $faq_loop = !empty($faq_loop_json) ? json_decode($faq_loop_json, true) : array();

      if (!empty($faq_loop)) {
        foreach ($faq_loop as $faq_item) {
          $faq_question = isset($faq_item['training-service-faq__question']) ? trim($faq_item['training-service-faq__question']) : '';
          $faq_answer = isset($faq_item['training-service-faq__answer']) ? trim($faq_item['training-service-faq__answer']) : '';

          // 実際のコンテンツがあるかチェック
          if (!empty($faq_question) || !empty($faq_answer)) {
            $has_actual_faq_content = true;
            break 2; // 両方のループを抜ける
          }
        }
      }
      break;
    }
  }
  ?>

  <?php if ($has_faq_content && $has_actual_faq_content) : ?>
    <section class="p-training-service__faq">
      <div class="m-mystery-shopper-faq m-mystery-shopper-faq--bg-white">
        <div class="m-mystery-shopper-faq__inner l-inner">
          <div class="m-mystery-shopper-faq__wrapper">
            <h2 class="m-section-title m-section-title--center js-fade-up-parent">
              <picture class="m-section-title__icon">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
              </picture>
              <span class="m-section-title__text m-section-title__text--middle">よくあるご質問</span>
            </h2>
            <div class="m-mystery-shopper-faq__contents">
              <div class="m-accordion-group js-fade-up-parent">
                <?php
                foreach ($faq_blocks as $block) {
                  if ($block['blockName'] === 'lazyblock/training-service-faq') {
                    $faq_loop_json = isset($block['attrs']['training-service-faq__loop']) ? urldecode($block['attrs']['training-service-faq__loop']) : '';
                    $faq_loop = !empty($faq_loop_json) ? json_decode($faq_loop_json, true) : array();

                    if (!empty($faq_loop)) {
                      foreach ($faq_loop as $faq_item) {
                        $faq_question = isset($faq_item['training-service-faq__question']) ? esc_html($faq_item['training-service-faq__question']) : '';
                        $faq_answer = isset($faq_item['training-service-faq__answer']) ? esc_html($faq_item['training-service-faq__answer']) : '';

                        // 質問または回答が存在する場合のみ表示
                        if (!empty($faq_question) || !empty($faq_answer)) :
                ?>
                          <details class="m-accordion">
                            <summary class="m-accordion__question js-accordion-open">
                              <span class="m-accordion__question-icon">Q</span>
                              <p class="m-accordion__question-text"><?php echo $faq_question; ?></p>
                            </summary>
                            <div class="m-accordion__answer js-accordion-answer">
                              <span class="m-accordion__answer-icon">A</span>
                              <p class="m-accordion__answer-text m-base-text"><?php echo nl2br($faq_answer); ?></p>
                            </div>
                          </details>
                <?php
                        endif;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  // FAQ構造化データの出力
  if ($has_faq_content && $has_actual_faq_content) {
    $faq_schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'FAQPage',
      'mainEntity' => array()
    );

    foreach ($faq_blocks as $block) {
      if ($block['blockName'] === 'lazyblock/training-service-faq') {
        $faq_loop_json = isset($block['attrs']['training-service-faq__loop']) ? urldecode($block['attrs']['training-service-faq__loop']) : '';
        $faq_loop = !empty($faq_loop_json) ? json_decode($faq_loop_json, true) : array();

        if (!empty($faq_loop)) {
          foreach ($faq_loop as $faq_item) {
            $faq_question = isset($faq_item['training-service-faq__question']) ? trim($faq_item['training-service-faq__question']) : '';
            $faq_answer = isset($faq_item['training-service-faq__answer']) ? trim($faq_item['training-service-faq__answer']) : '';

            // 質問と回答の両方が存在する場合のみ構造化データに追加
            if (!empty($faq_question) && !empty($faq_answer)) {
              $faq_schema['mainEntity'][] = array(
                '@type' => 'Question',
                'name' => $faq_question,
                'acceptedAnswer' => array(
                  '@type' => 'Answer',
                  'text' => $faq_answer
                )
              );
            }
          }
        }
        break;
      }
    }

    // 構造化データが存在する場合のみ出力
    if (!empty($faq_schema['mainEntity'])) {
      echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
    }
  }
  ?>

  <!-- お問い合わせ -->
  <section class="p-training-service__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->
</main>



<?php get_footer();
