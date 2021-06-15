<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <form action="<?php echo base_url("supplier/update/$supplier->id"); ?>" class="form-horizontal" method="post">
        <div class="control-group">
            <label class="control-label">Tedarikçi</label>
            <div class="controls">
                <input type="text" class="span6 " name="title" value="<?php echo $supplier->title; ?>"/>
                <span class="help-inline">Tedarikçi adını giriniz</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Adres</label>
            <div class="controls">
                <input type="text" class="span6 " name="address" value="<?php echo $supplier->address; ?>"/>
                <span class="help-inline">Adres giriniz</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Telefon</label>
            <div class="controls">
                <input type="text" class="span6 " name="phone" value="<?php echo $supplier->phone; ?>"/>
                <span class="help-inline">Telefon giriniz</span>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">E-mail</label>
            <div class="controls">
                <input type="text" class="span6 " name="email" value="<?php echo $supplier->email; ?>"/>
                <span class="help-inline">E-mail giriniz</span>
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
                            <?php echo ($supplier->isActive == 1) ? "checked" : ""; ?>>
                    </div>
                </div>
            </div>
        </div>



        <div class="form-actions no-padding" style="padding-top: 10px!important;">
            <button type="submit" class="btn btn-success">Kaydet</button>
            <a type="button" class="btn" href="<?php echo base_url("supplier"); ?>">İptal</a>
        </div>
    </form>
    <!-- END FORM-->
</div>
<!-- END PAGE CONTENT-->
