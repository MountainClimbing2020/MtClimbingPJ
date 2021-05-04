<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>おすすめの山10選</title>
    
</head>
<body>
    <div class="container">
        @foreach ($data as $dl)
        <br>
        <h3>{{ $dl->mtname }}</h3>
        {{ $dl->mtpref }}
        <br>
        {{ $dl->mtdescription }}
        <br>
        @endforeach
    </div>

    {{ $data->links() }}
</body>
</html>
