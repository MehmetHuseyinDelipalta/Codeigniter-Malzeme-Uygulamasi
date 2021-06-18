<?php

function get_category_title($id)
{
    //php dosyasını codeighniter
    // içerisinde kullanmak için
    // aşağıdaki gibi bir değişken oluşturulmalıdır.
    //this anahtar keslimesini burada getirir ve CI'ye aktarır

    $CI =& get_instance();

    $row = $CI->db
        ->where('id', $id)
        ->get("category")
        ->row();
    //eğer boşsa kırmızı renkte kategori bulunamadı yazdırmasını sağladık
    $title = "<span style='color:red'>Kategori Bulunamadı!</span>";
    if (!empty($row)) {
        //eğer doluysa title değerini çevirdik
        $title = $row->title;
    }
    return $title;
}

//productın içindeki supplier id görüntüleme kısmı için yazılan fonksiyon ektedir
function get_supplier_title($id)
{
    //php dosyasını codeighniter
    // içerisinde kullanmak için
    // aşağıdaki gibi bir değişken oluşturulmalıdır.
    //this anahtar keslimesini burada getirir ve CI'ye aktarır

    $CI =& get_instance();

    $row = $CI->db
        ->where('id', $id)
        ->get("supplier")
        ->row();
    //eğer boşsa kırmızı renkte tedarikçi bulunamadı yazdırmasını sağladık
    $title = "<span style='color:red'>Tedarikçi Bulunamadı!</span>";
    if (!empty($row)) {
        //eğer doluysa title değerini çevirdik
        $title = $row->title;
    }
    return $title;
}

function get_product_title($id)
{
    //php dosyasını codeighniter
    // içerisinde kullanmak için
    // aşağıdaki gibi bir değişken oluşturulmalıdır.
    //this anahtar keslimesini burada getirir ve CI'ye aktarır

    $CI =& get_instance();

    $row = $CI->db
        ->where('id', $id)
        ->get("product")
        ->row();
    //eğer boşsa kırmızı renkte kategori bulunamadı yazdırmasını sağladık
    $title = "<span style='color:red'>Ürün Bulunamadı!</span>";
    if (!empty($row)) {
        //eğer doluysa title değerini çevirdik
        $title = $row->title;
    }
    return $title;
}

?>
