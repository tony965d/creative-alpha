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

  <section class="p-single-training-service">
    <!-- パンくず -->
    <div class="m-breadcrumb">
      <div class="m-breadcrumb__inner l-inner">
        <div class="wp-breadcrumb">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <div class="p-single-training-service__outer l-outer">
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
              <h4 class="m-training-service-block__title">お店のファンを増やすヒアリングの極意</h4>
              <dl class="m-training-service-block__list m-definition-list">
                <div class="m-definition-list__item">
                  <dt class="m-definition-list__term">
                    <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-flag.svg" alt="" width="22" height="22" loading="lazy"></span>目的
                  </dt>
                  <dd class="m-definition-list__description">お客様が主役となるヒアリング中心の接客シーンを獲得強化する</dd>
                </div>
                <div class="m-definition-list__item">
                  <dt class="m-definition-list__term">
                    <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-student.svg" alt="" width="22" height="22" loading="lazy"></span>受講対象者
                  </dt>
                  <dd class="m-definition-list__description">
                    ワンランク上のおもてなし技術を獲得したい方。<br>
                    お店の顧客や常連をもっと増やしたいと感じている方。
                  </dd>
                </div>
                <div class="m-definition-list__item">
                  <dt class="m-definition-list__term">
                    <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-article.svg" alt="" width="22" height="22" loading="lazy"></span>研修内容
                  </dt>
                  <dd class="m-definition-list__description">
                    <ul>
                      <li>お店のファンの増やし方</li>
                      <li>CX＝顧客体験価値向上</li>
                      <li>顧客心理学2023／ニーズとウォンツ</li>
                      <li>ラポールで信頼関係を構築しよう！</li>
                      <li>ラポールトレーニング！</li>
                      <li>｢こと｣消費／｢こと｣提供がリアル店舗の強み！</li>
                      <li>あなたのお店の｢こと｣って何？</li>
                      <li>ヒアリング強化トレーニング！</li>
                    </ul>
                  </dd>
                </div>
                <div class="m-definition-list__item">
                  <dt class="m-definition-list__term">
                    <span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-voice.svg" alt="" width="22" height="22" loading="lazy"></span>参加者声
                  </dt>
                  <dd class="m-definition-list__description">
                    <ul>
                      <li>ヒヤリングが課題と感じていたので今後も教えてもらったトレーニングを続けようと思った。</li>
                      <li>最新のお客様の考え方が理解できたのでスタッフ指導にも役立つと感じた。</li>
                    </ul>
                  </dd>
                </div>
                <div class="m-definition-list__item">
                  <dt class="m-definition-list__term">
                    <span class="m-definition-list__term-item"><span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-watch.svg" alt="" width="22" height="22" loading="lazy"></span>時間</span>
                    <span class="m-definition-list__term-item"><span class="m-definition-list__term-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/training-service-block-wallet.svg" alt="" width="22" height="22" loading="lazy"></span>料金</span>
                  </dt>
                  <dd class="m-definition-list__description">
                    <ul>
                      <li>2時間以内：15万円（税別）</li>
                      <li>半日（3～4時間）：25万円（税別）</li>
                      <li>1日（4時間以上）：35万円</li>
                    </ul>
                  </dd>
                </div>
              </dl>
              <p class="m-training-service-block__note">※【コーディング指示用】料金は入力が無ければ非表示になるように対応。以降も同様</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- お問い合わせ -->
  <section class="p-contact-cta">
    <?php get_template_part('template-parts/contact'); ?>
  </section>
  <!-- /お問い合わせ -->
</main>

<?php get_footer();
