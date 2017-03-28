<?php include resource_path('views/layouts/default/header.blade.php'); ?> <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form id="biller-field">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control" v-model:="selected">
                            <option selected disabled>Select biller</option>
                            <option v-for="category of categories" v-bind:value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="category">Biller</label>
                        <select name="category" id="category" class="form-control">
                            <option selected disabled>Select biller</option>
                            <option v-for="biller of billers" v-bind:value="biller.id">
                                {{ biller.name }}
                            </option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" id="amount" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="accountNumber">Account Number</label>
                        <input type="text" name="accountNumber" id="accountNumber" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include resource_path('views/layouts/default/footer.blade.php'); ?>

<script type="text/javascript">
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
</script>
