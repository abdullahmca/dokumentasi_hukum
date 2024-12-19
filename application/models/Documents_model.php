<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents_model extends CI_Model
{

    public $table = 'public.documents';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,tipe_dokumen,judul,tahun_terbit,bidang_hukum,link,qrcode,created_at,created_date');
        $this->datatables->from('public.documents');
        //add this line for join
        //$this->datatables->join('table2', 'public.documents.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('documents/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-success', 'title' => 'Lihat Detail Data'))." 
            ".anchor(site_url('documents/update/$1'),'<i class="fa fa-pencil" aria-hidden="true"></i>', array('class' => 'btn btn-warning', 'title' => 'Ubah Data'))." 
                ".anchor(site_url('documents/delete/$1'),'<i class="fa fa-trash" aria-hidden="true"></i>','class="btn btn-danger hapus" title="Hapus Data"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
       $this->db->like("cast(id as text)", $q);
		$this->db->or_like("cast(id as text)", $q);
        $this->db->or_like("cast(created_at as text)", $q);
        $this->db->or_like("cast(created_date as text)", $q);
		$this->db->or_like("cast(tipe_dokumen as text)", $q);
		$this->db->or_like("cast(judul as text)", $q);
		$this->db->or_like("cast(tahun_terbit as text)", $q);
		$this->db->or_like("cast(bidang_hukum as text)", $q);
		$this->db->or_like("cast(link as text)", $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like("cast(id as text)", $q);
		$this->db->or_like("cast(id as text)", $q);
        $this->db->or_like("cast(created_at as text)", $q);
        $this->db->or_like("cast(created_date as text)", $q);
		$this->db->or_like("cast(tipe_dokumen as text)", $q);
		$this->db->or_like("cast(judul as text)", $q);
		$this->db->or_like("cast(tahun_terbit as text)", $q);
		$this->db->or_like("cast(bidang_hukum as text)", $q);
		$this->db->or_like("cast(link as text)", $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Documents_model.php */
/* Location: ./application/models/Documents_model.php */
/* Please DO NOT modify this information : */
/* Generated by CRUDV2 Generator For AdminLTE Template 2024-11-15 04:48:42 */