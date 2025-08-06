<?php get_header(); ?>

<main class="p-thanks">

  <section class="p-thanks__mv">
    <div class="m-sub-mv">
      <div class="m-sub-mv__inner l-inner">
        <div class="m-sub-mv__wrapper">
          <h1 class="m-page-title js-fade-up">お問い合わせ完了</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="p-thanks__main">
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
    <div class="m-thanks l-outer">
      <div class="m-thanks__inner l-inner">
        <div class="m-thanks__wrapper js-fade-up-parent">
          <p class="m-thanks__text m-base-text">
            この度は、お問い合わせいただきありがとうございます。<br>
            お問い合わせについては、お返事が必要なものには２営業日以内にご連絡させていただきます。
          </p>
          <p class="m-thanks__text m-base-text">
            入力フォーム送信後、確認のための自動返信メールが送られます。<br>
            自動返信メールが届かない場合はメールアドレスの入力ミスが考えられます。再度入力して送信ください。<br>
            メールの受信拒否設定をされている場合は、受信許可設定でドメインを追加してください。
          </p>
        </div>
      </div>
      <div class="m-thanks__button js-fade-up">
        <a href="<?php echo get_esc_home_url('/'); ?>" class="m-contact-button">TOP</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>