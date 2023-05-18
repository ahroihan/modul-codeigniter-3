<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Aset_model extends CI_Model
{

    private $table = 'inv_aset';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        //$query = $this->db->get($this->table);
        $this->db->select($this->table . '.*, inv_lokasi.desc_storage');
        $this->db->from($this->table);
        $this->db->join("inv_lokasi", "inv_lokasi.id = " . $this->table . ".id_lokasi", "left");
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $this->db->select($this->table . '.*, inv_lokasi.desc_storage');
        $this->db->where($this->table . '.id', $id);

        // $query = $this->db->get($this->table);
        $this->db->from($this->table);
        $this->db->join("inv_lokasi", "inv_lokasi.id = " . $this->table . ".id_lokasi", "left");
        $query = $this->db->get();

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
        // $this->db->where('id', $id);

        // $query = $this->db->get($this->table);
        $this->db->select($this->table . '.*, inv_lokasi.desc_storage');
        $this->db->where($this->table . '.id', $id);
        $this->db->from($this->table);
        $this->db->join("inv_lokasi", "inv_lokasi.id = " . $this->table . ".id_lokasi", "left");
        $query = $this->db->get();

        return $query->row_array();
    }

    public function count()
    {
        $this->db->from($this->table);

        return $this->db->count_all_results();
    }

    public function aset()
    {
        $data = array(
            'id' => '',
            'plant' => '',
            'material' => '',
            'material_desc' => '',
            'base_unit' => '',
            'base' => '',
            'correct' => '',
            'stock' => '',
            'picture' => '../box.png',
            'id_lokasi' => '',
        );

        return $data;
    }

    public function insert()
    {
        $config_upload = array(
            'upload_path' => './assets/img/upload/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'overwrite' => TRUE,
            'file_name' => $this->id()
        );

        $data = array(
            'id' => $this->id(),
            'material' => $this->input->post('material'),
            'material_desc' => strtoupper($this->input->post('material_desc')),
            'base_unit' => $this->input->post('base_unit'),
            'base' => $this->input->post('base'),
            'correct' => $this->input->post('correct'),
            'stock' => $this->input->post('stock'),
            'id_lokasi' => $this->input->post('id_lokasi')
        );

        //UPLOAD IMAGE
        if ($this->input->post('picture')) {
            $data['picture'] = $this->id() . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $this->upload->initialize($config_upload);
            $this->upload->do_upload('foto');
        }

        //INSERT DATA
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data = array())
    {
        $config_upload = array(
            'upload_path' => './assets/img/upload/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'overwrite' => TRUE,
            'file_name' => $id
        );

        $data = array(
            'id' => $id,
            'material' => $this->input->post('material'),
            'material_desc' => strtoupper($this->input->post('material_desc')),
            'base_unit' => $this->input->post('base_unit'),
            'base' => $this->input->post('base'),
            'correct' => $this->input->post('correct'),
            'stock' => $this->input->post('stock'),
            'id_lokasi' => $this->input->post('id_lokasi')
        );

        //UPDATE IMAGE
        if ($this->input->post('picture')) {
            $data['picture'] = $id . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            array_map('unlink', glob(FCPATH . 'assets/img/upload/' . $id . "*"));
            $this->upload->initialize($config_upload);
            $this->upload->do_upload('foto');
        }

        //UPDATE DATA
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        //DELETE IMAGE
        array_map('unlink', glob(FCPATH . 'assets/img/upload/' . $id . "*"));

        //DELETE DATA
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    public function add_stok($id, $stok)
    {
        $this->db->set('stock', 'stock + ' . $stok, FALSE);
        $this->db->where('id', $id);
        $this->db->update($this->table);
    }

    public function delete_stok($id, $stok)
    {
        $this->db->set('stock', 'stock - ' . $stok, FALSE);
        $this->db->where('id', $id);
        $this->db->update($this->table);
    }

    private function id()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);

        $query    = $this->db->get($this->table);
        $row = $query->row_array();
        $id = substr($row['id'], 2) + 1;
        $kode = 'AB';

        return $kode . str_pad($id, 5, '0', STR_PAD_LEFT);
    }

    public function stock()
    {
        $this->db->select("id, base, material_desc as barang, base_unit as unit, stock");
        $this->db->from($this->table);
        $sql = $this->db->get();
        return $sql->result_array();
    }
}
