$(function() {
    new Vue({
        el: '#app',
        data: {
            newItem: 7,
            goods: []
        },
        methods: {
            addItem: function(){
                this.goods.push(this.newItem);
                this.newItem = '';
                // this.goods.splice(1,2);
            }
        }
    });
});
