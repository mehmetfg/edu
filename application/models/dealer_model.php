<?php
/**
 * Created by PhpStorm.
 * User: MehmetFG
 * Date: 10.11.2017
 * Time: 23:21
 */

class dealer_model extends  CI_Model{

public function  get(){

    return $this->db->get("dealer")->result();
}
}

