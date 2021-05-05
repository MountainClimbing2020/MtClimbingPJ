function addMessage(results) {
    $.each(results.tasks, function() {
            todo.list.push(this);
            todo.last = this; // 最終更新日入れる→todo.last.created_at でアクセス
    });
}
var todo = new Vue({
    el: '#app',
    data: {
        list: [],      // 入力テキストを入れる配列
        last: null,    // 入力テキストの最終更新日
        inputText: "", // テキストフォームで入力したデータの変数
    },
    methods: {
        // 送信機能
        send: function () {

            // 最終更新日がNULLのとき
            if(!todo.last){
                todo.last = { created_at: "1970-01-01 00:00:00" }
            }

            sendMessage(this.inputText, todo.last.created_at); // 送信メッセージ関数
            this.inputText = ""; // 初期化
        },
    }
});
