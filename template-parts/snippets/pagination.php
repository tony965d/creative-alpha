<?php

/**
 * ページネーションコンポーネント
 *
 * @param WP_Query $query - ページネーションを表示するクエリ
 * @param int $range - 現在のページの前後に表示するページ数
 * @param string $current_url - 現在のURL（クエリパラメータなし）
 *
 * 使用例:
 * 1. デフォルト（グローバル$wp_queryを使用）:
 *    get_template_part('template-parts/snippets/pagination');
 *
 * 2. カスタムクエリを使用:
 *    $custom_query = new WP_Query($args);
 *    get_template_part('template-parts/snippets/pagination', null, [
 *        'query' => $custom_query,
 *        'range' => 3, // 任意: 前後に表示するページ数（デフォルト: 2）
 *        'current_url' => get_permalink() // 任意: 現在のURL
 *    ]);
 *
 * 3. アーカイブページなどで使用:
 *    get_template_part('template-parts/snippets/pagination', null, [
 *        'current_url' => get_post_type_archive_link('post')
 *    ]);
 */

// 引数が設定されていない場合のデフォルト値
$query = isset($args['query']) ? $args['query'] : $wp_query;
$range = isset($args['range']) ? $args['range'] : 2;
$current_url = isset($args['current_url']) ? $args['current_url'] : home_url(add_query_arg(array(), $wp->request));

// 現在のページ番号を取得
$paged = (get_query_var('paged')) ? get_query_var('paged') : (isset($_GET['page']) ? $_GET['page'] : 1);
$max_pages = $query->max_num_pages; // 総ページ数

if ($max_pages > 1) : ?>
  <div class="m-pagination">
    <div class="m-pagination__inner">
      <ul class="m-pagination__list">
        <li class="m-pagination__item m-pagination__item--prev <?php echo ($paged <= 1) ? 'm-pagination__item--disabled' : ''; ?>">
          <?php if ($paged > 1) : ?>
            <a href="<?php echo add_query_arg('page', $paged - 1, $current_url); ?>" class="m-pagination__link u-hover--opacity">
              &laquo; 前へ
            </a>
          <?php else : ?>
            <span class="m-pagination__link">&laquo; 前へ</span>
          <?php endif; ?>
        </li>

        <?php
        // 最初のページへのリンク
        if ($paged > $range + 1) : ?>
          <li class="m-pagination__item">
            <a href="<?php echo add_query_arg('page', 1, $current_url); ?>" class="m-pagination__link u-hover--opacity">1</a>
          </li>
          <?php if ($paged > $range + 2) : ?>
            <li class="m-pagination__item m-pagination__item--dots">
              <span>...</span>
            </li>
          <?php endif;
        endif;

        // ページ番号リンク
        $start = max(1, $paged - $range);
        $end = min($max_pages, $paged + $range);

        for ($i = $start; $i <= $end; $i++) :
          $is_current = $i == $paged;
          ?>
          <li class="m-pagination__item <?php echo $is_current ? 'm-pagination__item--current' : ''; ?>">
            <?php if ($is_current) : ?>
              <span class="m-pagination__link"><?php echo $i; ?></span>
            <?php else : ?>
              <a href="<?php echo add_query_arg('page', $i, $current_url); ?>" class="m-pagination__link u-hover--opacity">
                <?php echo $i; ?>
              </a>
            <?php endif; ?>
          </li>
          <?php endfor;

        // 最後のページへのリンク
        if ($paged < $max_pages - $range) :
          if ($paged < $max_pages - $range - 1) : ?>
            <li class="m-pagination__item m-pagination__item--dots">
              <span>...</span>
            </li>
          <?php endif; ?>
          <li class="m-pagination__item">
            <a href="<?php echo add_query_arg('page', $max_pages, $current_url); ?>" class="m-pagination__link u-hover--opacity"><?php echo $max_pages; ?></a>
          </li>
        <?php endif;

        // 次のページへのリンク
        ?>
        <li class="m-pagination__item m-pagination__item--next <?php echo ($paged >= $max_pages) ? 'm-pagination__item--disabled' : ''; ?>">
          <?php if ($paged < $max_pages) : ?>
            <a href="<?php echo add_query_arg('page', $paged + 1, $current_url); ?>" class="m-pagination__link u-hover--opacity">
              次へ &raquo;
            </a>
          <?php else : ?>
            <span class="m-pagination__link">次へ &raquo;</span>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
<?php endif; ?>