/**
 * Created by Alfredo on 3/28/2017.
 */

$(function() {

    $('#biller').attr('disabled', 'disabled');

    var addBiller = new Vue({
        el: '#biller-field',
        data: {
            categories: [],
            allBiller: [],
            selectedCat: '',
            name: '',
            description: ''
        },
        methods: {
            getCategory: function () {
                $.ajax({
                    url: 'get-all-category',
                    method: 'get',
                    success: function(result) {
                        addBiller.categories = result;
                    }
                });
            },
            addBiller: function () {
                $.ajax({
                    url: 'add-biller',
                    type: 'post',
                    data: {
                        category_id: this.selectedCat,
                        name: this.name,
                        description: this.description
                    },
                    success: function (result) {
                        addBiller.allBiller = result;
                        addBiller.name = '';
                        addBiller.description = '';
                        addBiller.selectedCat = '';
                    }
                });
            },
            getBiller: function () {
                $.ajax({
                    url: 'get-all-biller',
                    method: 'get',
                    success: function(result) {
                        addBiller.allBiller = result;
                    }
                });
            }
        }
    });

    addBiller.getCategory();
    addBiller.getBiller();

});