<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>山登りしよう！</title>
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
</head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links"> --}}
                    {{-- @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a> --}}
                    {{-- @endauth --}}
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ route('user.signup') }}">会員登録</a>
                    <a href="{{ route('user.signin') }}">ログイン</a>
                    @else
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ route('user.signup') }}">会員登録</a>
                    <a href="{{ route('user.signin') }}">ログイン</a>
                    @endauth
                {{-- </div> --}}
            {{-- @endif --}}
            <div class="top-right links">
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ route('user.signup') }}">会員登録</a>
                <a href="{{ route('user.signin') }}">ログイン</a>

            </div>
            <div class="content">
                <div class="title m-b-md">
                    登山しよ！
                </div>
            <div class="links">
                <a href="/about">このサイトについて</a>
                <a href="/memory/board">あなたの思い出の景色</a>
                <a href="/recommended">おすすめの山情報</a>
                <a href="/belongings/top">持ち物リスト</a>
                <a href="＃">登山情報News</a>
                {{-- <a href="#">日本の山データ</a> --}}
                <a href="#">お問い合わせホーム</a>
            </div>
        </div>
    </body>
</html>
