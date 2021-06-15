<!-- BEGIN PAGE CONTENT-->
<a href="<?php echo base_url("product/newPage"); ?>" class="btn btn-success"><i class="icon-plus">Ekle</i></a>
<br><br>
<div class="row-fluid">
    <table class="table table-striped table-bordered table-advance table-hover">
        <thead>
        <tr>
            <th><i class="icon-sort-by-order"></i> Kayıt No</th>
            <th><i class="icon-bullhorn"></i> Kodu</th>
            <th><i class="icon-bullhorn"></i> Ürün Adı</th>
            <th><i class="icon-shield"></i> Kategori</th>
            <th><i class="icon-user"></i> Tedarikçi</th>
            <th with="200"><i class="icon-info"></i> Miktar</th>
            <th with="200"><i class="icon-money"></i> Alış Fiyatı</th>
            <th with="200"><i class="icon-money"></i> Satış Fiyatı</th>
            <th><i class="icon-edit"></i> Durum</th>
            <th><i class="icon-cogs"></i> İşlemler</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) { ?>
            <tr>
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

                    <a class="btn btn-danger" href="<?php echo base_url("product/delete/$row->id"); ?>"><i
                                class="icon-trash "></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!-- END PAGE CONTENT-->
