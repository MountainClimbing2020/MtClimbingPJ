@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@section('title', '思い出の景色を投稿しよう｜投稿画面') {{-- サイトタイトル定義 --}}
@section('content')
    <body>
        <form action="{{route('memory/complete')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" value="">
            <br>
            <input type="submit" value="投稿">
        </form>
    </body>
</html>
