<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TO DO リスト</title>

    <!--Bootstrap assets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--自作CSS -->
    <style type="text/css">
    <!--
      /*ここに調整CSS記述*/
      #container{
          margin: 60px;
      }
    -->
    </style>
</head>

<body>
<div id="app" class="container">
    <div class="page-header">
        <h1>TO DO リスト</h1>
        <p class="lead">Vue.jsの練習用アプリです。</p>
    </div>

    <!-- 入力フォーム -->
    <form v-on:submit.prevent="addItem" class="form-group">
        <div class="form-group">
            <div class="input-group">
                <input type="text" v-model="newItem" class="form-control">
                <span class="input-group-btn"><button class="btn btn-primary" type="submit">送信</button></span>
            </div>
        </div>
    </form>

    <hr>

    <!--ループ処理-->
    <ul class="list-group">
        <li class="list-group-item" v-for="todo in todos">{{ todo }}</li>
    </ul>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="http://laraweb.sakura.ne.jp/practice/assets/js/todo/practice1.js"></script><!--JavaScript本体-->

</body>
</html>
