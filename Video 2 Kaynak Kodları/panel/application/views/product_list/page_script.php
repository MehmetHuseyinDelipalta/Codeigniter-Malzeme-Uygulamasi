<!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
<script src="<?php echo base_url("assets/js/third_party/bootstrap-switch.min.js"); ?>"></script>


<!-- END JAVASCRIPTS -->
<script>
    $(document).ready(function () {

        $('input[name="my-checkbox"]').on('switchChange.bootstrapSwitch', function (event, state) {
            console.log(state); // true I false burada yapılır
            var dataID = $(this).attr("dataID");
            var dataURL = $(this).attr("dataURL");
            $.post(
                dataURL,
                {isActive: state, id: dataID},
                function (data) {
                }
            );
        });
    })
</script>

<script>
    $(document).ready(function () {
        $("[name='my-checkbox']").bootstrapSwitch();
    })
</script>