<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index()
    {
        //view data stdClass a atanır
        $viewData = new stdClass();

        //product veritabanına bağlanır ve result rows olarak yazdırır
        $viewData->rows = $this->db->get("product")->result();


        $this->load->view("product_list", $viewData);

    }

    public function isActiveSetter()
    {
        $isActive = $this->input->post("isActive");
        $isActive = ($isActive == "true") ? 1 : 0;
        $id = $this->input->post("id");

        $update = $this->db
            ->where(array("id" => $id))
            ->update("product", array("isActive" => $isActive));
    }

    public function newPage()
    {

        $viewData = new stdClass();
        // Tüm veri tabanını böyle çeker
        // $viewData->categories = $this->db->get("category")->result();

        $viewData->categories = $this->db->where("isActive", 1)->get("category")->result();
        $viewData->suppliers = $this->db->where("isActive", 1)->get("supplier")->result();
        $this->load->view("product_add", $viewData);
    }

    public function save()
    {
        $img_id = $_FILES["img_id"]["name"];


        $data = array(
            "title" => $this->input->post("title"),
            "code" => $this->input->post("code"),
            "detail" => $this->input->post("detail"),
            "quantity" => $this->input->post("quantity"),
            "list_price" => $this->input->post("list_price"),
            "sale_price" => $this->input->post("sale_price"),
            "category_id" => $this->input->post("category_id"),
            "supplier_id" => $this->input->post("supplier_id"),
            "img_id" => $img_id

        );


        $insert = $this->db->insert("product", $data);
        if ($insert) {
            $this->session->set_userdata(

                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );


            $config['upload_path'] = 'uploads/product/';
//            $config['allowed_types']        = 'gif|jpg|png';
//          Hepsine izin vermek için yıldız kullanılır
            $config['allowed_types'] = '*';
//          $config['max_size']             = 100;
//          $config['max_width']            = 1024;
//          $config['max_height'] = 768;

            //upload kütüphanesini eklemiş olduk, burada yazan config dosyası bizim ayarlarımızı belirtir
            $this->load->library('upload', $config);

            //upload kütüphanesi içersideki do_upload işlemini yap
            $upload = $this->upload->do_upload('img_id');
            if (!$upload) {
                $this->session->set_userdata(
                    array(
                        "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                        "alert-message" => getmessage("errorFileUpload"),//durum mesajını basar
                        "alert-type" => "error"//alert tipini gönderiyor
                    )
                );
                redirect(base_url("product/newPage"));
                die();

            }

            redirect(base_url("product"));
        } else {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("error"),//durum mesajını basar
                    "alert-type" => "error"//alert tipini gönderiyor
                )
            );
            redirect(base_url("product"));
        }
    }

    public function delete($id)
    {
        $delete = $this->db->delete("product", array("id" => $id));


        if ($delete) {
            $this->session->set_userdata(

                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );
            redirect(base_url("product"));

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
        $viewData->product = $this->db->where("id", $id)->get("product")->row();
        $this->load->view("product_edit", $viewData);
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
        $update = $this->db->where("id", $id)->update("product", $data);
        if ($update) {
            $this->session->set_userdata(

                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );
            redirect(base_url("product"));
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