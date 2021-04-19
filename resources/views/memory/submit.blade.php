<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>思い出の景色を投稿しよう｜投稿画面</title>
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
    <body>
        <form action="{{route('memory/complete')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" value="">
            <br>
            <input type="submit" value="投稿">
        </form>
    </body>
</html>
