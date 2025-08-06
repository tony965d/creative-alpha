<?php get_header(); ?>

<main class="p-home">
  <!-- メインビジュアル -->
  <section class="p-home__mv">
    <div class="m-mv">
      <div class="m-mv__wrapper">
        <div class="swiper js-swiper-mv">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture class="m-mv__image">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-1.webp" type="image/webp">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-1.jpg">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-1.jpg" alt="飲食店で注文を取る笑顔の女性スタッフ" width="1440" height="700" loading="lazy">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="m-mv__image">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-2.webp" type="image/webp">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-2.jpg">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-2.jpg" alt="化粧品売り場で笑顔の女性スタッフ" width="1440" height="700" loading="lazy">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="m-mv__image">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-3.webp" type="image/webp">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-3.jpg">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-3.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-3.jpg" alt="ホテルや店舗でお客様を案内する女性スタッフ" width="1440" height="700" loading="lazy">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="m-mv__image">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-4.webp" type="image/webp">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-pc-4.jpg">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-4.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/mv-sp-4.jpg" alt="飲食店でグラスを運ぶ男性スタッフ" width="1440" height="700" loading="lazy">
              </picture>
            </div>
          </div>
        </div>
        <div class="m-mv__body">
          <h1 class="m-mv__subtitle">店舗ビジネスに特化！<br class="u-only--sp">研修・覆面調査サービス</h1>
          <div class="m-mv__title js-fade-up-parent">
            <div class="m-mv__title-main">
              <span>お客様に<strong class="m-mv__title-main-accent">感動</strong>を。</span>
              <span>スタッフに<strong class="m-mv__title-main-accent">やりがい</strong>を。</span>
            </div>
            <p class="m-mv__title-sub">
              ショップスタッフが笑顔でやりがいを持ち、<br class="u-only--pc">
              お客様に更なる感動をご提供できるように私たちがお手伝いします。
            </p>
          </div>
          <div class="m-mv__body-button js-fade-up">
            <a href="<?php echo home_url('/contact/'); ?>" class="m-contact-button m-contact-button--mv"><i class="fa-solid fa-envelope"></i>お問い合わせ<i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /メインビジュアル -->

  <!-- クリエイティブアルファについて -->
  <section class="p-home__about">
    <div class="m-home-about">
      <div class="m-home-about__inner l-inner">
        <div class="m-home-about__wrapper">
          <div class="m-home-about__top l-two-columns">
            <div class="m-home-about__top-item l-two-columns__item">
              <div class="m-home-about__top-left l-two-columns__left js-fade-up-parent">
                <hgroup class="m-section-header">
                  <p class="m-section-header__subtitle">About Us</p>
                  <h2 class="m-section-header__title">クリエイティブアルファについて</h2>
                </hgroup>
              </div>
              <div class="m-home-about__top-right l-two-columns__right js-fade-up">
                <picture class="m-home-about__top-image">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-about-1.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-about-1.png" alt="ショップスタッフが接客について話し合っている様子" width="520" height="376" loading="lazy">
                </picture>
              </div>
            </div>
          </div>
          <div class="m-home-about__content l-two-columns">
            <div class="m-home-about__content-item l-two-columns__item">
              <picture class="m-home-about__content-image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-about-2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-about-2.png" alt="会議でプレゼンテーションを行うビジネスマン" width="423" height="287" loading="lazy">
              </picture>
              <div class="m-home-about__content-body l-two-columns__right js-fade-up-parent">
                <p class="m-base-text">
                  クリエイティブアルファは小売・飲食・サービス業などの企業様や商業施設のテナント様向けに研修や覆面調査サービスを提供しております。
                  スタッフの育成やリアル店舗の価値、顧客ロイヤルティ向上など店舗事業に関する課題をヒアリングし、
                  課題解決に最も効果的な研修や調査をオーダーメイドで企画いたします。
                </p>
                <div class="m-home-about__content-body-button">
                  <a href="<?php echo home_url('/about/'); ?>" class="m-button">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>
          <div class="m-home-about__button-unit-wrapper">
            <div class="m-square-button-unit js-fade-up-parent">
              <a href="#home-training-service" class="m-square-button m-square-button--training-service u-hover">
                <picture class="m-square-button__icon m-square-button__icon--training-service">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-1.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-1.jpg" alt="活発に議論しているビジネス会議のイラスト" width="109" height="61" loading="lazy">
                </picture>
                <span class="m-square-button__text">研修サービス</span>
              </a>
              <a href="#home-mystery-shopper" class="m-square-button m-square-button--mystery-shopper u-hover">
                <picture class="m-square-button__icon m-square-button__icon--mystery-shopper">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-2.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-2.jpg" alt="虫眼鏡を持って調査するビジネスマンのイラスト" width="42" height="63" loading="lazy">
                </picture>
                <span class="m-square-button__text">覆面調査<span class="m-square-button__text-sub">（ミステリーショッパー）</span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- /クリエイティブアルファについて -->

  <!-- 研修サービス -->
  <section id="home-training-service" class="p-home__training-service">
    <div class="m-home-training-service">
      <div class="m-home-training-service__inner l-inner">
        <picture class="m-home-training-service__bg-icon js-fade-up">
          <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-service-training-icon.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-service-training-icon.png" alt="" width="129" height="95" loading="lazy">
        </picture>
        <div class="m-home-training-service__header js-fade-up-parent">
          <hgroup class="m-section-header m-section-header--training-service">
            <p class="m-section-header__subtitle">Training</p>
            <h2 class="m-section-header__title">研修サービス</h2>
          </hgroup>
          <div class="m-home-training-service__header-text">
            <p class="m-base-text">
              クリエイティブアルファでは、小売・飲食・サービス業の企業様や商業施設のテナント様向けに研修サービスを提供しております。<br>
              店舗の課題や目指すゴールなどを事前にヒアリングさせていただき、必要に応じて店舗視察なども実施した上で、最も効果的な研修を企画します。
            </p>
          </div>
        </div>
        <div class="m-home-training-service__wrapper">
          <h3 class="m-service-training-title js-fade-up-parent">
            <picture class="m-service-training-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/service-training-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service-training-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-service-training-title__text">サンプルプログラムのご紹介</span>
          </h3>
          <div class="m-home-training-service__cards l-grid js-fade-up-parent">
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
                    <h3 class="m-card__title"><?php the_title(); ?></h3>
                  </div>
                  <div class="m-card__body">
                    <ul class="m-card__items">
                      <?php
                      // スラッグがyearlの投稿の場合
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
            <?php endif;  ?>
          </div>
        </div>
        <div class="m-home-training-service__bottom js-fade-up-parent">
          <div class="m-voice-block">
            <div class="m-voice-block__content js-fade-up-parent">
              <div class="m-voice-block__body js-fade-up-parent">
                <h3 class="m-voice-block__title">
                  <span class="m-voice-block__title-sub">研修を受けた</span>
                  <span class="m-voice-block__title-main">お客様の声</span>
                </h3>
                <div class="m-voice-block__button">
                  <a href="<?php echo home_url('/voice/'); ?>#voice-training-service" class="m-button">詳しく見る</a>
                </div>
              </div>
              <picture class="m-voice-block__image m-voice-block__image--service-training">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/voice-block-service-training.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/voice-block-service-training.png" alt="活発に議論しているビジネス会議のイラスト" width="272" height="152" loading="lazy">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /研修サービス -->

  <!-- 覆面調査 -->
  <section id="home-mystery-shopper" class="p-home__mystery-shopper">
    <div class="m-home-mystery-shopper">
      <div class="m-home-mystery-shopper__inner l-inner">
        <div class="m-home-mystery-shopper__wrapper">
          <div class="m-home-mystery-shopper__content l-two-columns">
            <div class="m-home-mystery-shopper__item l-two-columns__item">
              <picture class="m-home-mystery-shopper__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-mystery-shopper-1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/front-page/home-mystery-shopper-1.jpg" alt="ノートパソコンと手帳で仕事をする様子" width="527" height="318" loading="lazy">
              </picture>
              <div class="m-home-mystery-shopper__body l-two-columns__right js-fade-up-parent">
                <hgroup class="m-section-header">
                  <p class="m-section-header__subtitle">Mystery Shopper</p>
                  <h2 class="m-section-header__title m-section-header__title--mystery-shopper">覆面調査<span class="m-section-header__title-sub">（ミステリーショッパー）</span></h2>
                </hgroup>
                <div class="m-home-mystery-shopper__text">
                  <p class="m-base-text">
                    売上に直結するCX視点の覆面調査で顧客ロイヤルティや<br>
                    リアル店舗の価値向上など、店舗の商売力を総合的に強化致します！
                  </p>
                </div>
                <div class="m-home-mystery-shopper__button">
                  <a href="<?php echo home_url('/shoppers/'); ?>" class="m-button">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>
          <div class="m-home-mystery-shopper__bottom js-fade-up-parent">
            <div class="m-voice-block">
              <div class="m-voice-block__content m-voice-block__content--mystery-shopper js-fade-up-parent">
                <div class="m-voice-block__body js-fade-up-parent">
                  <h3 class="m-voice-block__title">
                    <span class="m-voice-block__title-sub">覆面調査を実施した</span>
                    <span class="m-voice-block__title-main">お客様の声</span>
                  </h3>
                  <div class="m-voice-block__button m-voice-block__button--mystery-shopper">
                    <a href="<?php echo home_url('/voice/'); ?>#voice-mystery-shopper" class="m-button">詳しく見る</a>
                  </div>
                </div>
                <picture class="m-voice-block__image m-voice-block__image--mystery-shopper">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/voice-block-mystery-shopper.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/voice-block-mystery-shopper.png" alt="虫眼鏡を持って調査するビジネスマンのイラスト" width="138" height="209" loading="lazy">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /覆面調査 -->

  <!-- おすすめ記事 -->
  <section class="p-home__column">
    <div class="m-home-column">
      <div class="m-home-column__inner l-inner">
        <div class="m-home-column__wrapper">
          <hgroup class="m-section-header m-section-header--column js-fade-up">
            <p class="m-section-header__subtitle m-section-header__subtitle--column">Pickup Column</p>
            <h2 class="m-section-header__title m-section-header__title--column">おすすめ記事</h2>
          </hgroup>
          <div class="m-home-column__cards l-grid js-fade-up-parent">
            <?php
            $column_query = new WP_Query(
              array(
                'post_type'      => 'column',
                'posts_per_page' => 3,
              )
            );
            ?>
            <?php if ($column_query->have_posts()) : ?>
              <?php while ($column_query->have_posts()) : ?>
                <?php $column_query->the_post(); ?>

                <a href="<?php the_permalink() ?>" class="m-column-card u-hover">
                  <figure class="m-column-card__thumbnail">
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                    <?php } else { ?>
                      <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.png" alt="<?php echo esc_attr(get_the_title()); ?>" width="300" height="168" loading="lazy">
                      </picture>
                    <?php } ?>
                  </figure>
                  <div class="m-column-card__header">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="m-column-card__date"><?php the_time('Y.m.d'); ?></time>
                  </div>
                  <h3 class="m-column-card__title"><?php the_title(); ?></h3>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif;  ?>
          </div>
          <div class="m-home-column__button js-fade-up">
            <a href="<?php echo home_url('/column/'); ?>" class="m-button m-button--invert">一覧を見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /おすすめ記事 -->


  <!-- お問い合わせ -->
  <section class="p-home__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->

</main>

<?php get_footer();
