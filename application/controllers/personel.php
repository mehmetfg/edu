<?php
/**
 * Created by PhpStorm.
 * User: Üt
 * Date: 13.11.2017
 * Time: 09:55
 */
require_once APPPATH . 'interfaces\CrudModelInterface.php';
class personel extends CI_Controller implements CrudModelInterface {



    public function getList()
    {

        $viewData=new stdClass();
        $viewData->model=$this->db->get('personel')->result();
        $viewData->createBtn="personel/credit";
        $this->load->view("personel/List", $viewData);

    }

    public function credit()
    {
        $viewData=new stdClass();
        $viewData->model=null;
        $viewData->action="personel/savechange?type=1&id=0";
        $this->load->view("personel/credit",$viewData);
    }
    public function saveChange()
    {
        $name = $this->input->post("personelName");
        $mail=$this->input->post("personelMail");
        $data=array(
            "Name"=> $name,
            "Mail"=>$mail
        );

        saveChange("personel",$data);

    }

    public function  isActiveSetter(){

        $isActive   = $this->input->post("isActive");

        $id          = $this->input->post("id");

        $this->db->where("id", $id)->update("personel", array("isActive" => $isActive));


    }

    public function getByID($id)
    {
        // TODO: Implement getByID() method.
    }








































    public function  index(){

        $rows=$this
            ->db
            ->where("id", 6)
            ->where_in("type", array("0", "1"))
            ->get("media")
            ->result();

        echo $this->db->last_query();
        $viewData=array("rows"=>$rows);


        $this->load->view("Dbislem", $viewData);

    }
    public function  like(){


        $rows=$this
            ->db
            ->or_like(array("name"=> "fatih", "mail"=>"1"))
            ->get("media")
            ->result();

        echo $this->db->last_query();
        $viewData=array("rows"=>$rows);


        $this->load->view("Dbislem", $viewData);
    }

    public function insert(){

        $this->load->view("insert");
    }
    public function insertis(){


        $name = $this->input->post("name");
        $mail=$this->input->post("mail");
        echo $name;
        echo $mail;

        $data=array("name"=> $name,

            "mail"=>$mail
        );
        $this->db->insert("media",$data);
    }

    public  function  model(){

        $this->load->model("personel_model");
        $result=$this->personel_model->get();

        print_r($result);



    }
    public function  helper_test(){

        getMe("gönderilen mesaj");
        echo toplam(10,12);
    }


    public function dupload(){

        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = '*';
        $this->load->library("upload", $config);
        if(!$this->upload->do_upload("file")){

            echo "hatali";

        }
        else {

            echo "başarılı";
        }





    }

    public function  postMail(){

        $config=array(

            "protocol"=>"smtp",
            "smtp_host"=>"smtp.gmail.com",
            "smtp_port"=>"587",
            "smtp_user"=>"kariyerpoliklinigimerkez@gmail.com",
            "smtp_pass"=>"m362514m.",
            "starttls"=>true,
            "charset"=>"utf-8",
            "mailtype"=>"html",
            "wordwrap"=>true,
            "newline"=> "\r\n",
            "crlf"=> "\r\n"

        );
        $this->load->library("email", $config);

        $this->email->from("kariyerpoliklinigimerkez@gmail.com");
        $this->email->to("fatihgocgun@hotmial.com");
        $this->email->subject("başvuru");
        $this->email->message("deneme");
        $this->email->send();

        echo $this->email->print_debugger();



    }

}