<?php
/**
 * Created by PhpStorm.
 * User: mEHMET F. GCGN
 * Date: 28.11.2017
 * Time: 13:39
 */

require_once APPPATH . 'interfaces\CrudModelInterface.php';



class media extends CI_Controller implements  CrudModelInterface{


    public function getList()
    {

        $viewData=new stdClass();
        $viewData->model=$this->db->get('media')->result();
        $viewData->createBtn="media/credit";
        $this->load->view("media/List", $viewData);

    }

    public function credit()
    {
        $viewData=new stdClass();
        $viewData->model=null;
        $viewData->action="media/savechange?type=1&id=0";
        $this->load->view("media/credit",$viewData);
    }
    public function saveChange()
    {
        $name = $this->input->post("mediaName");
        $mail=$this->input->post("mediaMail");
        $data=array(
            "Name"=> $name,
            "Mail"=>$mail
        );

        saveChange("media",$data);

    }

    public function  isActiveSetter(){

        $isActive   = $this->input->post("isActive");

        $id          = $this->input->post("id");

        $this->db->where("id", $id)->update("media", array("isActive" => $isActive));


    }

    public function getByID($id)
    {
        // TODO: Implement getByID() method.
    }



}
