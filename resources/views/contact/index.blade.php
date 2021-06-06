@extends('layouts.default_mail')
@section('title', 'お問い合わせフォーム')
@section('content')

<form class="form-horizontal" role="form" method="post" action="{{url('contact/top')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">{{-- CSRF対策--}}

<!--↓↓件名↓↓-->
<div class="form-group">
<label for="name" class="control-label col-sm-2">件名:</label>
<div class="col-sm-10">
<input type="text" name="title" id="title" class="form-control" placeholder="件名を入力してください" autofocus>
<!--/.col-sm-10--></div>
<!--/.form-group--></div>
<!--↑↑件名↑↑-->

<!--↓↓メールアドレス↓↓-->
<div class="form-group">
<label for="email" class="control-label col-sm-2">メールアドレス:</label>
<div class="col-sm-10">
<input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
<!--/.col-sm-10--></div>
<!--/.form-group--></div>
<!--↑↑メールアドレス↑↑-->

<!--↓↓本文↓↓-->
<div class="form-group">
<label for="tel" class="control-label col-sm-2">本文:</label>
<div class="col-sm-10">
<textarea class="form-control" name="body" id="body" rows="3" placeholder="お問い合わせ内容を入力してください" autofocus></textarea>
<!--/.col-sm-10--></div>
<!--/.form-group--></div>
<!--↑↑本文↑↑-->

<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
@endsection