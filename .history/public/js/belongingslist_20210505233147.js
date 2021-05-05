$(function() {
    new Vue({
        el: '#app',
        data: {
            newItem: '',
            goods: []
        },
        methods: {
            addItem: function(){
                this.todos.push(this.newItem);
                this.newItem = '';
            }
        }
    )}
}
