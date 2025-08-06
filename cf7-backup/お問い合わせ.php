[response]

<div class="m-contact-form l-two-columns">
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-company" class="m-contact-form__label l-two-columns__left">
      会社名<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [text* your-company id:your-company class:m-contact-form__input placeholder "例）株式会社○○"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="department-name" class="m-contact-form__label l-two-columns__left">部署名</label>
    <div class="m-contact-form__field l-two-columns__right">
      [text department-name id:department-name class:m-contact-form__input placeholder "例）○○事業部"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-name" class="m-contact-form__label l-two-columns__left">
      お名前<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [text* your-name id:your-name class:m-contact-form__input placeholder "例）山田　太郎"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-kana" class="m-contact-form__label l-two-columns__left">お名前（フリガナ）</label>
    <div class="m-contact-form__field l-two-columns__right">
      [text your-kana id:your-kana class:m-contact-form__input placeholder "例）ヤマダ　タロウ"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-tel" class="m-contact-form__label l-two-columns__left">
      電話番号<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [tel* your-tel id:your-tel class:m-contact-form__input placeholder "例）03-0000-0000"]
    </div>
  </div>
  <div class="m-contact-form__group l-two-columns__item">
    <label for="your-email" class="m-contact-form__label l-two-columns__left">
      メールアドレス<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [email* your-email id:your-email class:m-contact-form__input placeholder "例）abc@sample.com"]
    </div>
  </div>
  <div class="m-contact-form__group m-contact-form__group--textarea l-two-columns__item">
    <label for="textarea" class="m-contact-form__label l-two-columns__left">
      お問い合わせ内容<span class="m-contact-form__required">必須</span>
    </label>
    <div class="m-contact-form__field l-two-columns__right">
      [textarea* textarea id:textarea class:m-contact-form__textarea placeholder "ご自由にご記入ください。"]
    </div>
  </div>
  <div class="m-contact-form__acceptance">
    [acceptance acceptance class:m-contact-form__acceptance-text]
    <a href="/privacy" class="m-contact-form__acceptance-link" target="_blank" rel="noopener">プライバシーポリシー</a>に同意する
    [/acceptance]
  </div>
</div>
<div class="m-contact-form__button">
  [submit "送信する"]
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

  .wpcf7-acceptance .wpcf7-list-item {
    margin: 0;
  }

  .wpcf7-acceptance .wpcf7-list-item label {
    display: flex;
    align-items: center;
    gap: 0.5625rem;
  }

  .wpcf7-acceptance .wpcf7-list-item-label {
    font-size: 1rem;
    line-height: calc(22 / 16);
  }

  .wpcf7-submit {
    display: inline-block;
    font-size: 0.875rem;
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    color: #fff;
    line-height: calc(22 / 14);
    text-align: center;
    width: 100%;
    max-width: 232px;
    background-color: #e9b628;
    border-width: 1px;
    border-style: solid;
    border-color: #fff;
    border-radius: 30px;
    padding-top: 1.0625rem;
    padding-bottom: 0.9375rem;
    transition:
      color 0.3s,
      background-color 0.3s,
      border-color 0.3s,
      filter 0.3s;
    touch-action: manipulation;
  }

  .wpcf7-submit:hover {
    color: #e9b628;
    background-color: #fff;
    border-color: #e9b628;
    filter: unset;
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