<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Doc_model extends CI_Model
{

    private $table = 'doc_example';

    public function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update($data, $id)
    {
        $this->db->update($this->table, $data, array('id' => $id));
    }
}
