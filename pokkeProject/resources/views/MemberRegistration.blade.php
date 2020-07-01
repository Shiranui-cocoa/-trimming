<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>新規登録ページ</title>
</head>
<body>

    <header>
        <h1>トリミングサロン○○</h1>
        <img src="/img/プードルイラスト.png" alt="プードル">
    </header>

        <div class="member-registration-form">
            <form action="{{ url('/MyPage')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="member-registration-form-left">
                    <p>飼い主さんのお名前<input type="text" name="owner-name"></p>
                    <p>生年月日<input type="text" name="owner-birthday"></p>
                    <p>電話番号<input type="text" name="phone-number"></p>
                    <p><input type="radio" name="gender" value="man" class="button-type">男</p>
                    <p><input type="radio" name="gender" value="woman" class="button-type">女</p>
                    <p>メールアドレス<input type="text" name="email address"></p>
                    <p>住所<input type="text" name="street-address"></p>
                    <p>かかりつけの動物病院<input type="text" name="family-hospital" class="family-hospital-line"></p>
                    <p><a href="MyPage" class="my-page-button">登録</a></p>
                </div>
            </form>

            <div class="member-registration-form-right">
                <div>
                    <p>ワンちゃんのお名前<input type="text" name="dog-name"></p>
                    <p>ワンちゃんの生年月日<input type="text" name="dog-birthday"></p>
                    <p>毛色<input type="text" name="dog-color"></p>
                <p><input type="radio" name="dog-gender" value="dog-man" class="button-type">オス</p>
                <p><input type="radio" name="dog-gender" value="dog-woman" class="button-type">メス</p>
                    <p>ワンちゃんの種類<input type="text" name="dog-type"></p>
                </div>
            </div>
        </div>

<form action="{{ url('/MyPage')}}" method="POST" class="form-horizontal">
  {{ csrf_field() }}
<input type="text" name="oname" size="40">
  <button type="submit" name="add">
   追加
  </button>
</form>

    <footer>
        <img src="/img/フッター(1388px).png" alt="">
    </footer>
</body>
</html>