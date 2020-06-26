<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>トリマー紹介ページ</title>
</head>
<body>

<header>
    <h1>トリミングサロン○○</h1>
    <img src="/img/プードルイラスト.png" alt="プードル">
</header>

<h3>トリマー紹介</h3>

<?php foreach($trimmers as $trimmer) { ?>
    <div class="TrimmerIntroduction">
    <img src="/img/ピンシャーイラスト.png" alt="画像">
    <ul>
        <li><?php echo $trimmer["TrimmerName"]; ?></li>
        <li>トリマー歴<?php echo $trimmer["TrimmerHistory"];?>年</li>
        <li>好きな犬種 ダックス</li>
        <li>指名料 <?php echo $trimmer["nominate"];?>円</li>
    </ul>
</div>

<?php } ?>

{{--コメントアウト
@foreach($trimmers as $trimmer)

    <div class="TrimmerIntroduction">
    <img src="/img/ピンシャーイラスト.png" alt="画像">
    <ul>
        <li>{{$trimmer["TrimmerName"]}}</li>
        <li>トリマー歴{{$trimmer["TrimmerHistory"]}}年</li>
        <li>好きな犬種 ダックス</li>
        <li>指名料 {{$trimmer["nominate"]}}円</li>
    </ul>
</div>

@endforeach
コメントアウト--}}




<footer>
    <img src="/img/フッター(1388px).png" alt="">
</footer>
</body>
</html>