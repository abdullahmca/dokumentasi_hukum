<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Documents_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper('url');
    }

    public function index()
    {
        $data = array(
            'documents_data' => $this->Documents_model->get_all(),
        );
        $this->template->load('layout/masters','documents/documents_list', $data);
    }

    public function uploadqrcode($id) 
    {
        $row = $this->Documents_model->get_by_id($id); 
        if ($row) {
            $data['id']=$id;
            $data['button']="Upload Dokumen";
            $data['action']=site_url('uploaddoks');
            $this->template->load('layout/masters','documents/uploads_form', $data);
        }else{
            redirect(site_url('documents'));            
        }
    }
    public function do_upload() { 
        // konfig1 
        // Configuring the upload settings
        $config['upload_path'] = './assets/uploads/'; // The path to store uploaded files
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Allowed file types
        $config['max_size'] = 2048; // Max file size (in KB)
        $config['max_width'] = 1024; // Max width
        $config['max_height'] = 768; // Max height 
        $filename = date('Ymd').'_'.time() . "_" . $_FILES['qrccode']['name'];
        $config['file_name'] = $filename;  // Set custom file name
        print_r($config);die();
        // Initialize the upload library with the config
        $this->upload->initialize($config);

        // konfig2
        // Configuring the upload settings
        $config2['upload_path'] = './assets/uploads/'; // The path to store uploaded files
        $config2['allowed_types'] = 'jpg|jpeg|png|gif'; // Allowed file types
        $config2['max_size'] = 2048; // Max file size (in KB)
        $config2['max_width'] = 1024; // Max width
        $config2['max_height'] = 768; // Max height 
        $filename2 = date('Ymd').'_'.time() . "_" . $_FILES['sampul']['name'];
        $config2['file_name'] = $filename2;  // Set custom file name
        print_r($config2);die();
        // Initialize the upload library with the config
        $this->upload->initialize($config2);
        $qrcode=$this->input->post('qrccode');
        $sampul=$this->input->post('sampul');
        $qrcode=$this->input->post('qrccode');
        $id=$this->input->post('id'); 

        if ($this->upload->do_upload('qrccode')) {
            if ($this->upload->do_upload('sampul')) {

            }else{ 
                $error = $this->upload->display_errors();
                echo "Error: " . $error;   
                redirect(site_url('uploaddok/'.$id));
            }
        }
        else{ 
            $error = $this->upload->display_errors();
            echo "Error: " . $error;   
            redirect(site_url('uploaddok/'.$id));
        }
    }

    public function read($id) 
    {
        $row = $this->Documents_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'tipe_dokumen' => $row->tipe_dokumen,
				'judul' => $row->judul,
				'tahun_terbit' => $row->tahun_terbit,
				'bidang_hukum' => $row->bidang_hukum,
				'link' => $row->link,
			);
            $this->template->load('layout/masters','documents/documents_read', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('documents'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('documents/create_action'),
			'id' => set_value('id'),
			'tipe_dokumen' => set_value('tipe_dokumen'),
			'judul' => set_value('judul'),
			'tahun_terbit' => set_value('tahun_terbit'),
			'bidang_hukum' => set_value('bidang_hukum'),
			'link' => set_value('link'),
            'created_at' => set_value('created_at'),
            'created_date' => set_value('created_date'),
		);
        $this->template->load('layout/masters','documents/documents_form', $data);
    }
    
    public function create_action() 
    { 
            $data = array( 
				'tipe_dokumen' => $this->input->post('tipe_dokumen',TRUE),
				'judul' => $this->input->post('judul',TRUE),
				'tahun_terbit' => $this->input->post('tahun_terbit',TRUE),
				'bidang_hukum' => $this->input->post('bidang_hukum',TRUE),
				'link' => $this->input->post('link',TRUE),
                'created_at' => $this->session->userdata('id_user'),
                'created_date' => date('Y-m-d H:i:s'),
			);

            $this->Documents_model->insert($data);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            redirect(site_url('documents')); 
    }
    
    public function update($id) 
    {
        $row = $this->Documents_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('documents/update_action/'.$id),
				'id' => set_value('id', $row->id),
				'tipe_dokumen' => set_value('tipe_dokumen', $row->tipe_dokumen),
				'judul' => set_value('judul', $row->judul),
				'tahun_terbit' => set_value('tahun_terbit', $row->tahun_terbit),
				'bidang_hukum' => set_value('bidang_hukum', $row->bidang_hukum),
				'link' => set_value('link', $row->link),
			);
            $this->template->load('layout/masters','documents/documents_form', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('documents'));
        }
    }
    
    public function update_action($id) 
    { 
        $data = array( 
			'tipe_dokumen' => $this->input->post('tipe_dokumen',TRUE),
			'judul' => $this->input->post('judul',TRUE),
			'tahun_terbit' => $this->input->post('tahun_terbit',TRUE),
			'bidang_hukum' => $this->input->post('bidang_hukum',TRUE),
			'link' => $this->input->post('link',TRUE),
		);

        $this->Documents_model->update($id, $data);
        $this->session->set_flashdata('success', 'Berhasil Edit Data');
        redirect(site_url('documents')); 
    }
    
    public function delete($id) 
    {
        $row = $this->Documents_model->get_by_id($id);

        if ($row) {
            $this->Documents_model->delete($id);
            $this->session->set_flashdata('success', 'Berhasil Hapus Data');
            redirect(site_url('documents'));
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('documents'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('tipe_dokumen', 'tipe dokumen', 'trim|required');
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('tahun_terbit', 'tahun terbit', 'trim|required');
		$this->form_validation->set_rules('bidang_hukum', 'bidang hukum', 'trim|required');
		$this->form_validation->set_rules('link', 'link', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Documents.php */
/* Location: ./application/controllers/Documents.php */
/* Please DO NOT modify this information : */
/* Generated by CRUDV2 Generator For AdminLTE Template 2024-11-15 04:48:42 */