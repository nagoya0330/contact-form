<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
      <h2>お問い合わせ</h2>
      </div>
    </div>
<form class="form" action="/contacts/confirm" method="post">
  @csrf
  <div class="form-item">
    <p class="form-item-label">
      お名前<span class="form-item-label-required">必須</span>
    </p>
    <div>
      <input
      type="text"
      name="name"
      class="form-item-input"
      placeholder="テスト太郎"
      value="{{ old('name') }}"
      />
      <div class="form__error">
      @error('name')
      {{ $message }}
      @enderror
      </div>
</div>
  </div>
  <div class="form-item">
    <p class="form-item-label">
    メールアドレス<span class="form-item-label-required">必須</span>
    </p>
    <input
    type="email"
    name="email"
    class="form-item-input"
    placeholder="test@example.com"
    value="{{ old('email') }}"
    />
    <div class="form__error">
    @error('email')
    {{ $message }}
    @enderror
    </div>
  </div>
  <div class="form-item">
  <p class="form-item-label">
    電話番号<span class="form-item-label-required">必須</span>
  </p>
  <input
    type="tel"
    name="tel"
    class="form-item-input"
    placeholder="09012345678"
    value="{{ old('tel') }}"
  />
  <div class="form__error">
    @error('email')
    {{ $message }}
    @enderror
    </div>
</div>
  <div class="form-item">
    <p class="form-item-label">
      お問い合わせ内容
    </p>
    <textarea name="content" class="form-item-textarea"
    placeholder="資料をいただきたいです">
    </textarea>
  </div>
  <input
  type="submit" class="form-btn" value="送信する"
  />
</form>
</body>
</html>