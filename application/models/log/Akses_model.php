<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akses_model extends CI_Model
{

    private $table = 'log_akses';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $query = $this->db->get($this->table);

        return $query->result_array();
    }

    public function list_all()
    {
        $query = $this->db->get($this->table);

        foreach ($query->result_array() as $item) {
            $rows[$item['id']] = $item['akses'];
        }
        return $rows;
    }

    public function get_by_id($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get($this->table);

        return $query->row_array();
    }

    public function get_by_return($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get($this->table);

        return $query->result_array();
    }

    public function get_detail($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get($this->table);

        return $query->row_array();
    }

    public function count()
    {
        $this->db->from($this->table);

        return $this->db->count_all_results();
    }

    public function akses()
    {
        $data = array(
            'id' => '',
            'akses' => '',
            'akses_page' => '',
            'keterangan' => ''
        );

        return $data;
    }

    public function insert()
    {
        $data = array(
            'akses' => $this->input->post('akses'),
            'akses_page' => $this->input->post('akses_page'),
            'keterangan' => $this->input->post('keterangan')
        );

        //INSERT DATA
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data = array())
    {
        $data = array(
            'id' => $id,
            'akses' => $this->input->post('akses'),
            'akses_page' => $this->input->post('akses_page'),
            'keterangan' => $this->input->post('keterangan')
        );

        //UPDATE DATA
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        //DELETE DATA
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        $data = array(
            'id_akses' => 0
        );

        //UPDATE DATA
        $this->db->where('id_akses', $id);
        $this->db->update('log_pengguna', $data);
    }
}
