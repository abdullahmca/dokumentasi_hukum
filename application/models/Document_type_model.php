<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document_type_model extends CI_Model
{

    public $table = 'public.document_type';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,name,singkatan,parent_id,status,integrasi');
        $this->datatables->from('public.document_type');
        //add this line for join
        //$this->datatables->join('table2', 'public.document_type.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('document_type/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-success', 'title' => 'Lihat Detail Data'))." 
            ".anchor(site_url('document_type/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-warning', 'title' => 'Ubah Data'))." 
                ".anchor(site_url('document_type/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger hapus" title="Hapus Data"'), 'id');
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
		$this->db->or_like("cast(name as text)", $q);
		$this->db->or_like("cast(singkatan as text)", $q);
		$this->db->or_like("cast(parent_id as text)", $q);
		$this->db->or_like("cast(status as text)", $q);
		$this->db->or_like("cast(integrasi as text)", $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like("cast(id as text)", $q);
		$this->db->or_like("cast(id as text)", $q);
		$this->db->or_like("cast(name as text)", $q);
		$this->db->or_like("cast(singkatan as text)", $q);
		$this->db->or_like("cast(parent_id as text)", $q);
		$this->db->or_like("cast(status as text)", $q);
		$this->db->or_like("cast(integrasi as text)", $q);
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

/* End of file Document_type_model.php */
/* Location: ./application/models/Document_type_model.php */
/* Please DO NOT modify this information : */
/* Generated by CRUDV2 Generator For AdminLTE Template 2024-12-02 05:19:34 */