<!doctype html>
<html lang="en">
<head>

    <?php $this->load->view("includes/head"); ?>

</head>
<body class="fixed-top">

<!-- HEADER -->
<?php $this->load->view("includes/header"); ?>
<!-- #HEADER -->

<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <?php $this->load->view("includes/sidebar"); ?>
    <!-- BEGIN PAGE -->
    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <?php $this->load->view("purchase_add/breadcrumb"); ?>
            <?php $this->load->view("purchase_add/main_content"); ?>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- FOOTER -->
<?php $this->load->view("includes/footer"); ?>
<!-- #FOOTER -->

</body>
</html>