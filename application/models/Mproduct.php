<?php
class Mproduct extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('product');
    }
}
