$(function() {
    new Vue({
        el: '#app',
        data: {
            newItem:'',
            goods: []
        },
        methods: {
            addItem: function(){
                this.goods.push(this.newItem);
                this.newItem = '';
                this.splice
                // this.goods.splice(1,2);
            }
        }
    });
});
