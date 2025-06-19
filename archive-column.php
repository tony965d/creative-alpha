<?php get_header(); ?>

<main class="p-training-service l-main">
  <!-- サブメインビジュアル -->
  <section class="m-sub-mv">
    <div class="m-sub-mv__inner l-inner">
      <div class="m-sub-mv__wrapper">
        <h1 class="m-page-title">コラム</h1>
      </div>
    </div>
  </section>
  <!-- サブメインビジュアル -->

  <!-- パンくず -->
  <section class="m-breadcrumb">
    <div class="m-breadcrumb__inner l-inner">
      <div class="wp-breadcrumb">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  </section>
  <!-- パンくず -->

  <!-- カテゴリー別テンプレート分岐 -->
  <?php
  // 動的テンプレート読み込み
  load_category_specific_template('column', 'column__category', 'archive');
  ?>
  <!-- /カテゴリー別テンプレート分岐 -->

</main>

<?php get_footer();
