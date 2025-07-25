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
                </div>
                <h1 class="m-single-column__title"><?php the_title(); ?></h1>
              </div>
              <figure class="m-single-column__thumbnail">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                <?php } else { ?>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/dummy.png" alt="<?php echo esc_attr(get_the_title()); ?>" width="337" height="170" loading="lazy">
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
