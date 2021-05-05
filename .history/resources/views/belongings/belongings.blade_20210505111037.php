：
<meta name="csrf-token" content="{{ csrf_token() }}"><!--必須-->
：
<!--ループ処理-->
<ul class="list-group">
    <li class="list-group-item" v-for="todo in list">@{{ todo.task }}</li>
</ul>
