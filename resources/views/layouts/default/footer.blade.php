<div class="footer">
    <div>
        <div class="text-right">
            Powered by jfb
        </div>
    </div>
</div>

</body>
</html>

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