<?php
/**
 * Created by PhpStorm.
 * User: MehmetFG
 * Date: 10.11.2017
 * Time: 23:48
 */



function getdealer($id){
    $CI=&get_instance();

    $dealerName=$CI->db->where("id",$id)->get("dealer")->row()->name;
    return $dealerName;
}



    function saveChange($table, $data){

    $ci =&get_instance();
    $id=$ci->input->get("id");
    $type=$ci->input->get("type");

    $durum=false;
    if($type=="1") {
        $durum= $ci->db->insert($table, $data);
        $message="Ekleme İşlemi Başarılı";
        $messageType="success";
    }
    elseif ($type=="2"){
        $durum  =$ci->db->where("id",$id)->update($table,$data);
        $message="Güncelleme İşlemi Başarılı";
        $messageType="warning";

    }
    elseif($type=="3"){
        $durum =$ci->db->where("id", $id)->delete($table);
        $message="Silem İşlemi Başarılı";
        $messageType="error";
    }
        if($durum) {

            $ci->session->set_userdata(
                array(
                    "alert"=> true,
                    "alert-message"=> $message,
                    "type"=>$messageType

                )

            );
            redirect($table."/getlist");

        }
        else {
            echo  "işlem başarısız";
        }

}