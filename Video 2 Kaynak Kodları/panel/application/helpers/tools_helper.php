<?php

function get_category_title($id)
{
    //php dosyasını codeighniter
    // içerisinde kullanmak için
    // aşağıdaki gibi bir değişken oluşturulmalıdır.
    //this anahtar keslimesini burada getirir ve CI'ye aktarır

    $CI =& get_instance();

    $title = $CI->db
        ->where('id', $id)
        ->get("category")
        ->row()
        ->title;
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

    $title = $CI->db
        ->where('id', $id)
        ->get("supplier")
        ->row()
        ->title;
    return $title;
}

?>
