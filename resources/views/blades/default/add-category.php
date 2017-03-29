<?php include resource_path('views/layouts/default/header.blade.php'); ?>

<div class="container">
    <div id="category">
        <table>
            <tr>
                <td>Name</td>
                <td><input name="name" type="text" v-model="categoryname"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input name="description" type="text" v-model="categorydescription"></td>
            </tr>
        </table>
        <button type="button" v-on:click="submit">Submit</button>
        <hr>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
            </tr>
            <tr v-for="categoryrow of categories">
                <td><div v-bind:onload='getdata(categoryrow.id)'>

                </div></td>
            </tr>
        </table>
    </div>
</div>

<?php include resource_path('views/layouts/default/footer.blade.php'); ?>

<script type="text/javascript">
    var categoryVue = new Vue({
        el: '#category',
        data: {
            ctr: 0,
            categories: [],
            categoryname: '',
            categorydescription: ''
        },
        methods: {
            submit: function (e) {
                $.ajax({
                    url: 'add-category?name=' + this.categoryname + "&desc=" + this.categorydescription,
                    type: 'post',
                    success: function (e) {
                        categoryVue.categories.unshift(e)
                        categoryVue.categoryname='';
                        categoryVue.categorydescription='';
                    }
                });
            },
            getCategories: function (e) {
                $.ajax({
                    url: 'get-all-category',
                    method: 'get',
                    success: function (e) {
                        categoryVue.categories = e;
                    }
                });
            },
            getdata: function (id) {
                console.log(id);
            }
        }
    });

    categoryVue.getCategories();

//    function getdata(id){
//        console.log(id);
//    }
</script>