new Vue({
    el: '#app',
    data: {
        newItem: '',
        goodss: []
    }
function addMessage(results) {
    $.each(results.tasks, function() {
            todo.list.push(this);
            todo.last = this; // 最終更新日入れる→todo.last.created_at でアクセス
    });
}

