<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>思い出の景色を投稿しよう｜投稿画面</title>
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://localhost:8888/public/css/style.css">
</head>
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
