<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 28.11.2017
 * Time: 14:01
 */

  interface CrudModelInterface
 {
    public function getByID($id);
    public function getList();
    public function credit();
    public  function saveChange();



}