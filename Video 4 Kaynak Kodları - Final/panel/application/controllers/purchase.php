<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Purchase extends CI_Controller
{

    public function index()
    {
        //view data stdClass a atanır
        $viewData = new stdClass();

        //product veritabanına bağlanır ve result rows olarak yazdırır
        $viewData->rows = $this->db->get("purchase")->result();


        $this->load->view("purchase_list", $viewData);

    }


    public function newPage()
    {

        $viewData = new stdClass();
        // Tüm veri tabanını böyle çeker
        // $viewData->categories = $this->db->get("category")->result();

        $viewData->products = $this->db->where("isActive", 1)->get("product")->result();
        $viewData->suppliers = $this->db->where("isActive", 1)->get("supplier")->result();
        $this->load->view("purchase_add", $viewData);
    }

    public function save()
    {
        $data = array(
            "invoice" => $this->input->post("invoice"),
            "detail" => $this->input->post("detail"),
            "quantity" => $this->input->post("quantity"),
            "price" => $this->input->post("price"),
            "total_price" => $this->input->post("quantity") * $this->input->post("price"),
            "date" => date("Y-m-d-h-m-s"),
            "product_id" => $this->input->post("product_id"),
            "supplier_id" => $this->input->post("supplier_id"),

        );


        $insert = $this->db->insert("purchase", $data);
        if ($insert) {
            $this->session->set_userdata(

                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );

            /* Ürün Güncelleme İşlemleri Burada Yapılır */

            $product_id = $this->input->post("product_id");
            $quantity = $this->input->post("quantity");
            $price = $this->input->post("price");

            $product = $this->db->where("id", $product_id)->get("product")->row();

            $old_quantity = $product->quantity;
            $new_quantity = $old_quantity + $quantity;

            $data = array(
                "quantity" => $new_quantity,
                "list_price" => $price
            );
            $update = $this->db->where("id", $product->id)->update("product", $data);

            redirect(base_url("purchase"));
        } else {
            $this->session->set_userdata(
                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("error"),//durum mesajını basar
                    "alert-type" => "error"//alert tipini gönderiyor
                )
            );
            redirect(base_url("purchase"));
        }
    }

    public function delete($id)
    {
        $delete = $this->db->delete("purchase", array("id" => $id));


        if ($delete) {
            $this->session->set_userdata(

                array(
                    "alert" => true,//ekrana alert çıkarmak için bu kullanıldı
                    "alert-message" => getmessage("success"),//durum mesajını basar
                    "alert-type" => "success"//alert tipini gönderiyor
                )
            );
            redirect(base_url("purchase"));

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

    //edit sayfaları vs yok bunların eklerim (sanırım(bir ara (belki (bir ihtimal))))
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
            redirect(base_url("purchase"));
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