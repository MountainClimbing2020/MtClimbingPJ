<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>



<form>
    <div class="form-group">
    <div class="input-group">
    <input type="text" class="form-control" v-model="inputText">
    <span class="input-group-btn"><button id="send" v-on:click="send" class="btn btn-primary" type="button">送信</button></span>
    </div>
    </div>
    </form>

    <hr>

    <!--ループ処理-->
    <ul class="list-group">
        <li class="list-group-item" v-for="todo in list">@{{ todo.task }}</li>
    </ul>
