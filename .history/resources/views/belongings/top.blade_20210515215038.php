<!DOCTYPE html>
<html lang="en">
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
    <div class="pageheader">
    <h1>持ち物リスト</h1>
    <form action='{{url('/belongings')}}' method="post">
        {{csrf_field()}}
    <div class ="form-group"></div>
    <label>持ち物の準備と確認をしよう<br>
        準備ができたらリストから削除しよう</label>
        
    </div>
    <div id="app" class="container">
        <!-- 入力フォーム -->
        <form v-on:submit.prevent="addItem" class="form-group">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" v-model="newItem" class="form-control">
                    <span class="input-group-btn"><button class="btn btn-primary" type="submit">送信</button></span>
                </div>
            </div>
        </form>
        <!--ループ処理-->
        <ul class="list-group">
            <p class="list-group-item" v-for="good in goods"> @{{ goods }}</p>
        </ul>
    </div>
<!-- オプションのJavaScript -->
<!-- 最初にjQuery、次にPopper.js、次にBootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>




