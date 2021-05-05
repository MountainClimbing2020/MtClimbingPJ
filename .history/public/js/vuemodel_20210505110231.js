var baseURL = location.origin + "/practice/vue";

var todo = new Vue({
    el: '#app',
    data: {
        list: [],   // 入力テキストを入れる配列
        last: null, // 入力テキストの最終更新日
    },
});
