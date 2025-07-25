<?php get_header(); ?>

<main class="p-voice">

  <section class="p-voice__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title m-page-title--large js-fade-up">お客様の声</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- アンカーリンク -->
  <section class="p-voice__header">
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
    <div class="m-voice-header l-outer">
      <div class="m-voice-header__inner l-inner">
        <div class="m-square-button-unit m-square-button-unit--max">
          <a href="#voice-training-service" class="m-square-button m-square-button--voice-training-service u-hover js-fade-up">
            <picture class="m-square-button__icon m-square-button__icon--training-service">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-1.jpg" alt="活発に議論しているビジネス会議のイラスト" width="109" height="61" loading="lazy">
            </picture>
            <span class="m-square-button__text">研修を受けたお客様の声</span>
            <span class="u-triangle--right"></span>
          </a>
          <a href="#voice-mystery-shopper" class="m-square-button m-square-button--voice-mystery-shopper u-hover js-fade-up">
            <picture class="m-square-button__icon m-square-button__icon--mystery-shopper">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/square-button-icon-2.jpg" alt="虫眼鏡を持って調査するビジネスマンのイラスト" width="42" height="63" loading="lazy">
            </picture>
            <span class="m-square-button__text">覆面調査を実施したお客様の声</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- アンカーリンク -->

  <!-- 研修を受けたお客様の声 -->
  <section id="voice-training-service" class="p-voice__training-service">
    <div class="m-voice-training-service">
      <div class="m-voice-training-service__inner l-inner">
        <h2 class="m-section-title m-section-title--center">
          <span class="m-section-title__text m-section-title__text--large js-fade-up">研修を受けたお客様の声</span>
        </h2>
        <div class="m-voice-training-service__wrapper">
          <div class="m-voice-contents">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-1.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-1.jpg" alt="笑顔の女性のプロフィール写真" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">良い結果が得られていると感じております。</h3>
                  <p class="m-voice-contents__name">株式会社ジュン　人見さま</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__body">
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を導入するきっかけ</h4>
                <p class="m-base-text">
                  常に変化する小売業界の中で、人材教育に関しては今あるものではない「何か」を求めていた社内の背景がありました。
                  もともと接客に関してはCSを軸としたスキル教育プログラムはあったのですが、
                  そのもっと手前の部分である「人と人との関わりにおいて印象に残る人間力」に重点を置いた教育の必要性も感じていました。
                  クリエイティブアルファさんから、当社の求めている教育イメージに寄り添った、
                  様々な具体的提案をいただく中で「当社だけの教育プログラム」を創ってゆく上で
                  今後良いパートナーシップを構築していけそうだと感じた部分が導入を決めた要因の1つです。
                </p>
              </div>
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を受けた感想</h4>
                <p class="m-base-text">
                  短い時間の中で多くの気付きを体感でき、受講した店長たちの、「早くお店に戻ってスタッフ達に伝えたい！」というワクワク感や、
                  きらきら感が印象に残っています。お店でも研修内容を自分のものにした店長達が自分からどんどん学んだことを伝え始めている状況なので、
                  良い結果が得られていると感じております。これからも、未だ受講していない店長たちに憧れられる様な研修にしていきたいと思います。
                </p>
              </div>
            </div>
          </div>
          <div class="m-voice-contents">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-2.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-2.jpg" alt="笑顔の女性のプロフィール写真" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">今回研修に参加できて本当に良かったと感じています。</h3>
                  <p class="m-voice-contents__name">株式会社バーズ・アソシエーション　石田さま</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__body">
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を導入するきっかけ</h4>
                <p class="m-base-text">
                  日常の業務の中で自身が一販売スタッフとして、常に「1人1人のお客様に合わせたベストな接客（おもてなし）」を求めていました。
                  そしてお店のスタッフ達を指導する立場として「育成」「接客改善」「チーム力向上」などの課題に取り組む上で「個」の発信には限界を感じていたところでした。
                  その“答”を求めて、今回の研修を決めました。
                </p>
              </div>
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を受けた感想</h4>
                <p class="m-base-text">
                  研修を終えた今、内容はもちろんですが、お店として「お客様とどう向き合ってゆくか」の共通テーマに対し、
                  スタッフ全員で振り返り共有し取り組むいいきっかけになっています。研修して一番良かったと感じる部分は、
                  ワークショップ主体の実践的体感型研修が創りだす座学にはない「特別な空間」が、
                  “常に変化し動き続けるアパレルの現場”に非常によくマッチしていて、
                  いざ目の前のお客様に対して「自分がどうするか」を自ら見つけてゆく思考のプロセスを獲得できた点だと思います。
                  売上も上がり、スタッフ各々の目標共有意識がお互いをフォローし合う気持ちとしてのチームワークにもつながり、
                  今回研修に参加できて本当に良かったと感じています。
                </p>
              </div>
            </div>
          </div>
          <div class="m-voice-contents">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-3.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-3.jpg" alt="ファッションショーでランウェイを歩くモデル" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">参加した店長達は終始集中力も高く、盛り上がった研修の場となりました。</h3>
                  <p class="m-voice-contents__name">老舗アパレルブランド</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__body">
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を導入するきっかけ</h4>
                <p class="m-base-text">
                  私どもの企業は、大きな方向転換を終えたばかりで、運営する全国の店長には戸惑いや動揺、中にはモチベーションが下がったり、
                  様々な課題として抱えていたのです。各店長が、変化をチャンスそして価値として捉え、
                  その新しいマインドセットで活き活きとお店で頑張ってくれるような、そんな研修が必要でした。
                </p>
              </div>
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を受けた感想</h4>
                <p class="m-base-text">
                  研修を実施するまでのプロセスでも、プログラムを構築するにあたって私どものマネージャー達から生の相談を受けたり、
                  アドバイスを与えてくださったりしながら、課題抽出して下さいました。そのおかげで、
                  求めていた教育イメージに柔軟にフィットした私たちだけのカスタマイズ研修カリキュラムとしての実施につながり、
                  効果的な研修の時間になったのだと思います。参加した店長達は終始集中力も高く、盛り上がった研修の場となりました。
                  終了後は、数日後にスタッフ研修を控えるエリアマネージャーの相談に乗っていただいたり、
                  店長たちも終わってから色々アドバイスを求めていた光景が印象に残っています。
                </p>
              </div>
            </div>
          </div>
          <div class="m-voice-contents">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-4.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-4.jpg" alt="ショッピングバッグを持って歩く人" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">多くの気付きと学びの反響がありました。</h3>
                  <p class="m-voice-contents__name">全国展開の商業施設　 テナント運営部</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__body">
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を導入するきっかけ</h4>
                <p class="m-base-text">
                  めまぐるしく変わる全国のファッションビル勢力図の中で、私たちの施設には他には無い「価値」の創造を求めていました。
                  そんな中、各テナントの「CS（顧客満足）」に関する意識強化と「お店づくり」のクオリティ向上を同時に図る研修が必要だったのです。
                </p>
              </div>
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を受けた感想</h4>
                <p class="m-base-text">
                  CS意識からVMDまで、「お客様が楽しい」お店づくりが大きなテーマだったのですが、最終のワークショップでの店舗レイアウトの落とし込みまで、
                  お客様意識に基づいたお店の捉え方や見方、つくり方まで会場は多くの気付きと学びの反響がありました。
                  特に最新の商業施設導線トレンドにおいてのお客様アクションを交えてのレクチャーは、参加テナントの反応が高かったことが印象に残っています。
                  研修後のアンケート内容からも、接客、レイアウトの楽しさに気付き、今後の現場アクションに具体的につながるコメントが多く見られ、研修の高い効果を伺うことができました。
                </p>
              </div>
            </div>
          </div>
          <div class="m-voice-contents">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-5.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-5.jpg" alt="メイクブラシとアイシャドウパレットが並ぶコスメカウンター" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">早くお店で活用したいと笑顔で答えてくれたことが印象に残っています。</h3>
                  <p class="m-voice-contents__name">国内大手コスメブランド 営業本部</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__body">
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を導入するきっかけ</h4>
                <p class="m-base-text">
                  日々の営業の中で、売上やクレーム、チームワークなど様々な問題に対して危機意識の高い店長育成を求めていました。
                  チームを率いる店長としての自身の役割りに対する責任感を引き出し、それを具体的アクションとして、お店に定着させる様な研修を考えていました。
                </p>
              </div>
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を受けた感想</h4>
                <p class="m-base-text">
                  研修を終えての感想として、まず驚いたのが短い時間の中での参加者たちの気付きの多さです。実践的なワークショップと事例を交えた講義は、
                  どれも高い集中力の中で、店長全員が楽しんで取り組んでいる様子がよくわかりました。
                  研修受講後に回収したアンケートでも大変評判よく有意義な研修だったと思います。
                  私たちの教育ニーズに丁寧に対応し、カスタマイズされた内容を構築いただいたことで、大変効果的な研修になったと思います。
                  色々問題を抱えていた店長たちも、研修で学んだ実践的スキルを早くお店で活用したいと笑顔で答えてくれたことが印象に残っています。
                </p>
              </div>
            </div>
          </div>
          <div class="m-voice-contents">
            <div class="m-voice-contents__header l-two-columns">
              <div class="m-voice-contents__header-item l-two-columns__item">
                <picture class="m-voice-contents__image l-two-columns__left js-fade-up">
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-6.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/voice/voice-contents-6.jpg" alt="レストランで提供されるラムチョップの料理" width="300" height="300" loading="lazy">
                </picture>
                <div class="m-voice-contents__heading l-two-columns__right js-fade-up-parent">
                  <h3 class="m-content-subtitle">各々の心にしっかり届く研修として今後も期待しています。</h3>
                  <p class="m-voice-contents__name">一等地に展開する飲食チェーン店 経営者様 営業本部</p>
                </div>
              </div>
            </div>
            <div class="m-voice-contents__body">
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を導入するきっかけ</h4>
                <p class="m-base-text">
                  飲食店をチェーン展開している中で様々なポジションのスタッフ１人１人を「人」として、「家族」として常に大切に経営にあたっていました。
                  新人から、ベテラン、キッチン、店長までのタテから店舗間までの相互コミュニケーションを軸に、
                  仕事に対しての自主性やモチベーションそしてチームワークの強化と活性化を可能とする研修を考えていたのです。
                </p>
              </div>
              <div class="m-voice-contents__description js-fade-up-parent">
                <h4 class="m-voice-contents__description-title">研修を受けた感想</h4>
                <p class="m-base-text">
                  研修は定期的にお願いしていますが、楽しいワークショップなどを交えながら短い時間の中でスタッフが楽しみながら
                  日々の業務に役立つ実践的スキルとして吸収しているところを肌で感じます。
                  飲食店舗が研修を導入する場合は、時間や場所などがネックなのですが、開店前の店舗内での実施にも臨機応変に対応いただきました。
                  参加スタッフからは「感動しました」などの声も多く、各々の心にしっかり届く研修として今後も期待しています。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 研修を受けたお客様の声 -->

  <!-- 覆面調査 (ミステリーショッパー)を実施した、お客様の声 -->
  <section id="voice-mystery-shopper" class="p-voice__mystery-shopper">
    <div class="m-voice-mystery-shopper">
      <div class="m-voice-mystery-shopper__inner l-inner">
        <h2 class="m-section-title m-section-title--center">
          <span class="m-section-title__text m-section-title__text--large js-fade-up">覆面調査 (ミステリーショッパー)を実施した、お客様の声</span>
        </h2>
        <div class="m-voice-mystery-shopper__wrapper">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
            <div class="m-voice-contents__description js-fade-up-parent">
              <p class="m-base-text">
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
  <!-- 覆面調査 (ミステリーショッパー)を実施した、お客様の声 -->

  <!-- お問い合わせ -->
  <section class="p-voice__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->

</main>

<?php get_footer(); ?>