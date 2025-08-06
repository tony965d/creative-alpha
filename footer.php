      </div>
      <!-- /.l-page__content -->
      <div class="l-page__footer">
        <footer class="m-footer">
          <div class="m-footer__inner l-inner">
            <div class="m-footer__wrapper l-two-columns">
              <div class="m-footer__item l-two-columns__item">
                <div class="m-footer__left l-two-columns__left">
                  <a href="<?php echo get_esc_home_url('/'); ?>" class="m-footer__logo u-hover">
                    <picture class="m-footer__logo-image">
                      <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/footer-logo.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/footer-logo.png" alt="クリエイティブアルファ" width="35" height="42" loading="lazy">
                    </picture>
                  </a>
                  <p class="m-footer__address">
                    〒105-0013<br>
                    東京都港区浜松町1-2-14　ユーデン浜松町ビル2F
                  </p>
                  <div class="m-footer__tel">
                    <div class="m-tel-unit">
                      <a href="tel:03-6402-7573" class="m-tel-unit__link"><span class="m-tel-unit__icon m-tel-unit__icon--contact"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/tel-icon.svg" alt="" width="21" height="21" loading="lazy"></span>03-6402-7573</a>
                      <p class="m-tel-unit__text">
                        受付時間 平日 10:00〜18:00
                      </p>
                    </div>
                  </div>
                </div>
                <script type="application/ld+json">
                  {
                    "@context": "https://schema.org",
                    "@type": "LocalBusiness",
                    "name": "株式会社クリエイティブアルファ",
                    "address": {
                      "@type": "PostalAddress",
                      "postalCode": "105-0013",
                      "addressRegion": "東京都",
                      "addressLocality": "港区",
                      "streetAddress": "浜松町1-2-14 ユーデン浜松町ビル2F",
                      "addressCountry": "JP"
                    },
                    "telephone": "+81-3-6402-7573",
                    "url": "https://www.cafc.jp/"
                  }
                </script>
                <div class="m-footer__right l-two-columns__right">
                  <nav class="m-footer-nav">
                    <div class="m-footer-nav__block">
                      <ul class="m-footer-nav__items">
                        <li class="m-footer-nav__item">
                          <a href="<?php echo get_esc_home_url('/menu/'); ?>" class="m-footer-nav__menu u-hover">研修サービス</a>
                          <ul class="m-footer-nav__sub-items">
                            <?php
                            $trainingService_query = new WP_Query(
                              array(
                                'post_type'      => 'post',
                                'posts_per_page' => -1,
                              )
                            );
                            ?>
                            <?php if ($trainingService_query->have_posts()) : ?>
                              <?php while ($trainingService_query->have_posts()) : ?>
                                <?php $trainingService_query->the_post(); ?>
                                <li class="m-footer-nav__sub-item">
                                  <a href="<?php echo get_permalink(); ?>" class="m-footer-nav__sub-menu u-hover"><?php the_title(); ?></a>
                                </li>
                              <?php endwhile; ?>
                              <?php wp_reset_postdata(); ?>
                            <?php endif;  ?>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="m-footer-nav__block m-footer-nav__block---right">
                      <ul class="m-footer-nav__items">
                        <li class="m-footer-nav__item">
                          <a href="<?php echo get_esc_home_url('/about/'); ?>" class="m-footer-nav__menu u-hover">クリエイティブアルファについて</a>
                        </li>
                        <li class="m-footer-nav__item">
                          <a href="<?php echo get_esc_home_url('/shoppers/'); ?>" class="m-footer-nav__menu u-hover">覆面調査（ミステリーショッパー）</a>
                        </li>
                        <li class="m-footer-nav__item">
                          <a href="<?php echo get_esc_home_url('/voice/'); ?>" class="m-footer-nav__menu u-hover">お客様の声</a>
                        </li>
                        <li class="m-footer-nav__item">
                          <a href="<?php echo get_esc_home_url('/corporation/'); ?>" class="m-footer-nav__menu u-hover">会社概要・講師紹介</a>
                        </li>
                        <li class="m-footer-nav__item">
                          <a href="<?php echo get_esc_home_url('/column/'); ?>" class="m-footer-nav__menu u-hover">コラム</a>
                        </li>
                        <li class="m-footer-nav__item">
                          <a href="<?php echo get_esc_home_url('/privacy'); ?>" class="m-footer-nav__menu u-hover">プライバシーポリシー</a>
                        </li>
                      </ul>
                      <div class="m-footer-nav__button">
                        <a href="<?php echo get_esc_home_url('/contact/'); ?>" class="m-contact-button m-contact-button--footer"><i class="fa-solid fa-envelope"></i>お問い合わせ</a>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <div class="m-footer__copyright">
              <small>© 2025 CREATIVE ALPHA INC.</small>
            </div>
          </div>
          <div class="m-footer__bottom"></div>
        </footer>
      </div>
      <!-- /.l-page__footer -->
      </div>
      <!-- /.l-page -->
      <?php wp_footer(); ?>
      </body>

      </html>