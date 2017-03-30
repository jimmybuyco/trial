<?php include resource_path('views/layouts/default/header.blade.php'); ?> <br>

    <div class="container">
        <div class="row" id="biller-field">
            <div class="col-md-4">
                <form class="well">
                    <div class="form-group">
                        <label for="amount">Name</label>
                        <input type="text" id="amount" class="form-control" v-model="name"/>
                    </div>

                    <div class="form-group">
                        <label for="amount">Description</label>
                        <input type="text" id="amount" class="form-control" v-model="description"/>
                    </div>

                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select id="category" class="form-control" v-model="selectedCat">
                            <option disabled value="">Select category</option>
                            <option v-for="category of categories" v-bind:value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-primary" v-on:click="addBiller">Submit</button>
                    </div>
                </form>
            </div>

            <div class="col-md-8">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Category</td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-if="allBiller.length == 0">
                        <td colspan="4" align="center">No data found.</td>
                    </tr>
                    <tr v-for="biller of allBiller">
                        <td>{{ biller.name }}</td>
                        <td>{{ biller.description }}</td>
                        <td>{{ biller.categoriesName }} Biller.php - uncomment leftJoin</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/default/add-biller.js"></script>

<?php include resource_path('views/layouts/default/footer.blade.php'); ?>