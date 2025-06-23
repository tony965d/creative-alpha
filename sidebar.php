<aside class="m-sidebar">
  <div class="m-sidebar__block">
    <h3 class="m-sidebar__title">カテゴリー</h3>
    <div class="m-sidebar__body">
      <ul class="m-sidebar__category-group">
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'column_category',
          'hide_empty' => false,
        ));
        if (!empty($terms) && !is_wp_error($terms)) :
          foreach ($terms as $term) :
        ?>
            <li class="m-sidebar__category">
              <a class="m-sidebar__category-link u-hover" href="<?php echo esc_url(get_term_link($term)); ?>">
                <?php echo esc_html($term->name); ?>
              </a>
            </li>
        <?php
          endforeach;
        endif;
        ?>
      </ul>
    </div>
  </div>
  <div class="m-sidebar__block">
    <h3 class="m-sidebar__title m-sidebar__title--recent-article">新着記事</h3>
    <div class="m-sidebar__body">
      <ul class="m-sidebar__recent-article-group">
        <?php
        $recent_posts = get_posts(array(
          'post_type' => 'column',
          'posts_per_page' => 5,
          'post_status' => 'publish',
          'orderby' => 'date',
          'order' => 'DESC',
        ));
        if ($recent_posts) :
          foreach ($recent_posts as $post) :
        ?>
            <li class="m-sidebar__recent-article">
              <a class="m-sidebar__recent-article-link u-hover" href="<?php echo get_permalink($post->ID); ?>">
                <time class="m-sidebar__recent-article-date" datetime="<?php echo get_the_date('Y-m-d', $post->ID); ?>">
                  <?php echo get_the_date('Y.m.d', $post->ID); ?>
                </time>
                <p class="m-sidebar__recent-article-title"><?php echo esc_html(get_the_title($post->ID)); ?></p>
              </a>
            </li>
        <?php
          endforeach;
        endif;
        ?>
      </ul>
    </div>
  </div>
  <div class="m-sidebar__block m-sidebar__block--monthly-archive">
    <h3 class="m-sidebar__title">月別アーカイブ</h3>
    <div class="m-sidebar__body">


      <ul class="m-sidebar__monthly-archive-group">
        <?php
        $archive_query = new WP_Query(array(
          'post_type' => 'column',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC',
        ));
        $archives = array();

        if ($archive_query->have_posts()) {
          while ($archive_query->have_posts()) {
            $archive_query->the_post();
            $year = get_the_date('Y');
            $month = get_the_date('n');
            $key = $year . '-' . $month;
            if (!isset($archives[$key])) {
              $archives[$key] = array(
                'year' => $year,
                'month' => $month,
                'count' => 0,
              );
            }
            $archives[$key]['count']++;
          }
          wp_reset_postdata();
        }
        krsort($archives);

        foreach ($archives as $archive) {
          $year = $archive['year'];
          $month = $archive['month'];
          $count = $archive['count'];
          $url = get_post_type_archive_link('column') . "?archive={$year}-{$month}";
          echo '<li class="m-sidebar__monthly-archive">';
          echo '<a class="m-sidebar__monthly-archive-link u-hover" href="' . esc_url($url) . '">';
          echo esc_html("{$year}年{$month}月") . '　(' . $count . ')';
          echo '</a>';
          echo '</li>';
        }
        ?>
      </ul>
    </div>
  </div>
</aside>