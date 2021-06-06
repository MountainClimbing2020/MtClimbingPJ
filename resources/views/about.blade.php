@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@section('title', 'このサイトについて') {{-- サイトタイトル定義 --}}
<h1>登山しよう</h1>
<p>山が好きだから、健康のために運動したいから、理由はなんだってOKです</p>
<p>あなたの一番好きな場所を見つけよう</p>
<br>
<p>＊会員登録をすると持ち物リスト機能と<br>
    お気に入りの山リスト機能が利用できます＊</p>
<p>会員登録は<a href="{{route('user.signup')}}">こちら</a>から！</p>
@extends('layouts.footer_bootstrap')
</body>
</html>
