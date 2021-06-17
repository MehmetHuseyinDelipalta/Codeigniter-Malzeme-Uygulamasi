<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function index()
    {
        $viewData = new stdClass();

        $viewData->categories = $this->db->get("category")->result();

        $this->load->view('category_list', $viewData);
    }

    public function isActiveSetter()
    {
        $isActive = $this->input->post("isActive");
        $isActive = ($isActive == "true") ? 1 : 0;
        $id = $this->input->post("id");

        $update = $this->db
            ->where(array("id" => $id))
            ->update("category", array("isActive" => $isActive));
    }

    public function newPage()
    {
        $this->load->view("category_add");
    }

    public function save()
    {
//BURADAKİ KODLAR BİR AŞAĞISINDAKİ İNSTERT KODUNA KADAR ÇALIŞIYORDU,
// BU HALİNİ GÖRMEK İÇİN YİNE İNSTERT KISMINA GELEN KODLARA KADAR YORUM SATIRI YAPIP BUNU ÇALIŞIR HALE GETİREBİLİRSİNİZ.
//        $data = array(
//            "title" => $this->input->post("title")
//        );
//        //bu yapıda veri kaydederken verinin boş olmamasına bakıldı.
//        //gelen data verisinde title kısmını kontrol ettirdi ve ekrana hata bastırdı
//        if ($data["title"]==""){
//            $this->session->set_userdata(
//                array(
//                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
//                    "alert-message" => getmessage("blankField"),//durum mesajını basar
//                    "alert-type" => "warning"//alert tipini gönderiyor
//                )
//            );
//            redirect(base_url("category/newPage"));
//            die();
//        }


        //ESKİ YAPIDA ÇALIŞMAK İSTİYOR İSENİNİZ BU RADAN BAŞLAYIP (AŞAĞIYA İNİN)
        $title = trim(strip_tags($this->input->post("title")));

        if ($title == "" || $title == " ") {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("blankField"),//durum mesajını basar
                    "alert-type" => "warning"//alert tipini gönderiyor
                )
            );
            redirect(base_url("category/newPage"));
            die();
        }
        $data = array(
            "title" => $title
        );
//BU ARADA KALAN KISIMI YORUM SATIRI İÇERİSİNE ALIN VE ESKİ YERİ AÇIN BÖYLELİKLE KODUNUZ ÇALIŞACAK
        $insert = $this->db->insert("category", $data);


        if ($insert) {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );

            redirect(base_url("category"));
        } else {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("error"),//durum mesajını basar
                    "alert-type" => "error"//alert tipini gönderiyor
                )
            );
        }
    }

    public function delete($id)
    {
        $delete = $this->db->delete("category", array("id" => $id));

        if ($delete) {
            $this->session->set_userdata(

                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );

            redirect(base_url("category"));
            //echo true;
        } else {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("error"),//durum mesajını basar
                    "alert-type" => "error"//alert tipini gönderiyor
                )
            );
        }
        //echo $id;
    }

    public function editPage($id)
    {
        $viewData = new stdClass();
        $viewData->category = $this->db->where("id", $id)->get("category")->row();
        $this->load->view("category_edit", $viewData);
    }

    public function update($id)
    {
        $title = $this->input->post("title");
        $isActive = $this->input->post("isActive");
        $isActive = ($isActive == "on") ? 1 : 0;


        $data = array(
            "title" => $title,
            "isActive" => $isActive
        );
        $update = $this->db->where("id", $id)->update("category", $data);

        if ($update) {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );
            redirect(base_url("category"));
        } else {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("error"),//durum mesajını basar
                    "alert-type" => "error"//alert tipini gönderiyor
                )
            );
        }
    }
}