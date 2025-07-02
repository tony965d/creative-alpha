<?php get_header(); ?>

<main class="p-column">

  <section class="p-column__single">
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
    <div class="m-single-column">
      <div class="m-single-column__inner l-inner">
        <div class="m-single-column__wrapper l-two-columns">
          <div class="m-single-column__item l-two-columns__item">
            <div class="m-single-column__main l-two-columns__left">
              <div class="m-single-column__header">
                <div class="m-single-column__header-unit">
                  <time datetime="<?php the_time('Y-m-d'); ?>" class="m-single-column__date"><?php the_time('Y.m.d'); ?></time>
                  <?php
                  $terms = get_the_terms($post->ID, 'column_category');
                  if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                      $term_link = get_term_link($term);
                      if (!is_wp_error($term_link)) {
                        echo '<a href="' . esc_url($term_link) . '" class="m-single-column__category">' . $term->name . '</a>';
                      } else {
                        echo '<span class="m-single-column__category">' . $term->name . '</span>';
                      }
                    }
                  }
                  ?>
                </div>
                <h1 class="m-single-column__title"><?php the_title(); ?></h1>
              </div>
              <figure class="m-single-column__thumbnail">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full'); ?>
                <?php } else { ?>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.png" alt="ダミー画像" width="337" height="170" loading="lazy">
                  </picture>
                <?php } ?>
              </figure>
              <div class="m-single-column__body">
                <?php the_content(); ?>
              </div>
              <div class="m-single-column__button">
                <a href="<?php echo home_url('/column/'); ?>" class="m-button m-button--invert">一覧に戻る</a>
              </div>
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

  <!-- お問い合わせ -->
  <section class="p-column__contact-cta">
    <?php get_template_part('template-parts/contact-cta'); ?>
  </section>
  <!-- /お問い合わせ -->

</main>

<?php get_footer();
