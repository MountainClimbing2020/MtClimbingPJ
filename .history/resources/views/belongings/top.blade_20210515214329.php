<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>持ち物リスト</title>


</head>
<body>
    <div class="pageheader">
    <h1>持ち物リスト</h1>
    <p>持ち物の準備と確認をしよう<br>
        準備ができたらリストから削除しよう</p>
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
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="//localhost:8888/js/belongingslist.js"></script><!--JavaScript本体-->
</body>
</html>




