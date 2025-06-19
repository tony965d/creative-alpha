<?php

/**
 * カテゴリー別テンプレート読み込み機能
 *
 * カスタム投稿のカテゴリーごとに異なるテンプレートを動的に読み込むための機能を提供します。
 */

/**
 * カテゴリー別テンプレートを動的に読み込む関数
 *
 * @param string $post_type 投稿タイプ名
 * @param string $taxonomy タクソノミー名
 * @param string $template_prefix テンプレートファイルのプレフィックス
 * @return void
 */
function load_category_specific_template($post_type = 'column', $taxonomy = 'column__category', $template_prefix = 'archive')
{
  // 現在のタームを取得
  $current_term = get_queried_object();

  // タクソノミーページかどうかチェック
  if (is_tax($taxonomy) && $current_term) {
    $term_slug = $current_term->slug;

    // カテゴリー別テンプレートファイルのパスを構築
    $template_file = $template_prefix . '-' . $term_slug;
    $template_path = get_template_directory() . '/template-parts/' . $template_file . '.php';

    // テンプレートファイルが存在するかチェック
    if (file_exists($template_path)) {
      get_template_part('template-parts/' . $template_prefix, $term_slug);
    } else {
      // デフォルトテンプレートを読み込み
      get_template_part('template-parts/' . $template_prefix, $post_type . '-default');
    }
  } else {
    // 全記事一覧テンプレートを読み込み
    get_template_part('template-parts/' . $template_prefix, $post_type . '-all');
  }
}

/**
 * カテゴリー別テンプレートの存在チェック関数
 *
 * @param string $term_slug タームスラッグ
 * @param string $template_prefix テンプレートファイルのプレフィックス
 * @return bool
 */
function category_template_exists($term_slug, $template_prefix = 'archive')
{
  $template_path = get_template_directory() . '/template-parts/' . $template_prefix . '-' . $term_slug . '.php';
  return file_exists($template_path);
}

/**
 * カテゴリー別テンプレートの一覧を取得する関数
 *
 * @param string $template_prefix テンプレートファイルのプレフィックス
 * @return array
 */
function get_category_templates($template_prefix = 'archive')
{
  $templates = array();
  $template_dir = get_template_directory() . '/template-parts/';
  $pattern = $template_prefix . '-*.php';

  $files = glob($template_dir . $pattern);

  foreach ($files as $file) {
    $filename = basename($file, '.php');
    $term_slug = str_replace($template_prefix . '-', '', $filename);
    $templates[$term_slug] = $filename;
  }

  return $templates;
}

/**
 * カテゴリー別テンプレートの自動生成関数（開発用）
 *
 * @param string $term_slug タームスラッグ
 * @param string $term_name ターム名
 * @param string $template_prefix テンプレートファイルのプレフィックス
 * @return bool
 */
function generate_category_template($term_slug, $term_name, $template_prefix = 'archive')
{
  $template_content = '<?php
/**
 * ' . $term_name . '専用テンプレート
 * 
 * このファイルは自動生成されました。
 * カテゴリー固有のカスタマイズを行う場合は、このファイルを編集してください。
 */
?>

<!-- ' . $term_name . '専用テンプレート -->
<section class="p-archive-column-' . $term_slug . ' l-outer">
  <div class="p-archive-column-' . $term_slug . '__inner l-inner">
    <div class="p-archive-column-' . $term_slug . '__wrapper">
      <p class="p-archive-column-' . $term_slug . '__text m-base-text">
        ' . $term_name . 'の記事一覧です。このカテゴリー特有の説明文をここに記載できます。
      </p>
      <h2 class="p-archive-column-' . $term_slug . '__title m-section-title">
        <picture class="m-section-title__icon">
          <source srcset="<?php echo get_template_directory_uri() ?>/src/images/common/section-title-icon.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri() ?>/src/images/common/section-title-icon.png" alt="" width="57" height="50" loading="lazy">
        </picture>
        <span class="m-section-title__text">' . $term_name . 'の記事</span>
      </h2>
      
      <!-- ' . $term_name . '特有のコンテンツ -->
      <div class="p-archive-column-' . $term_slug . '__special-content">
        <p>' . $term_name . '特有の追加コンテンツをここに配置できます。</p>
      </div>
      
      <div class="p-archive-column-' . $term_slug . '__contents l-grid">
        <?php
        $column_query = new WP_Query(
          array(
            "post_type"      => "column",
            "posts_per_page" => 12,
            "paged"          => get_query_var("paged") ? get_query_var("paged") : 1,
            "tax_query"      => array(
              array(
                "taxonomy" => "column__category",
                "field"    => "slug",
                "terms"    => "' . $term_slug . '",
              ),
            ),
          )
        );
        ?>
        <?php if ($column_query->have_posts()) : ?>
          <?php while ($column_query->have_posts()) : ?>
            <?php $column_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="m-column-card m-column-card--' . $term_slug . '">
              <figure class="m-column-card__thumbnail">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail("full"); ?>
                <?php } else { ?>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/src/images/common/dummy.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/src/images/common/dummy.png" alt="ダミー画像" width="524" height="280" loading="lazy">
                  </picture>
                <?php } ?>
              </figure>
              <div class="m-column-card__header">
                <time datetime="<?php the_time("Y-m-d"); ?>" class="m-column-card__date"><?php the_time("Y.m.d"); ?></time>
                <p class="m-column-card__category m-column-card__category--' . $term_slug . '">
                  <?php
                  $terms = get_the_terms($post->ID, "column__category");
                  if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                      echo $term->name;
                    }
                  }
                  ?>
                </p>
              </div>
              <h3 class="m-column-card__title"><?php the_title(); ?></h3>
              <div class="m-column-card__excerpt">
                <?php echo wp_trim_words(get_the_excerpt(), 30, "..."); ?>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p>' . $term_name . 'の記事が見つかりませんでした。</p>
        <?php endif; ?>
      </div>
      
      <!-- ページネーション -->
      <?php if ($column_query->max_num_pages > 1) : ?>
        <div class="p-archive-column-' . $term_slug . '__pagination">
          <?php
          echo paginate_links(array(
            "total"   => $column_query->max_num_pages,
            "current" => max(1, get_query_var("paged")),
            "prev_text" => "前へ",
            "next_text" => "次へ",
          ));
          ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- /' . $term_name . '専用テンプレート -->
';

  $template_path = get_template_directory() . '/template-parts/' . $template_prefix . '-' . $term_slug . '.php';

  return file_put_contents($template_path, $template_content) !== false;
}
