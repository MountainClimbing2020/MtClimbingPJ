var baseURL = location.origin + "/practice/vue";

var todo = new Vue({
    el: '#app',
    data: {
        list: [],   // 入力テキストを入れる配列
        last: null, // 入力テキストの最終更新日
    },
});


getMessages(true); // 初回起動

function getMessages() {

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    // Ajaxによる非同期通信
    $.ajax({
        type: "POST",
        url: baseURL + '/messages_list_api',
        dataType: "json",
        data: { "created_at":date }
    }).done(function(results) {
        // 成功したら返り値をaddMessage()に入れて起動させる
        addMessage(results);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        alert('メッセージの取得に失敗しました。');
        console.log("ajax通信に失敗しました");
        console.log("jqXHR          : " + jqXHR.status);     // HTTPステータスが取得
        console.log("textStatus     : " + textStatus);       // タイムアウト、パースエラー
    });

};
：
