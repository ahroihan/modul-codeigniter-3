<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{

    private $table = 'us_pengguna';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->order_by("nama", "ASC");

        $query = $this->db->get($this->table);

        return $query->result_array();
    }

    public function get_by_id($id)
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

    public function login()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
        );

        $query = $this->db->get_where($this->table, $data);

        return $query->row_array();
    }

    public function pengguna()
    {
        $data = array(
            'id' => '',
            'username' => '',
            'password' => '',
            'nama' => ''
        );

        return $data;
    }

    public function insert()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
            'nama' => $this->input->post('nama')
        );

        //INSERT DATA
        $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        if ($this->input->post('password') == "") {
            $password = $this->get_by_id($id)['password'];
        } else {
            $password = sha1($this->input->post('password'));
        }

        $data = array(
            'id' => $id,
            'username' => $this->input->post('username'),
            'password' => $password,
            'nama' => $this->input->post('nama')
        );

        //UPDATE DATA
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function update_password($id)
    {
        $data = array(
            'password' => sha1($this->input->post('password')),
        );

        $this->db->where('id', $id);

        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        //DELETE DATA
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
