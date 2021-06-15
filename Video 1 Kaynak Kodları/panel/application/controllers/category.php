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

    public function newPage() {
        $this->load->view("category_add");
    }

    public function save() {
        $data = array(
            "title" =>$this->input->post("title")
    );
        $insert = $this->db->insert("category", $data);
        if($insert){
            redirect(base_url("category"));
        }else{
            echo "Başarısız";
        }
    }
}