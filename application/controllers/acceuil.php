<?php

class acceuil extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('acceuil');
	}

	public function bulbes() 
	{
		$this->load->view('bulbes');
	}

	public function massifs()
	{
		$this->load->view('massifs');
	}

	public function rosiers()
	{
		$this->load->view('rosiers');
	}
}
