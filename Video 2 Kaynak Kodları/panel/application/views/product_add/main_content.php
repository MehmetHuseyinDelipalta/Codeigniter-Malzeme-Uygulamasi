<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <form action="<?php echo base_url("product/save"); ?>" class="form-horizontal" method="post">
        <div class="control-group">
            <label class="control-label">Ürün Adı</label>
            <div class="controls">
                <input type="text" class="span6 " name="title"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Ürün Kodu</label>
            <div class="controls">
                <input type="text" class="span6 " name="code"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Detay</label>
            <div class="controls">
                <textarea name="detail" id="" class="span6" rows="5"></textarea>
            </div>
        </div>


        <div class="control-group">
            <label class="control-label">Miktar</label>
            <div class="controls">
                <input type="text" class="span2 " name="quantity"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Liste Fiyatı</label>
            <div class="controls">
                <input type="text" class="span2 " name="list_price"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Satış Fiyatı</label>
            <div class="controls">
                <input type="text" class="span2 " name="sale_price"/>
            </div>
        </div>


        <div class="control-group">
            <label class="control-label">Kategori</label>
            <div class="controls">
                <select type="text" class="span6 " name="category_id">

                    <!-- döngü ile category verisini çeker -->
                    <?php foreach ($categories as $category) { ?>
                        <!-- value kısımında id verisini kullanıcıya göstermeden çeker ve seçimlerde id kullanlır -->
                        <!-- title kısmında category içerisindeki id'ye bağlı kategori isimlerini listeler -->
                        <option value="<?php echo $category->id; ?>"> <?php echo $category->title; ?> </option>
                    <?php } ?>

                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Tedarikçi</label>
            <div class="controls">
                <select type="text" class="span6 " name="supplier_id">

                    <!-- döngü ile supplier verisini çeker -->
                    <?php foreach ($suppliers as $supplier) { ?>
                        <!-- value kısımında id verisini kullanıcıya göstermeden çeker ve seçimlerde id kullanlır -->
                        <!-- title kısmında supplier içerisindeki id'ye bağlı kategori isimlerini listeler -->
                        <option value="<?php echo $supplier->id; ?>"> <?php echo $supplier->title; ?> </option>
                    <?php } ?>

                </select>
            </div>
        </div>

        <div class="form-actions no-padding" style="padding-top: 10px!important;">
            <button type="submit" class="btn btn-success">Kaydet</button>
            <a type="button" class="btn" href="<?php echo base_url("product"); ?>">İptal</a>
        </div>
    </form>
    <!-- END FORM-->
</div>
<!-- END PAGE CONTENT-->