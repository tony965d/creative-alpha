[response]

<div class="m-contact-form l-two-columns">
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-last-name" class="m-contact-form__label l-two-columns__left">
      お名前<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      <div class="m-contact-form__field-name">
        [text* your-last-name id:your-last-name class:m-contact-form__input placeholder "例）田中"]
        [text* your-first-name id:your-first-name class:m-contact-form__input placeholder "例）太郎"]
      </div>
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-email" class="m-contact-form__label l-two-columns__left">
      メールアドレス<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [email* your-email id:your-email class:m-contact-form__input placeholder "例）aaa000@gmail.com"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-tel-1" class="m-contact-form__label l-two-columns__left">
      電話番号<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      <div class="m-contact-form__field-tel">
        [tel* your-tel-1 id:your-tel-1 class:m-contact-form__input class:m-contact-form__input--tel maxlength:4]-
        [tel* your-tel-2 id:your-tel-2 class:m-contact-form__input class:m-contact-form__input--tel maxlength:4]-
        [tel* your-tel-3 id:your-tel-3 class:m-contact-form__input class:m-contact-form__input--tel maxlength:4]
      </div>
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="post-1" class="m-contact-form__label l-two-columns__left">
      住所<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      <div class="m-contact-form__field-wrapper">
        <span class="p-country-name" style="display: none;">Japan</span>
        <div class="m-contact-form__field-address m-contact-form__field-address--post">
          <span class="m-contact-form__field-text">郵便番号</span>[text* post-1 id:post-1 class:m-contact-form__input class:m-contact-form__input--post class:p-postal-code maxlength:3]-[text* post-2 id:post-2 class:m-contact-form__input class:m-contact-form__input--post class:p-postal-code maxlength:4]
        </div>
        <div class="m-contact-form__field-address m-contact-form__field-address--street-address">
          <span class="m-contact-form__field-text">住所</span>[text* street-address id:street-address class:m-contact-form__input class:p-region class:p-locality class:p-street-address placeholder "例）福岡市中央区大名二丁目"]
        </div>
      </div>
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="checkbox" class="m-contact-form__label l-two-columns__left">
      お問合せ項目<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [checkbox* checkbox id:checkbox class:m-contact-form__check-box use_label_element "〇〇について1" "〇〇について2" "〇〇について3"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="radio" class="m-contact-form__label l-two-columns__left">
      お問合せ項目<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [radio radio id:radio class:m-contact-form__radio use_label_element default:1 "××についてA" "××についてB" "××についてC"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="select" class="m-contact-form__label l-two-columns__left">
      キャンペーン内容を選択<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      <div class="m-contact-form__field-select">
        [select* select id:select class:m-contact-form__select first_as_label "キャンペーン内容を選択" "○○キャンペーン" "△△キャンペーン" "××キャンペーン"]
      </div>
    </div>
  </div>
  <div class="m-contact-form__group m-contact-form__group--textarea l-two-columns__item">
    <label for="textarea" class="m-contact-form__label l-two-columns__left">
      お問合せ内容<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [textarea* textarea id:textarea class:m-contact-form__textarea placeholder "お問合せ内容を入力してください"]
    </div>
  </div>
  <div class="m-contact-form__acceptance">
    [acceptance acceptance class:m-contact-form__acceptance-text optional]
    個人情報の取り扱いについて同意のうえ送信します。
    [/acceptance]
  </div>
  <div class="m-contact-form__button">
    <div class="m-contact-form__submit">
      [submit "送信"]
    </div>
  </div>
</div>

<style>
  form.wpcf7-form.invalid {
    position: relative;
  }

  .wpcf7-spinner {
    display: none;
  }

  .wpcf7-list-item-label::before,
  .wpcf7-list-item-label::after {
    content: unset;
  }

  .wpcf7-form-control::placeholder {
    color: rgba(51, 51, 51, 0.6);
  }

  .wpcf7-not-valid {
    color: #C94800;
    background-color: rgba(201, 72, 0, 0.2);
    border: 1px solid #C94800;
  }

  .wpcf7-not-valid::placeholder {
    color: #C94800;
  }

  .wpcf7-not-valid .wpcf7-list-item-label {
    color: #C94800;
  }

  .wpcf7-not-valid-tip {
    display: none;
  }

  .wpcf7-acceptance .wpcf7-list-item-label {
    font-size: 0.875rem;
    line-height: 1.5;
  }

  .wpcf7-submit {
    width: 100%;
    color: #000;
    text-align: center;
    padding-top: 1rem;
    padding-bottom: 1rem;
    padding-left: 0;
    padding-right: 0;
    transition: .3s;
  }

  .wpcf7-submit:hover {
    color: #FFF;
  }

  .wpcf7 form .wpcf7-response-output {
    font-size: 0.875rem;
    color: #dc3232;
    text-align: center;
    padding: 0;
    margin-top: 0;
    margin-bottom: 2.5rem;
    border: none;
  }
</style>

<script>
  document.addEventListener('wpcf7mailsent', function(event) {
    location = '/contact/thanks/';
  }, false);
</script>