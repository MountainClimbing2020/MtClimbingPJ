@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@section('title', 'ログアウト') {{-- サイトタイトル定義 --}}
@section('content')
<body>
<p>ログアウトしました</p>
<p><a href="{{ route('top') }}">トップ</a></p>

</body>
</html>
