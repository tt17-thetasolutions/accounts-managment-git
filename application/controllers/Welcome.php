<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
     
	// public function __construct(){
	// 	parent::__construct();
	// 	$this->logged_in();

	// } 

	// private function logged_in(){
	// 	if(! $this->session->userdata('isLogin')){
	// 		redirect('login/login_form');
	// 	}
	// }

	public function index()
	{
		// $session = $this->session->has_userdata('username');
		// if($session == FALSE)
		// {
		// 	redirect('login/login_form');
		// }else{
		$this->load->helper('user');
		$this->load->model('config_model');
		$data['config'] = $this->config_model->get_config_data();
		$this->load->view('welcome_message',$data);
	//    }
		
	}
	public function home()
	{

		$this->load->view('login');	
	}
	public function form()
	{
		$this->load->view('form');	
	}
}
