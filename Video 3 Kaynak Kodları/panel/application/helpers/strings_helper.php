<?php
//bu yapı ile helper da alert mesajı döndürme işlemini yapıyoruz
//getmessage diye sonksiyon tanımladık ve key değerini verdik

function getMessage($key)
{
    //messages olarak dizi içinde aldık
    $messages = array(
        //hangi değerde hangşi mesajı çevirmek istediğimizi belirttik
        //BURADA HER EKRAN İÇİN AYRI MESAJ BASTIRABİLİRİZ AMA BU YAPI DAHA GENEL KULLANIMLI BİR YAPIDIR
        "error" => "İşlem Başarısızdır!",
        "success" => "İşlem Başarılıdır!",
        "blankField" => "Sayfada Boş Alan Bırakmayınız!",
        "errorFileUpload" => "Kayıt Yapıldı Ancak Dosya Yüklenirken Bir Hata Oluştu!",
    );
    //geri dönüş değeri olarak key verdik
    return $messages[$key];
}