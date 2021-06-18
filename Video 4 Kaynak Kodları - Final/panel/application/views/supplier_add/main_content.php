<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <form action="<?php echo base_url("supplier/save");?>" class="form-horizontal" method="post">
        <div class="control-group">
            <label class="control-label">Tedarikçi Adı</label>
            <div class="controls">
                <input type="text" class="span6 " name="title"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Telefon</label>
            <div class="controls">
                <input type="text" class="span6 " name="phone"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">E-posta</label>
            <div class="controls">
                <input type="text" class="span6 " name="email"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Adres</label>
            <div class="controls">
                <textarea name="address"  id="" class="span6" cols="30" rows="10" ></textarea>
            </div>
        </div>
        <div class="form-actions no-padding" style ="padding-top: 10px!important;">
            <button type="submit" class="btn btn-success">Kaydet</button>
            <a type="button" class="btn" href="<?php echo base_url("supplier");?>">İptal</a>
        </div>
    </form>
    <!-- END FORM-->
</div>
<!-- END PAGE CONTENT-->
