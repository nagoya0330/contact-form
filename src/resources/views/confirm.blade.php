<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <header class="header">
    <div class="header__inner">
    <a class="header__logo" href="/views/index.blade.php">
        Contact Form
    </a>
    </div>
</header>
<main>
    <div class="search-form__content">
    <h2>お問い合わせ内容確認</h2>
    </div>
<form class="form" action="/contacts" method="post">
    @csrf
<div class="answer-table">
        <table class="answer-table__inner">
        <tr class="answer-table__row">
            <th class="answer-table__header">お名前</th>
            <td
            class="answer-table__text">
            <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
        </td>
        </tr>
        <tr class="answer-table__row">
            <th class="answer-table__header">メールアドレス</th>
            <td class="answer-table__text">
            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
            </td>
        </tr>
        <tr class="answer-table__row">
        <th class="answer-table__header">電話番号</th>
            <td class="answer-table__text">
            <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
            </td>
        </tr>
        <tr
        class="answer-table__row">
        <th class="answer-table__header">お問い合わせ内容</th>
            <td class="answer-table__text">
            <input type="text" name="content" value="{{ $contact['content'] }}" readonly  />
            </td>
        </tr>
        </table>
    </div>
<input
  type="submit" class="form-btn" value="送信する"
  />
</form>
</body>
</html>