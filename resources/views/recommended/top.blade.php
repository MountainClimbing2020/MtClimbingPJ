<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>尾瀬の見どころ</title>
</head>
<body>
    <div class="container"></div>
        <h3>尾瀬の見どころ</h3>
    <table class ="tabele Oze-midokoro">
        @foreach ($data as $val )
        <tr>
        <br>
            {{$val->mtname}}
        <br>
        <br>
            {{$val->description}}
        <br>
        </tr>
        @endforeach
    </table>
    {{$data->links()}}
    </div>
</body>
</html>
