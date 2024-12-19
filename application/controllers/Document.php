<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Document_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
        $this->load->library('session');
		$this->load->helper('url');
    }

    public function index()
    {
        $data = array(
            'document_data' => $this->Document_model->get_all(),
        );
        $this->template->load('layout/masters','document/document_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Document_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'users' => $row->users,
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
            $this->template->load('layout/masters','document/document_read', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('document'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('document/create_action'),
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
        $this->template->load('layout/masters','document/document_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'id' => $this->input->post('id',TRUE),
				'users' => $this->input->post('users',TRUE),
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

            $this->Document_model->insert($data);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            redirect(site_url('document'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Document_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('document/update_action'),
				'id' => set_value('id', $row->id),
				'users' => set_value('users', $row->users),
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
            $this->template->load('layout/masters','document/document_form', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('document'));
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
				'users' => $this->input->post('users',TRUE),
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

            $this->Document_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('success', 'Berhasil Edit Data');
            redirect(site_url('document'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Document_model->get_by_id($id);

        if ($row) {
            $this->Document_model->delete($id);
            $this->session->set_flashdata('success', 'Berhasil Hapus Data');
            redirect(site_url('document'));
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('document'));
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

}

/* End of file Document.php */
/* Location: ./application/controllers/Document.php */
/* Please DO NOT modify this information : */
/* Generated by CRUDV2 Generator For AdminLTE Template 2024-11-15 04:01:59 */