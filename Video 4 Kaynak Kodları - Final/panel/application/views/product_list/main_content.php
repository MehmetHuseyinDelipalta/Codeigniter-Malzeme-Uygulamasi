<!-- BEGIN PAGE CONTENT-->
<a href="<?php echo base_url("product/newPage"); ?>" class="btn btn-success"><i class="icon-plus">Ekle</i></a>
<br><br>
<div class="row-fluid">
    <table class="table table-striped table-bordered table-advance table-hover">
        <thead>
        <tr>
            <th width="70"> Resim</th>
            <th> Kayıt No</th>
            <th> Kodu</th>
            <th> Ürün Adı</th>
            <th> Kategori</th>
            <th> Tedarikçi</th>
            <th> Miktar</th>
            <th> Alış Fiyatı</th>
            <th> Satış Fiyatı</th>
            <th> Durum</th>
            <th> İşlemler</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) { ?>
            <tr>
                <td>
                    <?php
                    $image = FCPATH . "/uploads/product/$row->img_id";

                    if (file_exists($image)) { ?>
                        <!--
                        Fotoğraf seçilmez ise ürünün title adını basıyor
                        -->
                        <img width="70" src="<?php echo base_url("uploads/product/$row->img_id"); ?>"
                             alt="<?php echo $row->title; ?>"/>
                    <?php } else { ?>
                        <img width="70" src=" <?php echo base_url("assets/img/imageNotFound.jpg"); ?> "
                             alt="coDeveloperMan"/>
                    <?php } ?>

                </td>

                <td>#<?php echo $row->id; ?></td>
                <td><?php echo $row->code; ?></td>
                <td><?php echo $row->title; ?></td>
                <!--
                    buradaki datalar helper içindeki
                    tools_helper dosyasından geliyor.
                    Kullanımı burada olduğu gibidir.
                    burada bunu yazdığımızda database'e sorgu atmış olur = helper a gider orada da sorguyu çalıştırır
                    Bu kısım panel kullanırken sorun değil
                    ama normal kullanıcı kullandığı zaman çok fazla sorgu olacağı için kullanılması çok fazla kaynak gerektirir
                -->
                <td><?php echo get_category_title($row->category_id); ?></td>
                <td><?php echo get_supplier_title($row->supplier_id); ?></td>
                <td><?php echo $row->quantity; ?></td>
                <td><?php echo $row->list_price; ?></td>
                <td><?php echo $row->sale_price; ?></td>
                <td>
                    <label>
                        <input
                                data-size="small"
                                data-on-color="success"
                                data-off-color="danger"
                                data-on-text="Aktif"
                                data-off-text="Pasif"
                                type="checkbox"
                                name="my-checkbox"
                                dataID="<?php echo $row->id; ?>"
                                dataURL="<?php echo base_url("product/isActiveSetter/"); ?>"

                            <?php echo ($row->isActive == 1) ? "checked" : ""; ?>
                        >
                    </label>
                </td>
                <td>
                    <a class="btn btn-primary" href="<?php echo base_url("product/editPage/$row->id"); ?>"><i
                                class="icon-pencil"></i></a>

                    <a class="btn btn-danger removeBtn" dataURL="<?php echo base_url("product/delete/$row->id"); ?>"><i
                                class="icon-trash "></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!-- END PAGE CONTENT-->
