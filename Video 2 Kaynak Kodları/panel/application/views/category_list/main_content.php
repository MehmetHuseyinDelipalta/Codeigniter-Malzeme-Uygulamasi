<!-- BEGIN PAGE CONTENT-->
<a href="<?php echo base_url("category/newPage"); ?>" class="btn btn-success"><i class="icon-plus">Ekle</i></a>
<br><br>
<div class="row-fluid">
    <table class="table table-striped table-bordered table-advance table-hover">
        <thead>
        <tr>
            <th><i class="icon-sort-by-order"></i> Kayıt Numarası</th>
            <th><i class="icon-bullhorn"></i> Başlık</th>
            <th><i class="icon-edit"></i> Durum</th>
            <th><i class="icon-cogs"></i> İşlemler</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category) { ?>
            <tr>
                <td>#<?php echo $category->id; ?></td>
                <td><?php echo $category->title; ?></td>
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
                                dataID="<?php echo $category->id; ?>"
                                dataURL="<?php echo base_url("category/isActiveSetter/"); ?>"

                            <?php echo ($category->isActive == 1) ? "checked" : ""; ?>
                        >
                    </label>
                </td>
                <td>
                    <a class="btn btn-primary" href="<?php echo base_url("category/editPage/$category->id"); ?>"><i
                                class="icon-pencil"></i></a>
                    <a class="btn btn-danger" href="<?php echo base_url("category/delete/$category->id"); ?>"><i
                                class="icon-trash "></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!-- END PAGE CONTENT-->
