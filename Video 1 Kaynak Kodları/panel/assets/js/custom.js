$(document).ready(function () {
    $('input[name="my-checkbox"]').on('switchChange.bootstrapSwitch', function (event, state) {

        //console.log(event)
        console.log(state); // true I false burada yapılır

        var dataID = $(this).attr("dataID");

        $.post(
            "http://localhost/warehouse/panel/category/isActiveSetter",
            {isActive: state, id: dataID},
            function (data) {
            }
        );
    });
})