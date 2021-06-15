/*
BU SATIRLAR BİR ZAMANLAR KULLANILIYORLARDI AMA ARTIK TARİHİN TOZLU RAFLARINDA

Çakışmalar olduğu için gereken her sayfanın altında bulunan page_script sayfasından çağırılması daha uygun görülmüştür.

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

 */