<?php defined('BASEPATH') or exit('no access allowed');
class M_heroUnit extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getHero()
	{
		$this->db->select("*");
		$this->db->from('hero');
		$this->db->where('status', '1');
		$get = $this->db->get();
		return $get->result_array();
	}
}
