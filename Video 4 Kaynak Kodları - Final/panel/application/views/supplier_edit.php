<!doctype html>
<html lang="en">
<head>

    <?php $this->load->view("includes/head"); ?>
    <?php $this->load->view("supplier_edit/page_style"); ?>
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
            <?php $this->load->view("supplier_edit/breadcrumb"); ?>

            <!-- CONTENT -->
            <?php $this->load->view("supplier_edit/main_content"); ?>
            <!-- #CONTENT -->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- FOOTER -->
<?php $this->load->view("includes/footer"); ?>
<?php $this->load->view("supplier_edit/page_script"); ?>
<!-- #FOOTER -->

</body>
</html>