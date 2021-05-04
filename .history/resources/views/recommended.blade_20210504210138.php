<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>おすすめの山10選</title>
</head>
<body>
    <h3>おすすめの山10選</h3>
    <div class="container">
        @foreach ($data as $dl)
        <br>
        {{ $dl->mtname }}<img src="{{ asset('storage/uploads/' . $dl->mtimage)}}" width="500" height="200">
        {{ $dl->mtpref }}
        <br>
        {{ $dl->mtdescription }}
        <br>
        @endforeach
    </div>

    {{ $data->links() }}
</body>
</html>
