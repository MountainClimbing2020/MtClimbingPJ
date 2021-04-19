<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>思い出の景色を投稿しよう</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
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
</body>
</body>
</html>
