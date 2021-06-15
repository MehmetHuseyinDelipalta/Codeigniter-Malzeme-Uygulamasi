<!-- BEGIN PAGE CONTENT-->
<a href="<?php echo base_url("supplier/newPage"); ?>" class="btn btn-success"><i class="icon-plus">Ekle</i></a>
<br><br>
<div class="row-fluid">
    <table class="table table-striped table-bordered table-advance table-hover">
        <thead>
        <tr>
            <th><i class="icon-sort-by-order"></i> Kayıt Numarası</th>
            <th><i class="icon-bullhorn"></i> Tedarikçi</th>
            <th with="200"><i class="icon-building"></i> Adres</th>
            <th><i class="icon-phone"></i> Telefon</th>
            <th with="100"><i class="icon-envelope"></i> E-posta</th>
            <th><i class="icon-edit"></i> Durum</th>
            <th><i class="icon-cogs"></i> İşlemler</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) { ?>
            <tr>
                <td>#<?php echo $row->id; ?></td>
                <td><?php echo $row->title; ?></td>
                <td>
                    <?php

                    $address = $row->address;

                    $strlen = strlen($address);

                    if ($strlen > 40) {

                        echo mb_substr($address, 0, 40) . ("...");

                    } else {

                        echo $address;

                    }
                    ?>
                </td>

                <td><?php echo $row->phone; ?></td>

                <td><?php echo $row->email; ?></td>

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
                                dataURL="<?php echo base_url("supplier/isActiveSetter/"); ?>"

                            <?php echo ($row->isActive == 1) ? "checked" : ""; ?>
                        >
                    </label>
                </td>
                <td>

                    <a class="btn btn-primary" href="<?php echo base_url("supplier/editPage/$row->id"); ?>"><i
                                class="icon-pencil"></i></a>

                    <a class="btn btn-danger" href="<?php echo base_url("supplier/delete/$row->id"); ?>"><i
                                class="icon-trash "></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!-- END PAGE CONTENT-->
