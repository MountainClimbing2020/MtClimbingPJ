@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@include('layouts.header_bootstrap')
@section('title', '登山しよう') {{-- サイトタイトル定義 --}}
<body>
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="title m-b-md">
            登山しよ！
        </div>
        <div class="links">
            <a href="/about">このサイトについて</a>
            <a href="/memory/board">あなたの思い出の景色</a>
            @if(Auth::check())
            <a href="/recommended">おすすめの山情報</a>
            <a href="/belongings/top">持ち物リスト</a>
            @endif
            <a href="/news/top">登山情報News</a>
            <a href="/contact/top">お問い合わせホーム</a>
        </div>
    </div>
</body>

