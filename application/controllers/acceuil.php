<?php

class acceuil extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Post_M');
	}

	public function index()
	{
		$this->load->view('acceuil');
	}

	public function bulbes() 
	{
		$data['produit']=$this->Post_M->get_bulbes();
		$this->load->view('bulbes', $data);
	}

	public function massifs()
	{
		$data['produitmassif']=$this->Post_M->get_massif();
		$this->load->view('massifs', $data);
	}

	public function rosiers()
	{
		$data['produitrosier']=$this->Post_M->get_rosier();
		$this->load->view('rosiers', $data);
	}

	public function login() 
	{
		$data['title'] = 'Login';
		$this->load->view("login", $data);
	}

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run())
		{
			//true
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//model function
			$this->load->model('main_model');
			if($this->main_model->can_login($username, $password))
			{
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'index.php/acceuil/enter');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Username or Password');
				redirect(base_url() . 'index.php/acceuil/login');
			}
		}
		else
		{
			//false
			$this->login();
		}
	}

	public function enter() 
	{
		if($this->session->userdata('username') != '')
		{
			echo '<h2>Welcome '.$this->session->userdata('username').'</h2>';
			echo '<label><a href="'.base_url().'index.php/acceuil/logout">Logout</a></label>';
			$this->load->view('acceuil');
		}
		else
		{
			redirect(base_url() . 'index.php/acceuil/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url() . 'index.php/acceuil/login');
	}
}
