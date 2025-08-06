<?php get_header(); ?>

<main class="p-privacy-policy">

  <section class="p-privacy-policy__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title js-fade-up">プライバシーポリシー</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="p-privacy-policy__main">
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
    <div class="m-privacy-policy">
      <div class="m-privacy-policy__inner l-inner">
        <div class="m-privacy-policy__wrapper">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>