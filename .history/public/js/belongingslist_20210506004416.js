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
                this.goodssplice(0);
                // this.goods.splice(1,2);
            }
        }
    });
});
