<script type="text/javascript"
        src="<?php echo base_url("assets"); ?>/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
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

        $('#normal-toggle-button').toggleButtons();
    })
</script>