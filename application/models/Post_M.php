<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Post_M extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_bulbes()
	{
		$this->db->from('produit');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_massif()
	{
		$this->db->from('produitmassif');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_rosier()
	{
		$this->db->from('produitrosier');
		$query=$this->db->get();
		return $query->result();
	}
}