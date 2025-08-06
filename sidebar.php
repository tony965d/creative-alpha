<aside class="m-sidebar">
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
        $posts = get_posts(array(
          'post_type' => 'column',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC',
        ));
        $archives = array();

        foreach ($posts as $post) {
          $year = get_the_date('Y', $post->ID);
          $month = get_the_date('n', $post->ID);
          if (!isset($archives[$year])) {
            $archives[$year] = array();
          }
          if (!isset($archives[$year][$month])) {
            $archives[$year][$month] = 0;
          }
          $archives[$year][$month]++;
        }

        // 年・月を降順で表示
        krsort($archives);
        foreach ($archives as $year => $months) {
          krsort($months);
          foreach ($months as $month => $count) {
            $url = home_url("/column/{$year}/{$month}/");
            echo '<li class="m-sidebar__monthly-archive">';
            echo '<a class="m-sidebar__monthly-archive-link u-hover" href="' . esc_url($url) . '">';
            echo esc_html("{$year}年{$month}月") . '　(' . $count . ')';
            echo '</a>';
            echo '</li>';
          }
        }
        ?>
      </ul>
    </div>
  </div>
</aside>