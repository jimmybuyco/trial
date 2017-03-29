<?php include resource_path('views/layouts/default/header.blade.php'); ?>

<div class="container">
    <div id="biller">
        <table>
            <tr>
                <td>Category</td>
                <td>
                <select name="bcategory" id="bcategory" v-model="categoryid">
                    <option selected disabled>Select category</option>
                    <option  v-for="category of categories" v-bind:value="category.id">{{ category.name }}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input name="bname" type="text" v-model="billername"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input name="bdescription" type="text" v-model="billerdescription"></td>
            </tr>
        </table>
        <button type="button" v-on:click="submit">Submit</button>
        <hr>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
                <td>category</td>
            </tr>
            <tr v-for="biller of billers">
                <td>{{biller.id}}</td>
                <td>{{biller.name}}</td>
                <td>{{biller.description}}</td>
                <td>{{biller.category}}</td>
            </tr>
        </table>
    </div>
</div>

<?php include resource_path('views/layouts/default/footer.blade.php'); ?>

<script type="text/javascript">
    var billerVue = new Vue({
        el: '#biller',
        data: {
            ctr: 0,
            billers: [],
            categories: [],
            billername: '',
            billerdescription: '',
            categoryid: ''
        },
        methods: {
            submit: function (e) {
                $.ajax({
                    url: 'add-biller?name=' + this.billername + "&desc=" + this.billerdescription + "&cat=" + this.categoryid,
                    type: 'post',
                    success: function (e) {
                        billerVue.billers.unshift(e)
                        billerVue.billername='';
                        billerVue.billerdescription='';
                        billerVue.categoryid='';
                    }
                });
            },
            getBillers: function (e) {
                $.ajax({
                    url: 'get-all-biller',
                    method: 'get',
                    success: function (e) {
                        billerVue.billers = e;
                    }
                });
            },
            getCAtegory: function (e) {
                $.ajax({
                    url: 'get-all-category',
                    method: 'get',
                    success: function (e) {
                        billerVue.categories = e;
                    }
                });
            }

        }
    });

    billerVue.getBillers();
    billerVue.getCAtegory();

</script>