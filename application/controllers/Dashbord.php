<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

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
	public function uu()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='UU'")->result();
        // $db2=$this->load->database('jdih_online', TRUE); 
		$data=array('data_perda'=>$data_perda,'type'=>'uu','tahun'=>date('Y'),'subtitle'=>'Undang-Undang');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function perpres()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='PERPRES'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'uu','tahun'=>date('Y'),'subtitle'=>'Peraturan Presiden');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function perda()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='PERDA'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'perda','tahun'=>date('Y'),'subtitle'=>'Peraturan Daerah');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function perbup()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='UU'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'perbup','tahun'=>date('Y'),'subtitle'=>'Peraturan Bupati');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function kepbup()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='KEPBUP'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'kepbup','tahun'=>date('Y'),'subtitle'=>'Keputusan Bupati');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function monografi()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='MONOGRAFI'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'monografi','tahun'=>date('Y'),'subtitle'=>'Monografi Hukum');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function yurisprudensi()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='YURISPRUDENSI'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'yurisprudensi','tahun'=>date('Y'),'subtitle'=>'Yurisprudensi');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function artikel()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='ARTIKEL'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'artikel','tahun'=>date('Y'),'subtitle'=>'Artikel Hukum');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function bukuhukum()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='BUKUHUKUM'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'bukuhukum','tahun'=>date('Y'),'subtitle'=>'Buku Hukum');
        $this->template->load('layout/master','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function perpustakaan()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='BUKUHUKUM'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'bukuhukum','tahun'=>date('Y'),'subtitle'=>'Buku Hukum');
        $this->template->load('layout/master_pustaka','prokum/perpustakaan', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function putusan()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='PUTUSANHUKUM'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'putusanhukum','tahun'=>date('Y'),'subtitle'=>'Putusan Hukum');
        $this->template->load('layout/master_pustaka','prokum/perda', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function listbuku()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='BUKUHUKUM'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'bukuhukum','tahun'=>date('Y'),'subtitle'=>'Buku Hukum');
        $this->template->load('layout/master_pustaka','prokum/perpustakaan', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function anggota()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id WHERE SINGKATAN ='BUKUHUKUM'")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'bukuhukum','tahun'=>date('Y'),'subtitle'=>'Buku Hukum');
        $this->template->load('layout/master','prokum/anggota', $data);
		// echo "Halaman Perda";
		// print_r($this->session->userdata());
	} 
	public function halaman()
	{ 
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id ")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'admin','tahun'=>date('Y'),'subtitle'=>'Halaman Administrator');
        $this->template->load('layout/master','admin/admin', $data);
		// echo "Halaman Admin";
		// print_r($this->session->userdata());
	}
	public function cari_dokumen_get()
	{
		redirect(site_url(''));
	}
	public function cari_dokumen()
	{ 
		$cari = $this->input->post('cari');
		$data_perda=$this->db->query("SELECT a.*,b.name,b.SINGKATAN FROM PUBLIC.DOCUMENTS a JOIN PUBLIC.DOCUMENT_TYPE b on CAST (a.TIPE_DOKUMEN AS integer)=b.id 
			WHERE a.judul like '%".$cari."%'
			OR a.tahun_terbit like '%".$cari."%'
			OR a.bidang_hukum like '%".$cari."%'
			")->result();
		$data=array('data_perda'=>$data_perda,'type'=>'Dokumen Hukum','tahun'=>date('Y'),'subtitle'=>'Halaman Administrator');
        $this->template->load('layout/master','prokum/perda', $data);
	}
}
