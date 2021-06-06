@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@section('title', '思い出の景色を投稿しよう｜投稿画面') {{-- サイトタイトル定義 --}}
@section('content')
    <body>
        <form action="{{route('memory/complete')}}" method="post">
            @csrf
                <p>投稿する画像の内容を確認してください</p>
                <br>
                <td><img src="{{$image}}" width="200" height="130"></td>
                <br>
        <input type="submit" name="action" value="送信" />
    </form>
    </body>
</html>
