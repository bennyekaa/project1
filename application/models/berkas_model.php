<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas_model extends CI_Model {

    public function getGambar($where) {
        return $this->db->get_where('tb_berkas', $where);
    }

}
?>