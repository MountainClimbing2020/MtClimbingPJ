@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@section('title', '思い出の景色を伝えよう') {{-- サイトタイトル定義 --}}
@section('content')
<body>
<p>山の景色</p>
<dl>
    <dt><img src="{{ asset('/storage/img/')}}"></dt>
    <br>
    <dt>投稿２</dt>
    <br>
    <dt>投稿３</dt>
    <br>
</dl>
<a href="{{route('memory/submit')}}">
    <button type="button">投稿する</button>
</a>
@extends('layouts.footer_bootstrap')
</body>
</html>
