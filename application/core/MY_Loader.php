<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 28.11.2017
 * Time: 16:18
 */
class MY_Loader extends CI_Loader
{
    public function __construct() {
    parent::__construct();
}
    public function iface($strInterfaceName) {
    require_once APPPATH . '/interfaces/' . $strInterfaceName . '.php';
}
}