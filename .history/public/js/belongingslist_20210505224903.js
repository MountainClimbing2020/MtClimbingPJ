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
function sendMessage(message) {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    $.ajax({
        type: "POST",
        url: baseURL + '/send_message_api',
        dataType: "json",
        data: { "message": message, "created_at": created_at }
    }).done(function(results) {
        console.log("メッセージ追加成功！");
        console.log('results=',results);
        addMessage(results); // 通信に成功したらAPIからの返り値を addMessage() に入れる
    }).fail(function(jqXHR, textStatus, errorThrown) {
        alert('メッセージを送信に失敗しました。');
        console.log("ajax通信に失敗しました");
        console.log("jqXHR          : " + jqXHR.status);     // HTTPステータスが取得
        console.log("textStatus     : " + textStatus);       // タイムアウト、パースエラー
    });
};
function addMessage(results) {

    $.each(results.tasks, function() {
        todo.list.push(this); // 配列の末尾に追加分のレコードを追加
        todo.last = this;     // 最終更新日入れる→todo.last.created_atでアクセス
    });

    todo.$forceUpdate();
}

