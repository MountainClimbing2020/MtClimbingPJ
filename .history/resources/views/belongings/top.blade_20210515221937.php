<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>持ち物リスト</title>
    <!-- 必要なメタタグ -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h1>持ち物リスト</h1>
        <form action='{{url('/belongings')}}' method="post">
                {{csrf_field()}}
            <div class ="form-group">
                <label>持ち物の準備と確認をしよう<br>
                    準備ができたらリストから削除しよう</label>
                <input type="text" name="body" class="form-control" placeholder="belongings list" style="max-width:1000px;">
            </div>
            <button type="submit" class="btn btn-primary">追加する</button>
        </form>
        <h1 style="margin-top:50px;">持ち物リスト</h1>
        <table class="table table-striped" style="max-width:1000px; margin-top:20px;">
<!-- <thead>
<tr>
<th></th><th></th><th></th>
</tr>
</thead> -->
            @foreach($belongings as $belonging)
        <tr>
            <td>
                {{$belonging->body}}
            </td>
            <td>
                <form action ="{{action('belongingsController@edit',$belonging)}}"method="post">
                {{ csrf_field() }}
                {{ method_field('get') }}
                    <button type="submit" class="btn btn-primary">編集</button>
                </form>
            </td>
<!-- 削除ボタン -->
            <td>
                <form action="{{url('/belongings',$belonging->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                </form>
            </td>
<!-- 削除した際にポップ画面で確認をする -->
            <td>
                <a class="del" data-id="{{ $todo->id }}" href="#">削除</a>
                <form method="post" action='{{ url('/todos', $todo->id) }}' id="form_{{ $todo->id}}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                </form>
      </td> -->
    </tr>
    @endforeach
    <!-- オプションのJavaScript -->
    <!-- 最初にjQuery、次にPopper.js、次にBootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
