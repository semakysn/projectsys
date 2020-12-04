<?php
class personel extends CI_Controller {
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("personel_model");
    }

    public function  index(){

        $list= $this->personel_model->get_all();
        $viewData["list"]=$list;

        $this->load->view("personel_liste", $viewData);

    }

    /**
     *
     */
    public function insert_form (){
        $this->load->view("personel_ekle");

    }


    /**
     *
     */
    public function insert () {
    $personel_ad = $this->input->post("personel_ad");
    $email       = $this->input->post("email");
    $telefon     = $this->input->post("telefon");
    $adres       = $this->input->post("adres");

    $data = array(
        "personel_ad"    => $personel_ad,
        "email"          => $email,
        "telefon"        => $telefon,
        "adres"          => $adres
    );

    $insert = $this->personel_model->insert($data);
     if ($insert){
         echo "Ekleme işlemi başarılı. Listeye dönmek için <a href=' " .base_url () ."'>tıklayınız</a>";
     }
     else {
         echo "Ekleme işlemi başarısız.  Listeye dönmek için <a href=' " .base_url () ."'>tıklayınız</a>";
      }

    }


    public function update_form ($id)
    {

        $where= array("id" => $id);

        $personel = $this->personel_model->get($where);

        $viewData["personel"] = $personel;

        $this->load->view ("personel_düzenle",$viewData);
    }

    /**
     *
     */
    public function update($id){

        $where = array(
            "id" => $id
        );

        $data = array(
            "personel_ad"    => $this->input->post("personel_ad"),
            "email"          => $this->input->post("email"),
            "telefon"        => $this->input->post("telefon"),
            "adres"          => $this->input->post("adres")
        );
        $update = $this->personel_model->update($where, $data);

        if ($update){
            echo "Güncelleme işlemi başarılı. Listeye dönmek için <a href=' " .base_url () ."'>tıklayınız</a>";
        }
        else {
            echo "Güncelleme işlemi başarısız.  Listeye dönmek için <a href=' " .base_url () ."'>tıklayınız</a>";
        }

    }

    /**
     *
     */
    public function delete ($id) {
        $where = array(
            "id"  =>  $id
        );
        $this->personel_model->delete($where);

        redirect (base_url ());
    }

    /**
     *
     */
    public function order ($field = "id", $order = "ASC") {

        $list = $this->personel_model->order_by($field, $order);
        $viewData["list"]=$list;

        $this->load->view("personel_liste", $viewData);
    }

}