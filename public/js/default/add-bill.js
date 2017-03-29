/**
 * Created by Alfredo on 3/28/2017.
 */

$(function() {

    $('#biller').attr('disabled', 'disabled');


    var addBill = new Vue({
        el: '#bill-field',
        data: {
            allBills: [],
            categories: [],
            billers: [],
            accountNo: '',
            amount: '',
            selectedCat: '',
            billerId: ''
        },
        methods: {
            getAllBills: function () {
                $.ajax({
                    url: 'get-all-bill',
                    method: 'get',
                    success: function(result) {
                        addBill.allBills = result;
                    }
                });
            },
            getCategory: function () {
                $.ajax({
                    url: 'get-all-category',
                    method: 'get',
                    success: function(result) {
                        addBill.categories = result;
                    }
                });
            },
            categoryChange: function () {
                addBill.getBiller(this.selectedCat);
            },
            getBiller: function (catId) {
                $('#biller').removeAttr('disabled');

                $.ajax({
                    url: 'get-biller/' + catId,
                    method: 'get',
                    success: function(result) {
                        addBill.billers = result;
                    }
                });
            },
            addBill: function () {
                $.ajax({
                    url: 'add-bill',
                    type: 'post',
                    data: {
                        billerId: this.billerId,
                        accountNo: this.accountNo,
                        amount: this.amount
                    },
                    success: function (result) {
                        addBill.allBills = result;
                        addBill.accountNo = '';
                        addBill.amount = '';
                        addBill.selectedCat = '';
                        addBill.billerId = '';
                    }
                });
            }
        }
    });

    addBill.getAllBills();
    addBill.getCategory();

});