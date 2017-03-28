/**
 * Created by Alfredo on 3/28/2017.
 */

var addBill = new Vue({
    el: '#biller-field',
    data: {
        categories: [],
        billers: []
    },
    methods: {
        getCategory: function (e) {
            $.ajax({
                url: 'get-all-category',
                method: 'get',
                success: function(e) {
                    addBill.categories = e;
                }
            });
        },
        getBiller: function (e) {
            $.ajax({
                url: 'get-all-biller',
                method: 'get',
                success: function(e) {
                    addBill.billers = e;
                }
            });
        }
    }
});

addBill.getCategory();
addBill.getBiller();