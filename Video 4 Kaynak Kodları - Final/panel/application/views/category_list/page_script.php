<!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
<script src="<?php echo base_url("assets/js/third_party/bootstrap-switch.min.js"); ?>" ></script>

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
        $(".removeBtn").click(function(){
            //data url attribütlerinden dataURL'yi aldırdık
            //tıklanan elementlerdeki attribütlerden dataURL olanı al dedik
            var dataURL = $(this).attr("dataURL");

            //ekrana alert veren kısım bu I remove değişken adı
            var remove = confirm("Silmek istiyor musunuz?")

            window.location.href = dataURL;

            // if (remove == true){
            //     $.post(dataURL,{},function(response){
            //         if(response){
            //             //BURADA SORUN VAR
            //             // $(this).parent().parent().remove(500);
            //             window.location.reload();
            //
            //         }
            //     })
            // }
        })

    })
</script>


