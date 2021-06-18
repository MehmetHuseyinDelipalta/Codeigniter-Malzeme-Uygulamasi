<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <!-- Dosya gönderir iken enctype="multipart/form-data" yapısını kullanıyoruz-->
    <form action="<?php echo base_url("purchase/save"); ?>" class="form-horizontal" method="post">

        <div class="control-group">
            <label class="control-label">Fatura Numarası</label>
            <div class="controls">
                <input type="text" class="span6 " name="invoice"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Ürün</label>
            <div class="controls">
                <select type="text" class="span6 " name="product_id">

                    <!-- döngü ile category verisini çeker -->
                    <?php foreach ($products as $product) { ?>
                        <!-- value kısımında id verisini kullanıcıya göstermeden çeker ve seçimlerde id kullanlır -->
                        <!-- title kısmında category içerisindeki id'ye bağlı kategori isimlerini listeler -->
                        <option value="<?php echo $product->id; ?>"> <?php echo $product->title; ?> </option>
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

        <div class="control-group">
            <label class="control-label">Miktar</label>
            <div class="controls">
                <input type="text" class="span2 " name="quantity"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Alış Fiyatı</label>
            <div class="controls">
                <input type="text" class="span2 " name="price"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Açıklama</label>
            <div class="controls">
                <textarea name="detail" id="" class="span6" rows="5"></textarea>
            </div>
        </div>

        <div class="form-actions no-padding" style="padding-top: 10px!important;">
            <button type="submit" class="btn btn-success">Kaydet</button>
            <a type="button" class="btn" href="<?php echo base_url("purchase"); ?>">İptal</a>
        </div>
    </form>
    <!-- END FORM-->
</div>
<!-- END PAGE CONTENT-->