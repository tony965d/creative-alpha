<?php get_header(); ?>

<main class="p-about">

  <section class="p-about__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title m-page-title--large js-fade-up">クリエイティブアルファについて</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- 創業ストーリー＆ミッション -->
  <section class="p-about__header">
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
    <div class="m-about-header l-outer">
      <div class="m-about-header__inner l-inner">
        <div class="m-about-header__title-wrapper">
          <h2 class="m-section-title js-fade-up-parent">
            <picture class="m-section-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-section-title__text m-section-title__text--large">ミッション</span>
          </h2>
          <div class="m-about-header__contents l-two-columns">
            <div class="m-about-header__item l-two-columns__item">
              <div class="m-about-header__body l-two-columns__left js-fade-up-parent">
                <p class="m-about-header__text">商環境の未来を切り拓く。</p>
                <p class="m-about-header__text">
                  あらゆるキタイに、お応えすること。<br>
                  それは、「驚きたい」と思う企業の期待に、＋アルファの提案で応えること。<br>
                  それは、「行きたい」と感じる消費者の期待に、クリエイティブで応えること。
                </p>
                <p class="m-about-header__text">
                  期待に応え、新しい価値を創る。<br>
                  どこまでも、徹底的に。
                </p>
              </div>
              <picture class="m-about-header__image l-two-columns__right js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/about/about-header.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-header.png" alt="前向きな姿勢で決意を示すビジネスパーソンたち" width="429" height="310" loading="lazy">
              </picture>
            </div>
          </div>
          <div class="m-about-header__button-wrapper">
            <div class="m-square-button-unit m-square-button-unit--wide">
              <a href="#about-training-service" class="m-square-button m-square-button--about-training-service u-hover js-fade-up">
                <picture class="m-square-button__icon m-square-button__icon--training-service">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-1.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-1.jpg" alt="活発に議論しているビジネス会議のイラスト" width="109" height="61" loading="lazy">
                </picture>
                <span class="m-square-button__text">研修サービスが選ばれる理由</span>
                <span class="u-triangle--right"></span>
              </a>
              <a href="#about-mystery-shopper" class="m-square-button m-square-button--about-mystery-shopper u-hover js-fade-up">
                <picture class="m-square-button__icon m-square-button__icon--mystery-shopper">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-2.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-2.jpg" alt="虫眼鏡を持って調査するビジネスマンのイラスト" width="42" height="63" loading="lazy">
                </picture>
                <span class="m-square-button__text">覆面調査サービスが選ばれる理由</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 創業ストーリー＆ミッション -->

  <!-- 研修サービスが選ばれる理由 -->
  <section id="about-training-service" class="p-about__training-service">
    <div class="m-about-training-service">
      <div class="m-about-training-service__inner l-inner">
        <h2 class="m-section-title js-fade-up-parent js-fade-up-parent">
          <picture class="m-section-title__icon">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
          </picture>
          <span class="m-section-title__text m-section-title__text--large">研修サービスが選ばれる理由</span>
        </h2>
        <div class="m-about-contents l-two-columns l-two-columns--zigzag">
          <div class="m-about-contents__item l-two-columns__item">
            <picture class="m-about-contents__image l-two-columns__left js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/about/about-training-service-1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-training-service-1.png" alt="飲食店スタッフが打ち合わせをしている様子" width="572" height="381" loading="lazy">
            </picture>
            <div class="m-about-contents__body l-two-columns__right js-fade-up-parent">
              <h3 class="m-content-subtitle">自ら答えに気づき、現場ですぐに実践できる</h3>
              <p class="m-base-text">
                クリエイティブアルファの研修では、受講者に気づきを与えることはもちろんですが、
                その気づきを具体的に理解し、自ら答えに行きつけるよう導きます。
                受講者は自分自身で答えに行きつくことで答えに納得がいき、
                実践・行動へと繋げることができるのです。
                短時間で仕事の本質を理解し、「心」の部分から行動できるようになるでしょう。
              </p>
            </div>
          </div>
          <div class="m-about-contents__item l-two-columns__item">
            <picture class="m-about-contents__image l-two-columns__left js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/about/about-training-service-2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-training-service-2.png" alt="明るい雰囲気でミーティングをする若い女性たち" width="572" height="381" loading="lazy">
            </picture>
            <div class="m-about-contents__body l-two-columns__right js-fade-up-parent">
              <h3 class="m-content-subtitle">楽しく主体的に学べるので研修の定着率が高い</h3>
              <p class="m-base-text">
                クリエイティブアルファの研修はグループで討論したり、ロールプレイングをおこなう体感型ワークショップ形式です。
                参加者が楽しみながら主体的に学ぶことができるので、研修の定着率が高く、現場での実践に繋がります。
                また、相手の考えを認めたり、尊重したりする姿勢を学び協調性を養うこともできるでしょう。
              </p>
            </div>
          </div>
          <div class="m-about-contents__item l-two-columns__item">
            <picture class="m-about-contents__image l-two-columns__left js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/about/about-training-service-3.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-training-service-3.png" alt="飲食店スタッフが打ち合わせをしている様子" width="572" height="381" loading="lazy">
            </picture>
            <div class="m-about-contents__body l-two-columns__right js-fade-up-parent">
              <h3 class="m-content-subtitle">課題やご要望に合った研修を企画してもらえる</h3>
              <p class="m-base-text">
                クリエイティブアルファでは、研修の導入背景や店舗の課題、目指すゴールなどを事前にヒアリングさせていただき、
                必要に応じて店舗視察なども実施した上で、最も効果的な研修を企画します。
                企画書の作成は無料で承っておりますので、まずはお気軽にご相談ください。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 研修サービスが選ばれる理由 -->

  <!-- 覆面調査サービスが選ばれる理由 -->
  <section id="about-mystery-shopper" class="p-about__mystery-shopper">
    <div class="m-about-mystery-shopper">
      <div class="m-about-mystery-shopper__inner l-inner">
        <h2 class="m-section-title js-fade-up-parent">
          <picture class="m-section-title__icon">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
          </picture>
          <span class="m-section-title__text m-section-title__text--large">覆面調査サービスが選ばれる理由</span>
        </h2>
        <div class="m-about-contents l-two-columns l-two-columns--zigzag">
          <div class="m-about-contents__item l-two-columns__item">
            <picture class="m-about-contents__image l-two-columns__left js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/about/about-mystery-shopper-1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-mystery-shopper-1.png" alt="タブレットでメモを取るビジネスウーマン" width="572" height="381" loading="lazy">
            </picture>
            <div class="m-about-contents__body l-two-columns__right js-fade-up-parent">
              <h3 class="m-content-subtitle">
                調査員は店舗ビジネスを熟知する現役講師！<br>
                課題解決まで 丁寧にサポート
              </h3>
              <p class="m-base-text">
                調査員は、店舗ビジネスを熟知したエキスパートで、
                各 エリアマーケットに対して「お客様が、どう感じるか」商圏を熟知した専門家が、
                徹底したお客様視点で顧客感情を数値化し、改善へと繋げていきます。
              </p>
            </div>
          </div>
          <div class="m-about-contents__item l-two-columns__item">
            <picture class="m-about-contents__image l-two-columns__left js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/about/about-mystery-shopper-2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-mystery-shopper-2.png" alt="カフェでパソコン作業をする女性" width="572" height="381" loading="lazy">
            </picture>
            <div class="m-about-contents__body l-two-columns__right js-fade-up-parent">
              <h3 class="m-content-subtitle">
                売上との相関性が強い指標<br>
                「顧客体験価値（CX）」にフォーカスした調査
              </h3>
              <p class="m-base-text">
                お店のCSだけではなく、お客様の感情値（また来たい！友達を紹介したい！SNSで拡散したい！）など、売上との相関性が強い指標であるCX基準で調査。接客・店舗のクオリティを分析しています。
              </p>
            </div>
          </div>
          <div class="m-about-contents__item l-two-columns__item">
            <picture class="m-about-contents__image l-two-columns__left js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/about/about-mystery-shopper-3.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-mystery-shopper-3.png" alt="履歴書を前に面接を行う様子" width="572" height="381" loading="lazy">
            </picture>
            <div class="m-about-contents__body l-two-columns__right js-fade-up-parent">
              <h3 class="m-content-subtitle">
                課題を解消するための<br>
                適切な研修や個別指導を受けられる
              </h3>
              <p class="m-base-text">
                従業員が勤務中に考えていること・意識していることを定量的に把握できるため、
                覆面調査後の店舗体質改善に向けた研修・アドバイス相談会、個別面談など、要望に合わせて多彩な教育サービスを企画できるのが強み。
                現役講師による実践的なフィードバックや研修を受けることができ、店舗の総合力を高めていけます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 覆面調査サービスが選ばれる理由 -->

  <!-- 導入事例 -->
  <section class="p-about__case-studies">
    <div class="m-about-case-studies">
      <div class="m-about-case-studies__inner l-inner">
        <h2 class="m-about-case-studies__title js-fade-up">導入実績</h2>
        <div class="m-about-case-studies__wrapper js-fade-up">
          <p class="m-about-case-studies__text">
            アパレル／ファッション雑貨／コスメ／和洋菓子／スポーツ／アウトドア／玩具／飲食／カフェ／商業施設／インテリア／生活雑貨／ホテル／美容／音楽／医療／保険／カルチャースクール／自動車／レンタル／生花／レジャー／リユース／etc
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- 導入事例 -->

  <!-- お問い合わせ -->
  <section class="p-about__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->


</main>

<?php get_footer(); ?>