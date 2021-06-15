<?php

//supplier kontrolleri bu sayfada yapılıyor
class Supplier extends CI_Controller
{
    public function index()
    {
        $viewData = new stdClass();
        $viewData->rows = $this->db->get("supplier")->result();

        //die();//kendinden sonraki kodun çalışmasını engeller

        $this->load->view("supplier_list", $viewData);
    }

    public function newPage()
    {
        $this->load->view("supplier_add");
    }

    public function save()
    {
        $data = array(
            "title" => $this->input->post("title"),
            "phone" => $this->input->post("phone"),
            "email" => $this->input->post("email"),
            "address" => $this->input->post("address")
        );
        $insert = $this->db->insert("supplier", $data);
        if ($insert) {
            redirect(base_url(
                "supplier"));
        } else {
            echo "Hata Aldınız!";
        }
    }

    public function isActiveSetter()
    {
        $isActive = $this->input->post("isActive");
        $isActive = ($isActive == "true") ? 1 : 0;
        $id = $this->input->post("id");

        $update = $this->db
            ->where(array("id" => $id))
            ->update("supplier", array("isActive" => $isActive));
    }

    public function delete($id)
    {
        $delete = $this->db->delete("supplier", array("id" => $id));

        if ($delete) {
            redirect(base_url("supplier"));

        } else {
            echo "Hata";
        }

        echo $id;
    }


    public function editPage($id)
    {
        $viewData = new stdClass();
        $viewData->supplier = $this->db->where("id", $id)->get("supplier")->row();
        $this->load->view("supplier_edit", $viewData);
    }

    public function update($id)
    {
        $title = $this->input->post("title");
        $address = $this->input->post("address");
        $phone = $this->input->post("phone");
        $email = $this->input->post("email");

        $isActive = $this->input->post("isActive");
        $isActive = ($isActive == "on") ? 1 : 0;

        $data = array(
            "title" => $title,
            "address"=>$address,
            "phone"=> $phone,
            "email"=> $email,
            "isActive" => $isActive
        );

        $update = $this->db->where("id", $id)->update("supplier", $data);
        if ($update) {
            redirect(base_url("supplier"));
        } else {
            echo "Düzenleme işlemi başarısız!";
        }
    }
}