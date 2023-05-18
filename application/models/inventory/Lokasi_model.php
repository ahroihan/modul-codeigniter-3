<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_model extends CI_Model
{

    private $table = 'inv_lokasi';

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
            $rows[$item['id']] = $item['desc_storage'];
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

    public function lokasi()
    {
        $data = array(
            'id' => '',
            'plant' => '',
            'desc_storage' => '',
            'rack' => ''
        );

        return $data;
    }

    public function insert()
    {
        $data = array(
            'id' => $this->id(),
            'plant' => $this->input->post('plant'),
            'desc_storage' => $this->input->post('desc_storage'),
            'rack' => $this->input->post('rack')
        );

        //INSERT DATA
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data = array())
    {
        $data = array(
            'id' => $id,
            'plant' => $this->input->post('plant'),
            'desc_storage' => $this->input->post('desc_storage'),
            'rack' => $this->input->post('rack')
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
    }

    private function id()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);

        $query    = $this->db->get($this->table);
        $row = $query->row_array();
        $id = substr($row['id'], 2) + 1;
        $kode = 'LK';

        return $kode . str_pad($id, 5, '0', STR_PAD_LEFT);
    }

    public function get_all_plant()
    {
        $query = $this->db->get('inv_plant');

        return $query->result_array();
    }

    public function list_all_plant()
    {
        $query = $this->db->get('inv_plant');

        foreach ($query->result_array() as $item) {
            $rows[$item['id']] = $item['plant'];
        }
        return $rows;
    }

    public function get_by_id_plant($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get('inv_plant');

        return $query->row_array();
    }

    public function get_detail_plant($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get('inv_plant');

        return $query->row_array();
    }

    public function plant()
    {
        $data = array(
            'id' => '',
            'plant' => ''
        );

        return $data;
    }

    public function insert_plant()
    {
        $data = array(
            // 'id' => $this->input->post('id'),
            'plant' => $this->input->post('plant')
        );

        //INSERT DATA
        $this->db->insert('inv_plant', $data);
    }

    public function update_plant($id, $data = array())
    {
        $data = array(
            // 'id' => $id,
            'plant' => $this->input->post('plant')
        );

        //UPDATE DATA
        $this->db->where('id', $id);
        $this->db->update('inv_plant', $data);
    }

    public function delete_plant($id)
    {
        //DELETE DATA
        $this->db->where('id', $id);
        $this->db->delete('inv_plant');
    }
}
