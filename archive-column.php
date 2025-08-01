<?php get_header(); ?>

<main class="p-column">
  <!-- サブメインビジュアル -->
  <section class="p-column__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title js-fade-up">コラム</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- サブメインビジュアル -->

  <!-- 研修サービス一覧 -->
  <section class="p-column__archive l-two-columns__left">
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
    <div class="m-archive-column l-outer">
      <div class="m-archive-column__inner l-inner">
        <div class="m-archive-column__two-columns l-two-columns">
          <div class="m-archive-column__item l-two-columns__item">
            <div class="l-two-columns__left">
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

              // 月別アーカイブの処理（URLパス方式）
              $archive_year = get_query_var('archive_year');
              $archive_month = get_query_var('archive_month');

              if (!empty($archive_year) && !empty($archive_month)) {
                $year = intval($archive_year);
                $month = intval($archive_month);

                if ($year > 0 && $month >= 1 && $month <= 12) {
                  $column_query = new WP_Query(array(
                    'post_type' => 'column',
                    'posts_per_page' => 8,
                    'paged' => $paged,
                    'date_query' => array(
                      array(
                        'year' => $year,
                        'month' => $month,
                      ),
                    ),
                  ));
                }
              } else {
                // 通常時は標準のクエリを使用
                $column_query = new WP_Query(array(
                  'post_type' => 'column',
                  'posts_per_page' => 8,
                  'paged' => $paged,
                ));
              }
              ?>
              <?php if ($column_query->have_posts()) : ?>
                <div class="m-archive-column__contents l-grid-two js-fade-up-parent">
                  <?php while ($column_query->have_posts()) : ?>
                    <?php $column_query->the_post(); ?>

                    <a href="<?php the_permalink() ?>" class="m-column-card u-hover">
                      <figure class="m-column-card__thumbnail m-column-card__thumbnail--archive">
                        <?php if (has_post_thumbnail()) { ?>
                          <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                        <?php } else { ?>
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.png" alt="<?php echo esc_attr(get_the_title()); ?>" width="337" height="170" loading="lazy">
                          </picture>
                        <?php } ?>
                      </figure>
                      <div class="m-column-card__header">
                        <time datetime="<?php the_time('Y-m-d'); ?>" class="m-column-card__date"><?php the_time('Y.m.d'); ?></time>
                      </div>
                      <h3 class="m-column-card__title"><?php the_title(); ?></h3>
                    </a>
                  <?php endwhile; ?>
                </div>
                <?php if ($column_query->max_num_pages > 1) : ?>
                  <div class="m-archive-column__page-nav js-fade-up">
                    <?php
                    if (!empty($archive_year) && !empty($archive_month)) {
                      // 月別アーカイブ時：URLパス形式
                      $base_url = home_url("/column/{$archive_year}/{$archive_month}/");
                      echo paginate_links(array(
                        'base' => $base_url . 'page/%#%/',
                        'format' => '',
                        'current' => $paged,
                        'total' => $column_query->max_num_pages,
                        'type' => 'list',
                        'prev_text' => '<',
                        'next_text' => '>',
                      ));
                    } else {
                      // 通常時：パス形式
                      echo paginate_links(array(
                        'base' => trailingslashit(get_post_type_archive_link('column')) . 'page/%#%/',
                        'format' => '',
                        'current' => $paged,
                        'total' => $column_query->max_num_pages,
                        'type' => 'list',
                        'prev_text' => '<',
                        'next_text' => '>',
                      ));
                    }
                    ?>
                  </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <p>コラムが見つかりませんでした。</p>
              <?php endif; ?>
            </div>
            <!-- サイドバー -->
            <div class="m-archive-column__sidebar l-two-columns__right">
              <?php get_sidebar(); ?>
            </div>
            <!-- サイドバー -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 研修サービス一覧 -->

</main>

<?php get_footer();
