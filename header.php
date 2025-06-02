<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="l-page">
    <div class="l-page__header">
      <header class="m-header">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png?v=<?php echo filemtime(get_template_directory() . '/assets/images/common/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <!-- navigation menu -->
      </header>
    </div>
    <!-- /.l-page__header -->

    <div class="l-page__content">