<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>トップページ</title>
</head>
<body>

    <header>
        <h1>トリミングサロン○○</h1>
        <img src="/img/プードルイラスト.png" alt="プードル">
    </header>

    <div class="index-top">
        <div class="index-left">
            <div class="login-box">
                <form action="#" method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><input name="name" class="text-area" type="text"></td>
                        </tr>
                        <tr>
                            <th>パスワード</th>
                            <td><input name="password" class="text-area" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="ログイン" class="submit-button"></td>
                        </tr>
                    </table>
                </form>
                <a href="/Resetting">パスワードを忘れた</a>
            </div>
        </div>

        <div class="index-right">
            <p>初めての方はコチラ</p>
            <a href="/MemberRegistration">新規登録</a>
        </div>
    </div>

<p class="line"></p>

    <div class="index-bottom">
        <section class="menu-list">
            <ul>
                <li><a href="/Trimmer">トリマー紹介</a></li>
                <li><a href="/ListOfCharges">料金表</a></li>
            </ul>
        </section>
    </div>

    <footer>
        <img src="/img/フッター(1388px).png" alt="">
    </footer>
</body>
</html>