<!-- Navigation -->
<div class="top-right links">
    @guest
        <a href="{{ route('user.signup') }}">会員登録</a>
        <a href="{{ route('user.signin') }}">ログイン</a>
    @endguest
        @if(Auth::check())
        <a href="{{ route('user.logout') }}">ログアウト</a>
        @endauth
</div>
<!-- / Navigation -->
