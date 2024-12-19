<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    function __construct()
    {
        parent::__construct(); 
		// $this->load->library('datatables');
        $this->load->library('session');
		$this->load->helper('url');
    }
	public function login_form()
	{
		if($this->session->userdata('id_user')){
			redirect(site_url('dashbord'));
		}else{
			$this->load->view('login/login_form');	 
		}
	}
	public function logout(){
        $array_val = array('username' => '','id_user' => '');
        $this->session->unset_userdata($array_val);
        $this->session->sess_destroy();
        redirect(site_url(''));  
	}
	public function cek_login(){ 
		$cek=$this->db->query("select a.password_hash,a.id,a.users from public.user a where users='".$this->input->post('log')."'")->row(); 
		if($cek){
			if (password_verify($this->input->post('pwd',TRUE),$cek->password_hash )) { 
				$newdata=array('id_user'=>$cek->id,'username'=>$cek->users); 
		        $this->session->set_userdata($newdata); 
				redirect(site_url('dashbord')); 
			}
			else{
				echo "<br>tidak cocok, cek user dan passwrod !";				
			} 
			redirect(site_url('wp-admin'));
		}else{
			redirect(site_url('wp-admin'));
		}
	}
}
