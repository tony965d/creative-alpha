<?php get_header(); ?>

<main class="p-mystery-shopper">

  <section class="p-mystery-shopper__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title js-fade-up">覆面調査（ミステリーショッパー）</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- 覆面調査 (ミステリーショッパー)の特徴 -->
  <section class="p-mystery-shopper__features">
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
    <div class="m-mystery-shopper-features l-outer">
      <div class="m-mystery-shopper-features__inner l-inner">
        <div class="m-mystery-shopper-features__wrapper">
          <h2 class="m-section-title m-section-title--center js-fade-up-parent">
            <picture class="m-section-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-section-title__text m-section-title__text--middle">覆面調査 (ミステリーショッパー)の特徴</span>
          </h2>
          <div class="m-mystery-shopper-features__contents">
            <div class="m-mystery-shopper-features__item">
              <picture class="m-mystery-shopper-features__image js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/features.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/features.png" alt="タブレットを操作するスーツ姿の女性ビジネスパーソン" width="802" height="535" loading="lazy">
              </picture>
              <div class="m-mystery-shopper-features__lead">
                <h3 class="m-mystery-shopper-features__subtitle js-fade-up">
                  売上に直結するCX視点の覆面調査で<br>
                  顧客ロイヤリティや商売力を<br>
                  劇的に強化！
                </h3>
              </div>
            </div>
            <p class="m-base-text js-fade-up">
              「CXラウンドリサーチ」は顧客の感情を数値化し、売上との相関性が強い指標であるCXを徹底調査することで、実践的な改善策を導き出します。<br>
              <br>
              小売・飲食・サービス業などの現場責任者の多くが抱える「接客力の低下」「顧客ロイヤルティ向上策の不透明」「リアル店舗の価値向上策の不足」といった課題を解決に導く強力な調査です。<br>
              <br>
              店舗ビジネスを熟知した専門家が、潜在的な問題をあぶりだし、覆面調査だけでなく個別指導や研修など、成果を出すための体制もトータルでサポート。<br>
              利益直結のノウハウが凝縮された報告資料を提出させて頂きます。<br>
              <br>
              調査後は店長面談や現地指導の実施をおこない、そのお店を利用する顧客が得られる最高の「顧客体験価値」が何か導き出し、店舗の総合力を強化します。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 覆面調査 (ミステリーショッパー)の特徴 -->

  <!-- こんなお悩みがある方へ -->
  <section class="p-mystery-shopper__problems">
    <div class="m-mystery-shopper-problems">
      <div class="m-mystery-shopper-problems__inner l-inner">
        <div class="m-mystery-shopper-problems__wrapper">
          <h2 class="m-section-title m-section-title--center">
            <span class="m-section-title__text m-section-title__text--large js-fade-up">こんなお悩みがある方へ</span>
          </h2>
          <div class="m-mystery-shopper-problems__speech-bubble-group js-fade-up-parent">
            <picture class="m-mystery-shopper-problems__speech-bubble m-mystery-shopper-problems__speech-bubble--first">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-1.png" alt="スタッフのモチベーション低下や人材育成に時間が割けない。" width="311" height="252" loading="lazy">
            </picture>
            <picture class="m-mystery-shopper-problems__speech-bubble m-mystery-shopper-problems__speech-bubble--second">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-2.png" alt="リピーターや口コミが伸び悩み、売上が停滞している。" width="283" height="230" loading="lazy">
            </picture>
            <picture class="m-mystery-shopper-problems__speech-bubble m-mystery-shopper-problems__speech-bubble--three">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-3.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-3.png" alt="顧客ロイヤルティが把握できず、効果的な改善策を打ち出せない" width="283" height="230" loading="lazy">
            </picture>
            <picture class="m-mystery-shopper-problems__speech-bubble m-mystery-shopper-problems__speech-bubble--fourth">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-4.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-4.png" alt="接客品質にばらつきがあり、顧客満足度を安定させられない。" width="311" height="252" loading="lazy">
            </picture>
            <picture class="m-mystery-shopper-problems__speech-bubble m-mystery-shopper-problems__speech-bubble--fifth">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-5.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems-speech-bubble-5.png" alt="客観的データに基づく戦略が不足し、現場を説得しづらい" width="324" height="263" loading="lazy">
            </picture>
          </div>
          <picture class="m-mystery-shopper-problems__image js-fade-up">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/problems.png" alt="悩んでいるビジネスパーソンたちのイラスト" width="506" height="305" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
  </section>
  <!-- こんなお悩みがある方へ -->

  <!-- クリエイティブアルファの店舗調査が選ばれる3つのポイント -->
  <section class="p-mystery-shopper__point">
    <div class="m-mystery-shopper-point">
      <div class="m-mystery-shopper-point__inner l-inner">
        <h2 class="m-section-title m-section-title--center js-fade-up-parent">
          <picture class="m-section-title__icon">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
          </picture>
          <span class="m-section-title__text m-section-title__text--middle">クリエイティブアルファの店舗調査が選ばれる3つのポイント</span>
        </h2>
        <div class="m-mystery-shopper-point__wrapper l-two-columns">
          <div class="m-mystery-shopper-point__contents l-two-columns__item">
            <div class="m-mystery-shopper-point__body l-two-columns__left js-fade-up-parent">
              <div class="m-mystery-shopper-point__body-heading">
                <span class="m-mystery-shopper-point__sub-text">特徴</span>
                <span class="m-mystery-shopper-point__number">01</span>
              </div>
              <h3 class="m-mystery-shopper-point__subtitle">
                調査員は店舗ビジネスを<br>
                熟知する現役講師！課題解決まで 丁寧にサポート
              </h3>
              <div class="m-mystery-shopper-point__text-wrapper">
                <p class="m-base-text">
                  調査員は、店舗ビジネスを熟知したエキスパートで、
                  各 エリアマーケットに対して「お客様が、どう感じるか」商圏を熟知した専門家が、
                  徹底したお客様視点で顧客感情を数値化し、改善へと繋げていきます。
                </p>
              </div>
            </div>
            <picture class="m-mystery-shopper-point__image l-two-columns__right js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/point-1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/point-1.jpg" alt="屋外カフェでパソコンとスマートフォンを使うビジネスウーマン" width="400" height="300" loading="lazy">
            </picture>
          </div>
          <div class="m-mystery-shopper-point__contents l-two-columns__item">
            <div class="m-mystery-shopper-point__body l-two-columns__left js-fade-up-parent">
              <div class="m-mystery-shopper-point__body-heading">
                <span class="m-mystery-shopper-point__sub-text">特徴</span>
                <span class="m-mystery-shopper-point__number">02</span>
              </div>
              <h3 class="m-mystery-shopper-point__subtitle">
                売上との相関性が強い指標<br>
                「顧客体験価値（CX）」にフォーカスした調査
              </h3>
              <div class="m-mystery-shopper-point__text-wrapper">
                <p class="m-base-text">
                  お店のCSだけではなく、お客様の未来の感情値（また来たい！友達を紹介したい！SNSで拡散したい！）など、
                  売上との相関性が強い指標であるCX基準で調査。接客・店舗のクオリティを分析しています。
                </p>
              </div>
            </div>
            <picture class="m-mystery-shopper-point__image l-two-columns__right js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/point-2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/point-2.jpg" alt="店舗で買い物袋を手渡しする笑顔の女性スタッフ" width="400" height="300" loading="lazy">
            </picture>
          </div>
          <div class="m-mystery-shopper-point__contents l-two-columns__item">
            <div class="m-mystery-shopper-point__body l-two-columns__left js-fade-up-parent">
              <div class="m-mystery-shopper-point__body-heading">
                <span class="m-mystery-shopper-point__sub-text">特徴</span>
                <span class="m-mystery-shopper-point__number">03</span>
              </div>
              <h3 class="m-mystery-shopper-point__subtitle">
                課題を解消するための<br>
                適切な研修や個別指導を受けられる
              </h3>
              <div class="m-mystery-shopper-point__text-wrapper">
                <p class="m-base-text">
                  従業員が勤務中に考えていること・意識していることを定量的に把握できるため、
                  覆面調査後の店舗体質改善に向けた研修・アドバイス相談会、個別面談など、
                  要望に合わせて多彩な教育サービスを企画できるのが強み。
                  現役講師による実践的なフィードバックや研修を受けることができ、店舗の総合力を高めていけます。
                </p>
              </div>
            </div>
            <picture class="m-mystery-shopper-point__image l-two-columns__right js-fade-up">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/point-3.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/point-3.jpg" alt="パソコンを使いながら打ち合わせをするアパレルスタッフ" width="400" height="300" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- クリエイティブアルファの店舗調査が選ばれる3つのポイント -->

  <!-- 覆面調査料金 -->
  <section class="p-mystery-shopper__fee">
    <div class="m-mystery-shopper-fee">
      <div class="m-mystery-shopper-fee__inner l-inner">
        <div class="m-mystery-shopper-fee__wrapper">
          <h2 class="m-section-title m-section-title--center js-fade-up-parent">
            <picture class="m-section-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-section-title__text m-section-title__text--middle">覆面調査料金</span>
          </h2>
          <div class="m-mystery-shopper-fee__box-wrapper l-grid-two">
            <div class="m-fee-box js-fade-up">
              <h3 class="m-fee-box__header">
                <picture class="m-fee-box__header-icon">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-title-icon.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-title-icon.png" alt="" width="29" height="25" loading="lazy">
                </picture>
                <span class="m-fee-box__header-title">商業施設様向け料金</span>
              </h3>
              <div class="m-fee-box__body">
                <dl class="m-fee-box__list">
                  <div class="m-fee-box__item m-fee-box__item--first">
                    <dt class="m-fee-box__item-title">
                      <picture class="m-fee-box__item-icon">
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.png" alt="" width="18" height="16" loading="lazy">
                      </picture>
                      初期費用
                    </dt>
                    <dd class="m-fee-box__price">10万円</dd>
                  </div>
                  <div class="m-fee-box__item">
                    <dt class="m-fee-box__item-title">
                      <picture class="m-fee-box__item-icon">
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.png" alt="" width="18" height="16" loading="lazy">
                      </picture>
                      調査費用
                    </dt>
                    <dd class="m-fee-box__price">
                      <span class="m-fee-box__price-small">単価</span>1.8
                      <span class="m-fee-box__price-small">万〜</span>2.5
                      <span class="m-fee-box__price-small">万円/店</span>
                    </dd>
                  </div>
                </dl>
                <ul class="m-fee-box__note-wrapper">
                  <li class="m-fee-box__note">
                    ※<span class="m-fee-box__note-text">実施店舗数によりディスカウントさせて頂いております。<br>
                      例) 100店舗の場合の概算(1店舗単価:14,400円〜18,750円程度となります。)</span>
                  </li>
                  <li class="m-fee-box__note">※<span class="m-fee-box__note-text">初期費用(10万円) + 1,440,000円〜1,875,000円</span></li>
                  <li class="m-fee-box__note">※<span class="m-fee-box__note-text">交通費及び調査に関わる実費費用は別途ご請求</span></li>
                  <li class="m-fee-box__note">※<span class="m-fee-box__note-text">ご予算やご希望に合わせてプランニング致しますので、ご要望などお申し付け下さい。</span></li>
                  <li class="m-fee-box__note">※<span class="m-fee-box__note-text">別途消費税</span></li>
                </ul>
              </div>
            </div>
            <div class="m-fee-box js-fade-up">
              <h3 class="m-fee-box__header">
                <picture class="m-fee-box__header-icon">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-title-icon.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-title-icon.png" alt="" width="29" height="25" loading="lazy">
                </picture>
                <span class="m-fee-box__header-title">企業様向け料金</span>
              </h3>
              <div class="m-fee-box__body">
                <dl class="m-fee-box__list">
                  <div class="m-fee-box__item m-fee-box__item--first">
                    <dt class="m-fee-box__item-title">
                      <picture class="m-fee-box__item-icon">
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.png" alt="" width="18" height="16" loading="lazy">
                      </picture>
                      初期費用
                    </dt>
                    <dd class="m-fee-box__price">10万円</dd>
                  </div>
                  <div class="m-fee-box__item">
                    <dt class="m-fee-box__item-title">
                      <picture class="m-fee-box__item-icon">
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/fee-box-item-icon.png" alt="" width="18" height="16" loading="lazy">
                      </picture>
                      調査費用
                    </dt>
                    <dd class="m-fee-box__price">3<span class="m-fee-box__price-small">万円～/店</span></dd>
                  </div>
                </dl>
                <ul class="m-fee-box__note-wrapper">
                  <li class="m-fee-box__note">
                    ※<span class="m-fee-box__note-text">交通費及び調査に関わる実費費用は別途ご請求。<br>
                      ご予算やご希望に合わせて、オリジナルのプランニングも可能ですので、ご要望などお申し付け下さい。
                    </span>
                  </li>
                  <li class="m-fee-box__note">※<span class="m-fee-box__note-text">別途消費税</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 覆面調査料金 -->

  <!-- 覆面調査及び店長個別面談プログラム -->
  <section class="p-mystery-shopper__program">
    <div class="m-mystery-shopper-program">
      <div class="m-mystery-shopper-program__inner l-inner">
        <div class="m-mystery-shopper-program__wrapper">
          <h2 class="m-section-title m-section-title--center js-fade-up-parent">
            <picture class="m-section-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-section-title__text m-section-title__text--middle">覆面調査及び店長個別面談プログラム</span>
          </h2>
          <h3 class="m-mystery-shopper-program__subtitle js-fade-up">お店の総合力を上げる５つのステップ！</h3>
          <div class="m-mystery-shopper-program__step-wrapper l-grid-five js-fade-up-parent">
            <div class="m-program-step">
              <div class="m-program-step__header-shadow">
                <div class="m-program-step__header m-program-step__header--first">
                  <div class="m-program-step__number js-fade-up">
                    <span class="m-program-step__number-text">STEP</span>01
                  </div>
                </div>
              </div>
              <div class="m-program-step__body">
                <h4 class="m-program-step__title">調査員による覆面調査</h4>
                <p class="m-program-step__text">
                  プロの調査員が徹底したお客様視点で顧客感情を数値化！
                </p>
              </div>
            </div>
            <div class="m-program-step">
              <div class="m-program-step__header-shadow">
                <div class="m-program-step__header m-program-step__header--second">
                  <div class="m-program-step__number js-fade-up">
                    <span class="m-program-step__number-text">STEP</span>02
                  </div>
                </div>
              </div>
              <div class="m-program-step__body">
                <h4 class="m-program-step__title">各店長による自己採点</h4>
                <p class="m-program-step__text">
                  店長の自己採点による、現在の認識（意識）を数値化！
                </p>
              </div>
            </div>
            <div class="m-program-step">
              <div class="m-program-step__header-shadow">
                <div class="m-program-step__header m-program-step__header--third">
                  <div class="m-program-step__number js-fade-up">
                    <span class="m-program-step__number-text">STEP</span>03
                  </div>
                </div>
              </div>
              <div class="m-program-step__body">
                <h4 class="m-program-step__title">
                  アドバイザーによる<br>
                  集計報告
                </h4>
                <p class="m-program-step__text">
                  調査報告資料まとめ<br>
                  （全体）
                </p>
              </div>
            </div>
            <div class="m-program-step">
              <div class="m-program-step__header-shadow">
                <div class="m-program-step__header m-program-step__header--fourth">
                  <div class="m-program-step__number js-fade-up">
                    <span class="m-program-step__number-text">STEP</span>04
                  </div>
                </div>
              </div>
              <div class="m-program-step__body">
                <h4 class="m-program-step__title">
                  アドバイザーによる<br>
                  店長面談
                </h4>
                <p class="m-program-step__text">
                  個店毎の調査レポートを基に面談 ※店長面談は任意にて選択可。実施店舗数も指定できます。
                </p>
              </div>
            </div>
            <div class="m-program-step">
              <div class="m-program-step__header-shadow">
                <div class="m-program-step__header m-program-step__header--fifth">
                  <div class="m-program-step__number js-fade-up">
                    <span class="m-program-step__number-text">STEP</span>05
                  </div>
                </div>
              </div>
              <div class="m-program-step__body">
                <h4 class="m-program-step__title">各店長による改善計画</h4>
                <p class="m-program-step__text">改善計画シート（任意）</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 覆面調査及び店長個別面談プログラム -->


  <!-- 覆面調査 (ミステリーショッパー)のお客様の声 -->
  <section class="p-mystery-shopper__voice">
    <div class="m-mystery-shopper-voice">
      <div class="m-mystery-shopper-voice__inner l-inner">
        <h2 class="m-section-title m-section-title--center js-fade-up-parent">
          <picture class="m-section-title__icon">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
          </picture>
          <span class="m-section-title__text m-section-title__text--middle">覆面調査 (ミステリーショッパー)のお客様の声</span>
        </h2>
        <div class="m-mystery-shopper-voice__wrapper">
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-7.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-7.jpg" alt="ショッピングモールの外観と通路を歩く人々" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">プロのショップアドバイザーの意見を聞けて良かったと思います</h3>
                  <p class="m-voice-contents__name">商業施設様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                これまでは一般の方に覆面調査をお願いしていたのですが、
                クリエイティブアルファさんの覆面調査はプロのショップアドバイザーが覆面調査をしてくださるということで、
                試しにお願いしました。調査結果を見て、やっぱりプロのショップアドバイザーの意見を聞けて良かったと思います。
                一般の方の感想を聞いても具体的にどう改善すれば良いかわからなかったのですが、
                プロのショップアドバイザーの方に具体的なアドバイスをしていただき、とても参考になりました。
              </p>
            </div>
          </div>
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-8.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-8.jpg" alt="アパレルショップのマネキンと店内の様子" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">覆面調査の結果、スタッフのCXの意識が十分でないことがわかりました</h3>
                  <p class="m-voice-contents__name">アパレルブランド様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                覆面調査の結果、スタッフのCXの意識が十分でないことがわかりました。今後は単に接客しているだけでは差別化ができないので、
                顧客体験を意識し、お客様に感動してもらえるような接客をする必要があると考えています。
                一部のスタッフにクリエイティブアルファさんのCX接客研修を受けさせていただきましたが、そちらも好評です。
                他のスタッフにも受けさせたいと思っています。
              </p>
            </div>
          </div>
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-9.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-9.jpg" alt="高級ブランドバッグが並ぶショーウィンドウ" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">スタッフをどう教育すれば良いかということまでアドバイスしてもらえた</h3>
                  <p class="m-voice-contents__name">服飾雑貨店様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                覆面調査の後の面談で、改善点だけではなく、スタッフをどう教育すれば良いかということまでアドバイスしてもらえたのは良かったです。
                これまでスタッフ育成のために様々な研修をおこなっていたのですが「このような点を改善する」といった目的意識が希薄だったような気がします。
                改善点が明確になり、それに合わせて研修を企画することでより効果的な研修を実施できると思います。継続的に覆面調査を依頼したいと思います。
              </p>
            </div>
          </div>
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-10.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-10.jpg" alt="宝石やアクセサリーが並ぶジュエリーのディスプレイ" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">自社に合わせて内容をしっかりと練っていただけた</h3>
                  <p class="m-voice-contents__name">ジュエリーブランド様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                覆面調査とスタッフ研修を実施していただきありがとうございました。覆面調査も研修も全てお任せできるので良かったです。
                最初にヒアリングしていただき、自社に合わせて内容をしっかりと練っていただけたので、安心してお任せすることができました。
                今度は店舗相談会もお願いしたいと考えています。引き続き、宜しくお願いいたします。
              </p>
            </div>
          </div>
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-11.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-11.jpg" alt="ハンドドリップでコーヒーを淹れている様子" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">色々と融通をきかせていただきありがとうございました</h3>
                  <p class="m-voice-contents__name">カフェチェーン店様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                複数の覆面調査の会社に見積りを依頼したのですが、予算内で覆面調査を実施できる会社はありませんでした。
                しかし、クリエイティブアルファさんに費用について相談したところ、予算内になるよう対象店舗数や内容を変更していただき、
                なんとか予算内で覆面調査を実施することができました。無理なご相談にもかかわらず、
                色々と融通をきかせていただきありがとうございました。またお願いします。
              </p>
            </div>
          </div>
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-12.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-12.jpg" alt="家具やインテリアが並ぶ明るい店内" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">テナントの店長様からも好評な調査で現場の成長につながっている</h3>
                  <p class="m-voice-contents__name">商業施設様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                以前までは覆面調査に関しては、テナントの店長様からも、
                「その瞬間を切り取っただけの、現状のほんの一部分しか可視化されない」とあまり好評ではありませんでした。
                今回、クリエイティブアルファさんに調査をしていただいたことで、「テナントそれぞれの指導面、
                育成面を含めた店舗運営に関する課題点」に対して最もコアな部分にも気付くきっかけになった店舗様が多く、
                毎年「調査の時期」が近づくと明らかに「現場の空気感が変わる」のを感じますし、それが現場の成長につながっていることが嬉しく思います。
              </p>
            </div>
          </div>
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-13.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-13.jpg" alt="カラフルなバッグが並ぶ店内の売り場" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">テナントスタッフの「やる気」に繋がる フォローが大変心強い</h3>
                  <p class="m-voice-contents__name">商業施設様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                クリエイティブアルファさんの「個店別調査報告シート」は仮に調査結果内容が悪かった場合でも、
                基本的に文章のアプローチが「現場を応援する姿勢を重視」しているので、
                しっかり「改善点」が可視化される中で、同時に「現場の強み」も知ることができます。<br>
                「あとはここさえしっかりレベルアップできればワンランク上の店舗運営ができる」という前向きな内容により、
                現場リーダー及びスタッフたちの「やる気」や「モチベーション」がアップするのを肌で感じることができるのはディベロッパー側としても大変心強いです。
              </p>
            </div>
          </div>
          <div class="m-voice-contents m-voice-contents--mystery-shopper">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-14.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-14.jpg" alt="白を基調としたアパレルショップの店内にディスプレイされたカラフルな洋服" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">アドバイスから実際に売上アップにつながった店舗も</h3>
                  <p class="m-voice-contents__name">商業施設様</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__description">
              <p class="m-base-text js-fade-up">
                クリエイティブアルファさんの覆面調査は「おもてなし面」「環境面」「CX＝顧客体験価値面」において、
                「店舗運営のプロである、全国の商業施設を熟知された調査員（専門講師の方）」が、
                その項目それぞれにおいて「お客様が感じている」感情を数値化してくれます。
                館内100以上のテナントそれぞれが実際「マーケットに対してどのように向き合い、
                どの程度現状魅力を発揮しているか」も可視化されますので、フロアマネージメントにおいても大変参考になりますし、
                調査結果から得たアドバイスにより、売上アップに繋がっている店舗も出ていますので、
                今後も継続して調査をお願い出来ればと思っています。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 覆面調査 (ミステリーショッパー)のお客様の声 -->

  <!-- よくあるご質問 -->
  <section class="p-mystery-shopper__faq">
    <div class="m-mystery-shopper-faq">
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
              <details class="m-accordion">
                <summary class="m-accordion__question js-accordion-open">
                  <span class="m-accordion__question-icon">Q</span>
                  <p class="m-accordion__question-text">全国対応は可能でしょうか？</p>
                </summary>
                <div class="m-accordion__answer js-accordion-answer">
                  <span class="m-accordion__answer-icon">A</span>
                  <p class="m-accordion__answer-text m-base-text">はい。対応可能です。</p>
                </div>
              </details>
              <details class="m-accordion">
                <summary class="m-accordion__question js-accordion-open">
                  <span class="m-accordion__question-icon">Q</span>
                  <p class="m-accordion__question-text">どのくらいの回数、頻度で導入したほうがよいですか？</p>
                </summary>
                <div class="m-accordion__answer js-accordion-answer">
                  <span class="m-accordion__answer-icon">A</span>
                  <p class="m-accordion__answer-text m-base-text">年1回の実施をされる企業様が多く御座います。目的や業態などにより、年間でも複数回実施する企業様も御座いますので、ご要望にあわせて、カスタマイズさせて頂きます。</p>
                </div>
              </details>
              <details class="m-accordion">
                <summary class="m-accordion__question js-accordion-open">
                  <span class="m-accordion__question-icon">Q</span>
                  <p class="m-accordion__question-text">調査員はどんな人ですか？</p>
                </summary>
                <div class="m-accordion__answer js-accordion-answer">
                  <span class="m-accordion__answer-icon">A</span>
                  <p class="m-accordion__answer-text m-base-text">調査員はすべて、小売経験者で、現在も小売・飲食・サービス業界にて、現役の講師として研修やOJT指導等を行っているプロの専門調査員となります。</p>
                </div>
              </details>
              <details class="m-accordion">
                <summary class="m-accordion__question js-accordion-open">
                  <span class="m-accordion__question-icon">Q</span>
                  <p class="m-accordion__question-text">他の覆面調査と違うところはどこですか？</p>
                </summary>
                <div class="m-accordion__answer js-accordion-answer">
                  <span class="m-accordion__answer-icon">A</span>
                  <p class="m-accordion__answer-text m-base-text">通常の覆面調査はCS（顧客満足）基準の調査となりますが、当社は売上との相関性 が強いCX（顧客体験価値）基準の調査となります。また、調査後の店長面談・現地指導の実施を行い、お店の総合力を強化することが可能です。</p>
                </div>
              </details>
              <details class="m-accordion">
                <summary class="m-accordion__question js-accordion-open">
                  <span class="m-accordion__question-icon">Q</span>
                  <p class="m-accordion__question-text">調査できない店舗はありますか？</p>
                </summary>
                <div class="m-accordion__answer js-accordion-answer">
                  <span class="m-accordion__answer-icon">A</span>
                  <p class="m-accordion__answer-text m-base-text">小売、飲食、サービス、アミューズメント業界等で御座いましたら、特に制限は御座いませんので、ご相談下さい。</p>
                </div>
              </details>
            </div>
          </div>
        </div>

        <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "全国対応は可能でしょうか？",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "はい。対応可能です。"
                }
              },
              {
                "@type": "Question",
                "name": "どのくらいの回数、頻度で導入したほうがよいですか？",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "年1回の実施をされる企業様が多く御座います。目的や業態などにより、年間でも複数回実施する企業様も御座いますので、ご要望にあわせて、カスタマイズさせて頂きます。"
                }
              },
              {
                "@type": "Question",
                "name": "調査員はどんな人ですか？",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "調査員はすべて、小売経験者で、現在も小売・飲食・サービス業界にて、現役の講師として研修やOJT指導等を行っているプロの専門調査員となります。"
                }
              },
              {
                "@type": "Question",
                "name": "他の覆面調査と違うところはどこですか？",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "通常の覆面調査はCS（顧客満足）基準の調査となりますが、当社は売上との相関性が強いCX（顧客体験価値）基準の調査となります。また、調査後の店長面談・現地指導の実施を行い、お店の総合力を強化することが可能です。"
                }
              },
              {
                "@type": "Question",
                "name": "調査できない店舗はありますか？",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "小売、飲食、サービス、アミューズメント業界等で御座いましたら、特に制限は御座いませんので、ご相談下さい。"
                }
              }
            ]
          }
        </script>

        <div class="m-mystery-shopper-faq__bottom">
          <div class="m-media-coverage">
            <h3 class="m-media-coverage__title js-fade-up">メディア掲載</h3>
            <div class="m-media-coverage__pickup js-fade-up">
              <span class="m-media-coverage__text">弊社が</span>
              <picture class="m-media-coverage__icon">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/media-coverage-icon.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/mystery-shopper/media-coverage-icon.png" alt="" width="30" height="25" loading="lazy">
              </picture>
              <span class="m-media-coverage__text-highlight">ランキング1位</span>
              <span class="m-media-coverage__text">で紹介されました！</span>
            </div>
            <div class="m-media-coverage__button js-fade-up">
              <a href="https://mysteryshopper-hikaku.info/" class="m-button" target="_blank" rel="noopener noreferrer">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- よくあるご質問 -->

  <!-- お問い合わせ -->
  <section class="p-mystery-shopper__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->

</main>

<?php get_footer(); ?>