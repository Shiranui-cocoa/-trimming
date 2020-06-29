<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>カルテページ</title>
</head>
<body>

    <header>
        <h1>トリミングサロン○○</h1>
        <img src="/img/プードルイラスト.png" alt="プードル">
    </header>

    <div class="medical-record-top">
        <div class="medical-record-top-left">
            <table>
                <tr>
                    <th colspan="2">お客様情報</th>
                </tr>

                <tr>
                    <td>名前</td>
                    <td>鈴木花子</td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>女</td>
                </tr>
                <tr>
                    <td>誕生日</td>
                    <td>1990,1,1</td>
                </tr>
                <tr>
                    <td>TEL</td>
                    <td>000-0000-0000</td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td>xxxx.xxxxx@xxx.com</td>
                </tr>
                <tr>
                    <td rowspan="2">住所</td>
                    <td>〒000-0000</td>
                </tr>
                <tr>
                    <td>〇〇県〇〇市○○街</td>
                </tr>
            </table>
        </div>

        <div class="medical-record-top-center">
            <table>
                <tr>
                    <th colspan="2">犬様情報</th>
                </tr>

                <tr>
                    <td>名前</td>
                    <td>ハナ</td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>メス</td>
                </tr>
                <tr>
                    <td>犬種</td>
                    <td>ポメラニアン</td>
                </tr>
                <tr>
                    <td>誕生日</td>
                    <td>2020,1,1</td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td>５才３ヶ月</td>
                </tr>
                <tr>
                    <td>毛色</td>
                    <td>オレンジ</td>
                </tr>
                <tr>
                    <td rowspan="2">性格</td>
                    <td>大人しい</td>
                </tr>
            </table>
        </div>

        <div class="medical-record-top-right">
            <table>
                <th>
                    <tdolspan="2"><img src="/img/ダックス.png" alt="犬の画像"></tdolspan=>
                </th>
                <tr>
                    <td>初回来店日</td>
                    <td>2020.6.1</td>
                </tr>
                <tr>
                    <td colspan="2">かかりつけの動物病院</td>
                </tr>
                <tr>
                    <td colspan="2">〇〇動物病院</td>
                </tr>
            </table>
        </div>
    </div>

<p class="line"></p>

    <div class="medical-record-bottom">
        <table>
            <tr>
                <td>来店日</td>
                <td>担当</td>
                <td>コース</td>
                <td>時間</td>
                <td>料金</td>
            </tr>

            <tr>
                <td>2020,8,1</td>
                <td>トリマーB</td>
                <td>シャンプーコース</td>
                <td>2h</td>
                <td>¥3000</td>
            </tr>

            <tr>
                <td>2020,7,1</td>
                <td>トリマーC</td>
                <td>シャンプーカットコース</td>
                <td>3h</td>
                <td>¥4500</td>
            </tr>

            <tr>
                <td>2020,6,1</td>
                <td>トリマーB</td>
                <td>シャンプーコース</td>
                <td>2h</td>
                <td>¥3000</td>
            </tr>

            <tr>
                <td>2020,5,1</td>
                <td>トリマーA</td>
                <td>シャンプーコース</td>
                <td>2h</td>
                <td>¥3000</td>
            </tr>
        </table>
    </div>

    <footer>
        <img src="/img/フッター(1388px).png" alt="">
    </footer>
</body>
</html>