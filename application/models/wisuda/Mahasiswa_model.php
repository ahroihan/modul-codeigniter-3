<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{

    private $table = 'wis_mahasiswa';

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

    public function mahasiswa()
    {
        $data = array(
            'id' => '',
            'nim' => '',
            'nama' => '',
            'ttl' => '',
            'prodi' => '',
            'fakultas' => '',
            'telepon' => '',
            'email' => '',
            'nama_ayah' => '',
            'nama_ibu' => '',
            'tanggal_yudisium' => '',
            'ipk' => '',
            'judul_skripsi' => '',
            'foto' => '',
            'status_bayar' => '',
            'alamat' => ''
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
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'prodi' => $this->input->post('prodi'),
            'fakultas' => $this->input->post('fakultas'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tanggal_yudisium' => $this->input->post('tanggal_yudisium'),
            'ipk' => $this->input->post('ipk'),
            'judul_skripsi' => $this->input->post('judul_skripsi'),
            'status_bayar' => $this->input->post('status_bayar'),
            'alamat' => $this->input->post('alamat'),
        );

        //UPLOAD IMAGE
        if ($this->input->post('fotonya')) {
            $data['foto'] = $this->id() . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
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
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'prodi' => $this->input->post('prodi'),
            'fakultas' => $this->input->post('fakultas'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tanggal_yudisium' => $this->input->post('tanggal_yudisium'),
            'ipk' => $this->input->post('ipk'),
            'judul_skripsi' => $this->input->post('judul_skripsi'),
            'status_bayar' => $this->input->post('status_bayar'),
            'alamat' => $this->input->post('alamat'),
        );

        //UPDATE IMAGE
        if ($this->input->post('fotonya')) {
            $data['foto'] = $id . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
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

    public function annually()
    {
        $sql = $this->db->query("SELECT prodi, COUNT(DISTINCT prodi) AS jml FROM " . $this->table . " WHERE YEAR(tanggal_yudisium)=YEAR(CURDATE()) GROUP BY prodi");
        return $sql->result_array();
    }
}
