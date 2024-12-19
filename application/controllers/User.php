<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
        $this->load->library('session');
		$this->load->helper('url');
    }

    public function index()
    {
    	$data['user_data']=$this->User_model->get_all();
        $this->template->load('layout/masters','user/user_list',$data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_model->json();
    }

    public function read($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'users' => $row->user,
				'auth_key' => $row->auth_key,
				'password_hash' => $row->password_hash,
				'password_reset_token' => $row->password_reset_token,
				'email' => $row->email,
				'status' => $row->status,
				'created_at' => $row->created_at,
				'updated_at' => $row->updated_at,
				'picture' => $row->picture,
				'updated_by' => $row->updated_by,
			);
            $this->template->load('layout/masters','user/user_read', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('user/create_action'),
			'id' => set_value('id'),
			'users' => set_value('users'),
			'auth_key' => set_value('auth_key'),
			'password_hash' => set_value('password_hash'),
			'password_reset_token' => set_value('password_reset_token'),
			'email' => set_value('email'),
			'status' => set_value('status'),
			'created_at' => set_value('created_at'),
			'updated_at' => set_value('updated_at'),
			'picture' => set_value('picture'),
			'updated_by' => set_value('updated_by'),
		);
        $this->template->load('layout/masters','user/user_form', $data);
    }
    
    public function create_action() 
    {  
        $pass=$this->input->post('password_hash',TRUE);
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);
        $char      = preg_match('/[^a-zA-Z0-9]/',$pass); 
        if(!$uppercase || !$lowercase || !$number || !$char || strlen($pass)<6){
            echo "password harus lebih dari 6 karakter, mengandung huruf BESAR, huruf kecil, karakter khusus dan angka";
            echo "<br><button><a href='".site_url('user/create/')."'><b>SET PASSWORD AKUN</b></a></button>";
        }else{
	        $data = array( 
				'users' => $this->input->post('users',TRUE),
				'auth_key' => "", 
                'password_hash' => password_hash($this->input->post('password_hash',TRUE), PASSWORD_DEFAULT),
				'password_reset_token' => "",
				'email' => $this->input->post('email',TRUE),
				'status' => 10,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'picture' => "",
				'updated_by' => "",
			);  
			//print_r($data);die(); 
	        $this->User_model->insert($data);
	        $this->session->set_flashdata('success', 'Berhasil Tambah Data');
	        redirect(site_url('user')); 
        } 
    }
    
    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
	            $data = array(
	                'button' => 'Ubah',
	                'action' => site_url('user/update_action/'.$id),
					'id' => set_value('id', $row->id),
					'users' => set_value('users', $row->users),
					'password_hash' => set_value('password_hash', $row->password_hash),
					'auth_key' => set_value('auth_key', $row->auth_key),
					'password_reset_token' => set_value('password_reset_token', $row->password_reset_token),
					'email' => set_value('email', $row->email),
					'status' => set_value('status', $row->status),
					'created_at' => set_value('created_at', $row->created_at),
					'updated_at' => set_value('updated_at', $row->updated_at),
					'picture' => set_value('picture', $row->picture),
					'updated_by' => set_value('updated_by', $row->updated_by),
				); 
            $this->template->load('layout/masters','user/user_form', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('user'));
        }
    }
    
    public function update_action($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) { 
	        $pass=$this->input->post('password_hash',TRUE);
	        $uppercase = preg_match('@[A-Z]@', $pass);
	        $lowercase = preg_match('@[a-z]@', $pass);
	        $number    = preg_match('@[0-9]@', $pass);
	        $char      = preg_match('/[^a-zA-Z0-9]/',$pass); 
	        // echo $uppercase.','.$lowercase.','.$number.','.$char;
	        if(!$uppercase || !$lowercase || !$number || !$char || strlen($pass)<6){
	            echo "<br>password harus lebih dari 6 karakter, mengandung huruf BESAR, huruf kecil, karakter khusus dan angka";
	            echo "<br><button><a href='".site_url('user/update/'.$id)."'><b>SET PASSWORD AKUN</b></a></button>";
	        }else{
	            $data = array(
					'users' => $this->input->post('users',TRUE),
					'auth_key' => "", 
	                'password_hash' => password_hash($this->input->post('password_hash',TRUE), PASSWORD_DEFAULT),
					'password_reset_token' => "",
					'email' => $this->input->post('email',TRUE),
					'status' => 10, 
					'updated_at' => date('Y-m-d H:i:s'),
					'picture' => "",
					'updated_by' => "",
				); 
				// print_r($data);die();
	            $this->User_model->update($id, $data);
	            $this->session->set_flashdata('success', 'Berhasil Edit Data');
	            redirect(site_url('user')); 
	        }
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            // $this->User_model->delete($id);
            $this->session->set_flashdata('success', 'Berhasil Hapus Data');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('users', 'users', 'trim|required');
		$this->form_validation->set_rules('auth_key', 'auth key', 'trim|required');
		$this->form_validation->set_rules('password_hash', 'password hash', 'trim|required');
		$this->form_validation->set_rules('password_reset_token', 'password reset token', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
		$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
		$this->form_validation->set_rules('picture', 'picture', 'trim|required');
		$this->form_validation->set_rules('updated_by', 'updated by', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "public.user.xls";
        $judul = "public.user";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Id");
	xlsWriteLabel($tablehead, $kolomhead++, "User");
	xlsWriteLabel($tablehead, $kolomhead++, "Auth Key");
	xlsWriteLabel($tablehead, $kolomhead++, "Password Hash");
	xlsWriteLabel($tablehead, $kolomhead++, "Password Reset Token");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
	xlsWriteLabel($tablehead, $kolomhead++, "Picture");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated By");

	foreach ($this->User_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->user);
	    xlsWriteLabel($tablebody, $kolombody++, $data->auth_key);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password_hash);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password_reset_token);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->picture);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_by);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by CRUDV2 Generator For AdminLTE Template 2024-11-12 02:25:26 */