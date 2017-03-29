<?php include resource_path('views/layouts/default/header.blade.php'); ?> <br>

    <div class="container">
        <div class="row" id="biller-field">
            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select id="category" class="form-control" v-model="selectedCat" v-on:change="categoryChange">
                            <option disabled value="">Select category</option>
                            <option v-for="category of categories" v-bind:value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="biller">Billers</label>
                        <select id="biller" class="form-control" v-model="billerId">
                            <option disabled value="">Select biller</option>
                            <option v-for="biller of billers" v-bind:value="biller.id">
                                {{ biller.name }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" id="amount" class="form-control" v-model="amount"/>
                    </div>

                    <div class="form-group">
                        <label for="accountNumber">Account Number</label>
                        <input type="text" id="accountNumber" class="form-control" v-model="accountNo"/>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-primary" v-on:click="addBill">Submit</button>
                    </div>
                </form>
            </div>

            <div class="col-md-8">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <td>Category</td>
                        <td>Bill</td>
                        <td>Amount</td>
                        <td>Account Number</td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-if="allBills.length == 0">
                        <td colspan="4" align="center">No data found.</td>
                    </tr>
                    <tr v-for="bill of allBills">
                        <td>{{ bill.categoriesName }}</td>
                        <td>{{ bill.billersName }}</td>
                        <td>{{ bill.amount }}</td>
                        <td>{{ bill.account_number }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/default/add-bill.js"></script>

<?php include resource_path('views/layouts/default/footer.blade.php'); ?>