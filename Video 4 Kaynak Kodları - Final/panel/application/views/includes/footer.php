<!-- BEGIN FOOTER -->
<div id="footer">
    <?php echo date("Y"); ?> &copy; Mehmet Hüseyin Delipalta Dashboard.
</div>
<!-- END FOOTER -->


<?php
$this->load->view("includes/include_script");

$alert = $this->session->userdata("alert");
if ($alert) {
    $message = $this->session->userdata("alert-message");
    $type = $this->session->userdata("alert-type"); ?>

    <script>
        notif({
            //type => error, warning, success
            msg: "<?php echo $message ?>",//ekrana yazdıracağı metin I Metin işlemi olduğu için tırnak içerisinde yazılması gerekiyor
            type: "<?php echo $type ?>",//alert tip
            position: "right",//ekranın neresinde konumlanacağı
            width: "300",//genişliği
            opacity: 0.95,//opaklığı
            fade: true //fade solmak demek burada sanıırm kapanıp kapanmayacağını belirliyot
        });
    </script>
    <?php
    $this->session->set_userdata("alert",false);//alert'ü silsin diye bunu kullandık


} ?>
