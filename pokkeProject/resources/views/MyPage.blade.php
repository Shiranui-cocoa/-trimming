<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>マイページ</title>
</head>
<body>

    <header>
        <h1>トリミングサロン○○</h1>
        <img src="/img/プードルイラスト.png" alt="プードル">
    </header>

    <div class="my-page-top">
        <div class="my-page-top-left">
            <img src="/img/ピンシャーイラスト.png" alt="ワンちゃん写真">
        </div>

        <div class="my-page-top-right">
            <p>ようこそ{{$name}}さま！✖︎✖︎ちゃん！</p>
            <p>前回のトリミング来店日</p>
            <p>○月○日 シャンプーコース</p>
            <p><a href="/PhotoAlbum">フォトアルバム</a></p>
        </div>

    </div>


    <footer>
        <img src="/img/フッター(1388px).png" alt="">
    </footer>
</body>
</html>