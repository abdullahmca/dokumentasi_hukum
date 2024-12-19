<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document_type extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Document_type_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
        $this->load->helper('url');
    }

    public function index()
    {
        $data = array(
            'document_type_data' => $this->Document_type_model->get_all(),
        );
        $this->template->load('layout/masters','document_type/document_type_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Document_type_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'name' => $row->name,
				'singkatan' => $row->singkatan,
				'parent_id' => $row->parent_id,
				'status' => $row->status,
				'integrasi' => $row->integrasi,
			);
            $this->template->load('layout/masters','document_type/document_type_read', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('document_type'));
        }
    }

    public function create() 
    {
        $data = array(
            'document_type_data' => $this->Document_type_model->get_all(), 
            'button' => 'Tambah',
            'action' => site_url('document_type/create_action'),
			'id' => set_value('id'),
			'name' => set_value('name'),
			'singkatan' => set_value('singkatan'),
			'parent_id' => set_value('parent_id'),
			'status' => set_value('status'),
			'integrasi' => set_value('integrasi'),
		);
        $this->template->load('layout/masters','document_type/document_type_form', $data);
    }
    
    public function create_action() 
    { 
        $data = array( 
			'name' => $this->input->post('name',TRUE),
			'singkatan' => $this->input->post('singkatan',TRUE),
			'parent_id' => $this->input->post('parent_id',TRUE),
			'status' => $this->input->post('status',TRUE),
			'integrasi' => $this->input->post('integrasi',TRUE),
		);

        $this->Document_type_model->insert($data);
        $this->session->set_flashdata('success', 'Berhasil Tambah Data');
        redirect(site_url('document_type')); 
    }
    
    public function update($id) 
    {
        $row = $this->Document_type_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('document_type/update_action'),
				'id' => set_value('id', $row->id),
				'name' => set_value('name', $row->name),
				'singkatan' => set_value('singkatan', $row->singkatan),
				'parent_id' => set_value('parent_id', $row->parent_id),
				'status' => set_value('status', $row->status),
				'integrasi' => set_value('integrasi', $row->integrasi),
			);
            $this->template->load('layout/masters','document_type/document_type_form', $data);
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('document_type'));
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
				'name' => $this->input->post('name',TRUE),
				'singkatan' => $this->input->post('singkatan',TRUE),
				'parent_id' => $this->input->post('parent_id',TRUE),
				'status' => $this->input->post('status',TRUE),
				'integrasi' => $this->input->post('integrasi',TRUE),
			);

            $this->Document_type_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('success', 'Berhasil Edit Data');
            redirect(site_url('document_type'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Document_type_model->get_by_id($id);

        if ($row) {
            $this->Document_type_model->delete($id);
            $this->session->set_flashdata('success', 'Berhasil Hapus Data');
            redirect(site_url('document_type'));
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
            redirect(site_url('document_type'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('singkatan', 'singkatan', 'trim|required');
		$this->form_validation->set_rules('parent_id', 'parent id', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('integrasi', 'integrasi', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "public.document_type.xls";
        $judul = "public.document_type";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Singkatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Parent Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Integrasi");

	foreach ($this->Document_type_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->singkatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->parent_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->integrasi);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Document_type.php */
/* Location: ./application/controllers/Document_type.php */
/* Please DO NOT modify this information : */
/* Generated by CRUDV2 Generator For AdminLTE Template 2024-12-02 05:19:34 */