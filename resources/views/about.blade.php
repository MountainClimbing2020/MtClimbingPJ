@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@section('title', 'このサイトについて') {{-- サイトタイトル定義 --}}
<h2>登山しよ!</h2>
<div>
    <p>山が好きだから、健康のために運動したいから、理由はなんだってOKです</p>
    <p>あなたの一番好きな場所を見つけよう</p>
</div>
    <br>
    <p>＊会員登録をすると持ち物リスト機能とお気に入りの山リスト機能が利用できます＊</p>
<div>
    <p>会員登録は<a href="{{route('user.signup')}}">こちら</a>から！</p>
</div>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h3>よくあるお問い合わせFAQ</h3>
    <dl>
        <div>
            <dt>会員登録することでどんな特典がありますか？</dt>
            <dd>回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。
                回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。
            </dd>
        </div>
        <div>
            <dt>登山初心者ですが初心者向けの山が知りたいです</dt>
            <dd>回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。
                回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。
            </dd>
        </div>
        <div>
            <dt>ログインパスワードを忘れてしまいました</dt>
            <dd>回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。
                回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。回答です。
            </dd>
        </div>
    </dl>
<script>
    {
        // 全てのdtに対してdtsで取得
        const dts =document.querySelectorAll('dt');
        // クリックしたらappearクラスをつける
        dts.forEach(dt =>{
            dt.addEventListener('click', () =>{
                dt.parentNode.classList.toggle('appear');
        // elに入るのはdtだが区別するためにelにする
            dts.forEach(el =>{
                if(dt !==el){
                    el.parentNode.classList.remove('appear');
                }
            });
            });
        });
    }
</script>
@extends('layouts.footer_bootstrap')
</body>
</html>

