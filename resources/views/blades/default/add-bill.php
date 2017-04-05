<?php include resource_path('views/layouts/default/header.blade.php'); ?> <br>

    <div class="container">
        <div class="row" id="bill-field" >
            <div class="col-md-4">
                <form class="well">
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

            <div class="col-md-8 row" style="overflow: scroll;height:500px;border: 1px solid black;">
                <div class="col-md-2" style="border: 1px solid black;margin: 10px" v-for="bill of allBills" v-cloak>
                    <img v-bind:src="'img/' + bill.logo" style="width: 100px;height: 100px;">
                    <h5>{{bill.billersName}}</h5>
                    <h5>{{bill.categoryName}}</h5>
                    <h6>{{ bill.account_number }}<h6>
                            <h6>{{ bill.amount }}<h6>
                                    <button type="button" class="btn btn-primary" v-on:click="deleteBill(bill.id)">X</button>
                </div>
            </div>
        </div>

        <script src="js/default/add-bill.js"></script>

<?php include resource_path('views/layouts/default/footer.blade.php'); ?>