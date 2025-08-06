<?php get_header(); ?>

<main class="p-company">

  <section class="p-company__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title js-fade-up">会社概要・講師紹介</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- 覆面調査 (ミステリーショッパー)の特徴 -->
  <section class="p-company__about">
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
    <div class="m-company-about l-outer">
      <div class="m-company-about__inner l-inner">
        <div class="m-company-about__wrapper">
          <h2 class="m-section-title m-section-title--center js-fade-up-parent">
            <picture class="m-section-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-section-title__text m-section-title__text--middle">会社概要</span>
          </h2>
          <div class="m-company-about__contents">
            <dl class="m-definition-list js-fade-up-parent">
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">会社名</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">株式会社クリエイティブアルファ</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">代表</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">代表取締役　田代 章</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">設立</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">1993年10月</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">資本金</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">1億円</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">従業員数</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">195名</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">事業内容</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">
                  <ul class="m-definition-list__description-items">
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">グループ会社管理業務</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">教育研修事業</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">飲食事業</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">フードコンサルティング事業</li>
                  </ul>
                </dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">電話番号</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">03-6402-7573</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">FAX番号</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">03-6402-7574</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">所在地</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">〒105-0013　東京都港区浜松町1-2-14　ユーデン浜松町ビル2F</dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">事業会社</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">
                  <ul class="m-definition-list__description-items">
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">株式会社鎌倉ベーカリー</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">株式会社シーエートレード</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">Creative Alpha Hong Kong Limited</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">创新阿尔法（大连）装饰工程有限公司 / Creative Alpha(Dalian) Design&amp;Construction Co.,Ltd.</li>
                  </ul>
                </dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">グループ会社</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">
                  <ul class="m-definition-list__description-items">
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">株式会社シーエーセールススタッフ</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">株式会社シーエーイーディング</li>
                    <li class="m-definition-list__description-item m-definition-list__description-item--company">株式会社シーエーコマンドジー</li>
                  </ul>
                </dd>
              </div>
              <div class="m-definition-list__item">
                <dt class="m-definition-list__term m-definition-list__term--company">主要取引先銀行</dt>
                <dd class="m-definition-list__description m-definition-list__description--company">みずほ銀行/三井住友銀行/三菱UFJ銀行</dd>
              </div>
            </dl>
          </div>
          <div class="m-company-about__map js-fade-up">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6483.405625848519!2d139.75620400000003!3d35.659693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bc13817d4a9%3A0xf72b81ee33d0be99!2z44ix44Kv44Oq44Ko44Kk44OG44Kj44OW44Ki44Or44OV44Kh!5e0!3m2!1sja!2sjp!4v1750501209573!5m2!1sja!2sjp" width="810" height="479" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 覆面調査 (ミステリーショッパー)の特徴 -->


  <!-- 講師紹介 -->
  <section class="p-company__profile">
    <div class="m-company-profile">
      <div class="m-company-profile__inner l-inner">
        <div class="m-company-profile__wrapper">
          <h2 class="m-section-title m-section-title--center js-fade-up-parent">
            <picture class="m-section-title__icon">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
            </picture>
            <span class="m-section-title__text m-section-title__text--middle">講師紹介</span>
          </h2>
          <div class="m-company-profile__card-group l-two-columns">
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-1.jpg" alt="木目調の背景で笑顔の男性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">山之口 吉樹</p>
                  <p class="m-profile-card__kana">やまのくち よしき</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      同志社大学卒業後、流通業界にてキャリアを重ねる中、スタッフ、店長、マネージャーから経営者まで、
                      様々な教育シーンに携わってまいりました。現在は気付きと学びの場創りをモットーに、
                      アパレル業界を中心に多種多様な業界の企業や団体に対して講師兼人材育成コンサルタントとして活動中です。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      「働く人材とお客様の笑顔を創造する」これは20年以上に亘る小売業界でのキャリアの中で、大切にしてきたマインドです。
                      自ら考え動く「クリエイティブな思考ができる人材の育成」に主眼を置いた弊社プログラムは、
                      人材一人ひとりの中にある可能性をスキルとして引き出し、センスとして強化向上させます。
                      「やりがいを持って楽しくイキイキと働く人材」のエネルギーこそが、今日の時代に一番必要不可欠な勝ち組企業の原動力ではないでしょうか。
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-2.jpg" alt="明るい雰囲気の女性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">広瀬 友里</p>
                  <p class="m-profile-card__kana">ひろせ ゆり</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      販売職特化の人材派遣会社にて、8年間で2,000人の販売スタッフのマネジメントを経験。
                      モチベーションにポイントを置いたマネジメントで、スタッフ・派遣先企業双方の満足が多数の担当指名に繋がりました。
                      その経験を活かし、現在は販売・サービス業の企業を中心に、年間150回の研修に登壇。
                      モチベーションを上げるしくみを随所に散りばめた研修により、全国最下位だった店長が、
                      自店を全国トップのお店に成長させるなど、受講生の成果に貢献しています。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      販売の現場で働く多くの方々にアドバイスをしてきた中で、スタッフのマインドが業績に大きな影響を与えることを実感しました。
                      いくらノウハウを知っても、それだけでは成果は上がりません。ノウハウを知り、それを活かせるマインドを育てることで、
                      人は飛躍的に成長します。目的意識とモチベーションの高い「自ら考え行動できる人材」を育成するために、
                      ノウハウ×マインドのアプローチを大切にしています。
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-3.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-3.jpg" alt="白い服を着た女性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">越智 由美</p>
                  <p class="m-profile-card__kana">おち ゆみ</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      ナレーター、ラジオパーソナリティ、モデルを経て米国留学後、米国イメージコンサルタント機関の日本代表に師事。
                      現在は企業講演、セミナー研修、著名人・政治家など数多くのイメージコンサルティングを手がけています。
                      一児の母として素敵にキャリアを築く女性としても、雑誌、新聞、インターネット等、幅広く取り上げられています。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      イメージコンサルタントとしての16年で、様々な企業様で講演させていただく中で学んだことがあります。
                      それは、いかに外観を飾っても内面がいいと主張していても、職場においては組織がチームであり、
                      そこでの役割、士気、責任感、使命感、世界観を共有しなければ、元気のある組織にはらならいということ。
                      逆に元気のある組織は、それがきっちりと社員の意識に浸透していました。
                      弊社のセミナープログラムは、管理者向けセミナーから女性向けセミナー、
                      学生向けセミナーと「人」をキーワードに、組織を元気にするプログラムです。
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-4.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-4.jpg" alt="白いジャケットを着た女性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">松下 由樹</p>
                  <p class="m-profile-card__kana">まつした ゆき</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      長年、日本航空(株)で国際線客室乗務員として接客サービスの最前線に立ち、
                      「気配りのおもてなし」を実践。38か国58都市を訪れ、約2万時間の乗務経験を持つプロフェッショナル。
                      また、日本語教師の資格を活かし、外国人乗務員の日本語訓練、QM（クオリティーマネジメント）チームに属する等、
                      社員教育、指導に関わります。退職後、日本語教師として、「外国人介護福祉士候補者への日本語支援」で厚生労働省の施策に関わるとともに、
                      企業や自治体に対するビジネスマナーの研修講師として活動。
                      「自己基盤を整えるセルフマネジメント力」と「コミュニケーション力の向上」が離職率を下げ、
                      企業の元気、社員のやる気に繋がることを実感し、メンタル/ヘルスコーチ資格、コミュニケーショントレーナーの資格を取得しました。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      「コミュニケーションという、しなやかで力強い翼を手に入れる」人生の質は、コミュニケーションの質で決まります。
                      形だけのマナーや、うわべだけのコミュニケーションではなく、受講者が本来持っている資質、強みを引き出し、
                      自ら行動できるように導く体現型の研修プログラムを展開。自分で気づき、目標を見つけ、自主的に行動できる人材を育成し、
                      チームワークの強化、リーダシップ力、マネジメント力の構築に繋がる研修、心を込めてお届けいたします。
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-5.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-5.jpg" alt="笑顔の女性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">室屋 佳子</p>
                  <p class="m-profile-card__kana">むろや よしこ</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      国内航空会社にてグランドホステス業務、外資系航空会社にて予約業務、ならびに社内教育係を担当。
                      その後、人材派遣会社にて人材コーディネータの経験をし、コミュニケーションの重要性を更に感じます。
                      そして「話し方」をNHK元アナウンサーから学び、話す仕事に就く。マナー講師としての経験を重ね、表情の乏しい人、
                      笑顔の少ない人が多いことを改めて認識します。良好なコミュニケーションを図るための第一歩として欠かせない表情に焦点を当て豊か表情作り、
                      笑顔輝く人が増えることを願い、医学的に基づいたエクササイズ法である「フェイスストレッチング」を学び、
                      その手法を取り入れた『えがお体操R』を研修に取り入れ高い評価を得ています。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      国内及び外資系航空会社にて接客サービスに長年就き、常に「相手の立場に立つこと」「相手の目線になって」を大切に考えてまいりました。
                      ビジネスの世界ではどんな場面でもこの２点は重要であると考えます。そこに笑顔があることでコミュニケーション力向上にも効果があるため、
                      印象を左右する表情にも重点を入れてサポートしてまいります。
                      「笑顔には人を笑顔にするパワーがある」「笑顔は連鎖する」を多くの方に伝えることも使命だと感じており、
                      研修やセミナーには笑顔の練習（えがお体操R）を積極的に取り入れております。
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-6.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-6.jpg" alt="和装の女性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">金子 理恵</p>
                  <p class="m-profile-card__kana">かねこ りえ</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      NHK教育テレビ「スペイン語講座」アシスタントを経て、民放テレビアナウンサーとして勤務後、フリー。
                      各種ビジネスマナー企業研修・講演。特に長年のアナウンサー経験を活かし、現場で即刻使えるコミュニケーションマナー研修を提供。
                      和の接遇マナー講師として飲食店等で指導。建設・IT・美容・流通・サービス業等広い分野の企業先研修を経験。
                      一方幅広いジャンルの料理を学び食育料理家としても活動。やる気のある人材育成として食教育料理家教育コンサルタントもおこないます。
                      日本人のコミュニケーションマナー、和の伝統文化、和食教育文化の教育指導等、幅広く活躍しています。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      コミュニケーション力やマナー力は組織・個人共に勝ち組に入るための必須条件です。
                      しかも合格点ではなく、水準を大きく超えたコミュニケーションマナーを身につけて初めて業界の勝ち組といえるのではないでしょうか。
                      長期戦略としての企業の勝利条件で一番大切な社員の意識改革と、何をどう改革すれば成長できるのかを長年のアナウンサー経験をもとに研修させて戴きます。
                      日本人としての精神性を背景に、マニュアルにはとどまらない、人の心を掴むことのできる人材になるにはどうしたら良いのか、
                      研修を通して学んで戴けるよう、指導してまいります。
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-7.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-7.jpg" alt="スーツ姿の男性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">和田 勉</p>
                  <p class="m-profile-card__kana">わだ つとむ</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      飲食店の一スタッフからスタートし、ホール、カウンターや調理場など、様々な部門の専門知識を身に付ける傍ら、
                      メニュー開発を手がけたことをきっかけに、クリエイターとしてのスキルが開花。これまで携わってきた飲食店は50店を超え、
                      常に時代の先駆けとなるトレンドを構築してきた実績とノウハウを活かし、現在は飲食店総合クリエイターとして活動中です。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      今や流行が3年周期と言われる飲食業界においては、スピーディーな経営判断のもと、労働環境や離職率の改善など課題も少なくありません。
                      そんな時代だからこそ、一番必要なものは単に「マニュアルではない人材育成」、
                      つまり個々の資質を大切に育て、働くスタッフ全てが「楽しく働くことができる」組織創りではないでしょうか。
                      未来への希望を胸に、職場に誇りとやりがいを持つことから湧き出る自然な笑顔。
                      そんな「ステキな笑顔がお客様をおもてなしする空間の実現」を胸に、日々人材と向き合っています。
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-profile-card l-two-columns__item">
              <picture class="m-profile-card__image l-two-columns__left js-fade-up">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-8.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profile/instructor-8.jpg" alt="黒いジャケットを着た女性講師のプロフィール写真" width="216" height="231" loading="lazy">
              </picture>
              <div class="m-profile-card__body l-two-columns__right">
                <div class="m-profile-card__name-unit js-fade-up">
                  <p class="m-profile-card__name">大和田 弘美</p>
                  <p class="m-profile-card__kana">おおわだ ひろみ</p>
                </div>
                <div class="m-profile-card__content-wrapper js-fade-up-parent">
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">プロフィール</div>
                    <p class="m-base-text">
                      ファッション業界人材派遣会社の営業、業務コーディネート、キャリアカウンセリングを経て、
                      販売技術研修トレーナーを担当。現在は主に研修カリキュラム開発、講師として販売スタッフ、
                      マネージャーの技術力向上研修、企業研修向けコミュニケーション研修、営業力UP研修、ビジネスマナー研修等を担当しています。
                    </p>
                  </div>
                  <div class="m-profile-card__content">
                    <div class="m-profile-card__title">講師からのメッセージ</div>
                    <p class="m-base-text">
                      知識を得るだけの研修から、知識を得て、できる研修へ！「なかなか売れない」「無理やりな営業は苦手」「最近お客様の笑顔を見ていない」 職種を問わず、
                      こんな方は多い中、「お客様に喜ばれ売れたら最高！」こう思われる方も多数です。
                      実は、喜ばれ売れる力・お客様を笑顔にする力を、誰もが持っていることをご存知ですか？それだけでなく、
                      自分を手助けしてくれる味方を作れることをご存知ですか？これらを見出すコツを、またどのように使えるようにするかを、
                      心理学の要素を取り入れた講義と体感型ワークショップで、受講者から引き出します。自ら考え行動するので、ストンと納得し学んでいただけます。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 講師紹介 -->

  <!-- お問い合わせ -->
  <section class="p-company__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->

</main>

<?php get_footer(); ?>