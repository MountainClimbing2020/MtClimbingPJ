<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>持ち物リスト</title>
</head>
<body>
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
        <li class="list-group-item" v-for="goods in todos">@{{ todo }}</li>
    </ul>

</body>
</html>



