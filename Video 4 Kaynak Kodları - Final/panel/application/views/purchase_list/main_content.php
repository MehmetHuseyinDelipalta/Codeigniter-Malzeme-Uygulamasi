<!-- BEGIN PAGE CONTENT-->
<a href="<?php echo base_url("purchase/newPage"); ?>" class="btn btn-success"><i class="icon-plus">Ekle</i></a>
<br><br>
<div class="row-fluid">
    <!--Kayıt yoksa ekranda bir şey göstermemesi için bu yapı oluşturuldu -->
    <?php if (sizeof($rows) > 0) { ?>
        <table class="table table-striped table-bordered table-advance table-hover">
            <thead>
            <tr>
                <th> Kayıt No</th>
                <th> Fatura No</th>
                <th> Ürün Adı</th>
                <th> Açıklama</th>
                <th> Tedarikçi</th>
                <th> Miktar</th>
                <th> Alış Fiyatı</th>
                <th> Fatura Tutarı</th>
                <th> Tarih</th>
                <th> İşlemler</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row) { ?>
                <tr>

                    <td>#<?php echo $row->id; ?></td>
                    <td><?php echo $row->invoice; ?></td>
                    <td><?php echo $row->detail; ?></td>
                    <td><?php echo get_product_title($row->product_id); ?></td>
                    <td><?php echo get_supplier_title($row->supplier_id); ?></td>
                    <td><?php echo $row->quantity; ?></td>
                    <td><?php echo $row->price; ?></td>
                    <td><?php echo $row->total_price; ?></td>
                    <td><?php echo $row->date; ?></td>
                    <td width="100">
                        <a class="btn btn-primary" href="<?php echo base_url("purchase/editPage/$row->id"); ?>"><i
                                    class="icon-pencil"></i></a>

                        <a class="btn btn-danger removeBtn"
                           dataURL="<?php echo base_url("purchase/delete/$row->id"); ?>"><i
                                    class="icon-trash "></i></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-block alert-warning fade in">
            <h4 class="alert-heading"><strong>Uyarı !</strong></h4>
            <br>
            <p>
                Maalesef herhangi bir alış faturası bulunmamaktadır! Eklemek için <a
                        href="<?php echo base_url("purchase/newPage"); ?>">Tıklayınız</a>
            </p>
        </div>
    <?php } ?>
</div>
<!-- END PAGE CONTENT-->
