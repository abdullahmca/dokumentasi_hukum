<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User2_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
        $this->load->library('session');
		$this->load->helper('url');
    }

    public function index()
    {
        $data = array(
            'user2_data' => $this->User2_model->get_all(),
        );
        $this->template->load('layout/master','user2/user2_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User2_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'user' => $row->user,
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
            $this->template->load('layout/master','user2/user2_read', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('user2'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('user2/create_action'),
			'id' => set_value('id'),
			'user' => set_value('user'),
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
        $this->template->load('layout/master','user2/user2_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'id' => $this->input->post('id',TRUE),
				'user' => $this->input->post('user',TRUE),
				'auth_key' => $this->input->post('auth_key',TRUE),
				'password_hash' => $this->input->post('password_hash',TRUE),
				'password_reset_token' => $this->input->post('password_reset_token',TRUE),
				'email' => $this->input->post('email',TRUE),
				'status' => $this->input->post('status',TRUE),
				'created_at' => $this->input->post('created_at',TRUE),
				'updated_at' => $this->input->post('updated_at',TRUE),
				'picture' => $this->input->post('picture',TRUE),
				'updated_by' => $this->input->post('updated_by',TRUE),
			);

            $this->User2_model->insert($data);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            redirect(site_url('user2'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User2_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('user2/update_action'),
				'id' => set_value('id', $row->id),
				'user' => set_value('user', $row->user),
				'auth_key' => set_value('auth_key', $row->auth_key),
				'password_hash' => set_value('password_hash', $row->password_hash),
				'password_reset_token' => set_value('password_reset_token', $row->password_reset_token),
				'email' => set_value('email', $row->email),
				'status' => set_value('status', $row->status),
				'created_at' => set_value('created_at', $row->created_at),
				'updated_at' => set_value('updated_at', $row->updated_at),
				'picture' => set_value('picture', $row->picture),
				'updated_by' => set_value('updated_by', $row->updated_by),
			);
            $this->template->load('layout/master','user2/user2_form', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('user2'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
				'id' => $this->input->post('id',TRUE),
				'user' => $this->input->post('user',TRUE),
				'auth_key' => $this->input->post('auth_key',TRUE),
				'password_hash' => $this->input->post('password_hash',TRUE),
				'password_reset_token' => $this->input->post('password_reset_token',TRUE),
				'email' => $this->input->post('email',TRUE),
				'status' => $this->input->post('status',TRUE),
				'created_at' => $this->input->post('created_at',TRUE),
				'updated_at' => $this->input->post('updated_at',TRUE),
				'picture' => $this->input->post('picture',TRUE),
				'updated_by' => $this->input->post('updated_by',TRUE),
			);

            $this->User2_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('success', 'Berhasil Edit Data');
            redirect(site_url('user2'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User2_model->get_by_id($id);

        if ($row) {
            $this->User2_model->delete($id);
            $this->session->set_flashdata('success', 'Berhasil Hapus Data');
            redirect(site_url('user2'));
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('user2'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('user', 'user', 'trim|required');
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

	foreach ($this->User2_model->get_all() as $data) {
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

/* End of file User2.php */
/* Location: ./application/controllers/User2.php */
/* Please DO NOT modify this information : */
/* Generated by CRUDV2 Generator For AdminLTE Template 2024-11-12 04:42:50 */