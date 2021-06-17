<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <form action="<?php echo base_url("category/update/$category->id"); ?>" class="form-horizontal" method="post">
        <div class="control-group">
            <label class="control-label">Kategori Adı</label>
            <div class="controls">
                <input type="text" class="span6 " name="title" value="<?php echo $category->title; ?>"/>
                <span class="help-inline">Kategori adını giriniz</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Aktif / Pasif </label>
            <div class="controls">
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <div id="normal-toggle-button">
                        <input type="checkbox"
                               name="isActive"

                            <?php echo ($category->isActive == 1) ? "checked" : ""; ?>>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions no-padding" style="padding-top: 10px!important;">
            <button type="submit" class="btn btn-success">Kaydet</button>
            <a type="button" class="btn" href="<?php echo base_url("category"); ?>">İptal</a>
        </div>
    </form>
    <!-- END FORM-->
</div>
<!-- END PAGE CONTENT-->
