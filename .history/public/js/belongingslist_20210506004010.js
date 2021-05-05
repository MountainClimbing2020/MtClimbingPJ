$(function() {
    new Vue({
        el: '#app',
        data: {
            newItem: 's',
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
