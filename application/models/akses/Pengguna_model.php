<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{

    private $table = 'ha_pengguna';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select('ha_akses.akses, ha_pengguna.*');
        $this->db->order_by("nama", "ASC");
        $this->db->join("ha_akses", "ha_pengguna.id_akses = ha_akses.id", 'left');

        $query = $this->db->get($this->table);

        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $this->db->where('ha_pengguna.id', $id);
        $this->db->join("ha_akses", "ha_pengguna.id_akses = ha_akses.id", 'left');

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
            'password' => md5($this->input->post('password')),
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
            'nama' => '',
            'jenis_kelamin' => '',
            'telepon' => '',
            'email' => '',
            'foto' => '../profile.gif',
            'id_akses' => ''
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
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'id_akses' => $this->input->post('id_akses'),
        );

        //UPLOAD IMAGE
        if ($this->input->post('foto_label')) {
            $data['foto'] = $this->id() . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $this->upload->initialize($config_upload);
            $this->upload->do_upload('foto');
        }

        //INSERT DATA
        $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $config_upload = array(
            'upload_path' => './assets/img/upload/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'overwrite' => TRUE,
            'file_name' => $id
        );
        if ($this->input->post('password') == "") {
            $password = $this->get_by_id($id)['password'];
        } else {
            $password = md5($this->input->post('password'));
        }

        $data = array(
            'id' => $id,
            'username' => $this->input->post('username'),
            'password' => $password,
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'id_akses' => $this->input->post('id_akses'),
        );

        //UPDATE IMAGE
        if ($this->input->post('foto_label')) {
            $data['foto'] = $id . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            array_map('unlink', glob(FCPATH . 'assets/img/upload/' . $id . "*"));
            $this->upload->initialize($config_upload);
            $this->upload->do_upload('foto');
        }

        //UPDATE DATA
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function update_password($id)
    {
        $data = array(
            'password' => md5($this->input->post('password')),
        );

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
        $kode = 'AD';

        return $kode . str_pad($id, 5, '0', STR_PAD_LEFT);
    }
}
