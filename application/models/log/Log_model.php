<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Log_model extends CI_Model
{

    private $table = 'log_activity';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $query = $this->db->get($this->table);

        return $query->result_array();
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

    public function activity()
    {
        $data = array(
            'id' => '',
            'id_pengguna' => '',
            'akses_page' => '',
            'from_page' => '',
            'ip_address' => '',
            'datetime' => '',
            'keterangan' => ''
        );

        return $data;
    }

    public function insert($id_pengguna, $akses_page, $from_page, $ip_address, $datetime, $keterangan)
    {
        $data = array(
            'id_pengguna' => $id_pengguna,
            'akses_page' => $akses_page,
            'from_page' => $from_page,
            'ip_address' => $ip_address,
            'datetime' => $datetime,
            'keterangan' => $keterangan
        );

        //INSERT DATA
        $this->db->insert($this->table, $data);
    }

    // public function update($id, $data = array())
    // {
    //     $data = array(
    //         'id' => $id,
    //         'id_pengguna' => $this->input->post('id_pengguna'),
    //         'akses_page' => $this->input->post('akses_page'),
    //         'from_page' => $this->input->post('from_page'),
    //         'ip_address' => $this->input->post('ip_address'),
    //         'datetime' => $this->input->post('datetime'),
    //         'keterangan' => $this->input->post('keterangan')
    //     );

    //     //UPDATE DATA
    //     $this->db->where('id', $id);
    //     $this->db->update($this->table, $data);
    // }

    public function delete($id)
    {
        //DELETE DATA
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
