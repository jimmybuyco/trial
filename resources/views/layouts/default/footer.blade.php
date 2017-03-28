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
    var example1 = new Vue({
        el: '#example-1',
        data: {
            ctr: 0,
            billers: []
        },
        methods: {
            submit: function (e) {
                alert('Hello ' + this.name + '!');
            },
            getBiller: function (e) {
                $.ajax({
                    url: 'get-all-biller',
                    method: 'get',
                    success: function(e) {
                        example1.billers = e;
                    }
                });
            }
        }
    });

    example1.getBiller();
</script>