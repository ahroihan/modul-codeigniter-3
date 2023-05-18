<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produksi_model extends CI_Model
{

    protected $table = "inv_produksi";

    public function get_all()
    {
        $this->db->select($this->table . ".*, inv_aset.material_desc");
        $this->db->from($this->table);
        $this->db->join("inv_aset", "inv_aset.id = " . $this->table . ".aset");
        $sql = $this->db->get();

        return $sql->result_array();
    }

    public function produksi()
    {
        $data = array(
            'id' => '',
            'aset' => '',
            'jumlah' => '',
            'tanggal' => date('Y-m-d'),
            'tanggal_expired' => date('Y-m-d'),
            'status' => ''
        );

        return $data;
    }

    public function insert()
    {
        $aset = $this->input->post('aset');
        $jumlah = $this->input->post('jumlah');
        $tanggal = date('Y-m-d'); //$this->input->post('tanggal');
        $tanggal_expired = $this->input->post('tanggal_expired');
        $data = array(
            'id' => $this->id(),
            'aset' => $aset,
            'jumlah'    => $jumlah,
            'tanggal' => $tanggal,
            'tanggal_expired' => $tanggal_expired,
            'status' => '0'
        );

        $this->db->insert($this->table, $data);
    }

    private function id()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);

        $query    = $this->db->get($this->table);
        $row = $query->row_array();
        $id = substr($row['id'], 2) + 1;
        $kode = 'PS';

        return $kode . str_pad($id, 5, '0', STR_PAD_LEFT);
    }

    private function id_detail()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);

        $query    = $this->db->get($this->table . "_detail");
        $row = $query->row_array();
        $id = $row['id'] + 1;

        return str_pad($id, 7, '0', STR_PAD_LEFT);
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }

    public function get_by_id($id)
    {
        $this->db->select($this->table . ".*, inv_aset.material_desc, inv_aset.stock");
        $this->db->from($this->table);
        $this->db->join("inv_aset", "inv_aset.id = " . $this->table . ".aset");
        $this->db->where($this->table . ".id", $id);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_detail($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get($this->table);

        return $query->row_array();
    }

    public function get_permintaan_detail($id)
    {
        $this->db->select("inv_aset.id as aset, inv_aset.material_desc as aset_merk, inv_aset.base_unit as aset_type, permintaan_detail.jumlah");
        $this->db->from($this->table . "_detail");
        $this->db->join($this->table, $this->table . ".id = " . $this->table . "_detail." . $this->table);
        $this->db->join("inv_aset", $this->table . "_detail.aset = inv_aset.id");
        $this->db->where($this->table, $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function update($id)
    {
        $aset = $this->input->post('aset');
        $jumlah = $this->input->post('jumlah');
        $tanggal = date('Y-m-d'); //$this->input->post('tanggal');
        $tanggal_expired = $this->input->post('tanggal_expired');
        $data = array(
            'id' => $id,
            'aset' => $aset,
            'jumlah'    => $jumlah,
            'tanggal' => $tanggal,
            'tanggal_expired' => $tanggal_expired,
            'status' => '0'
        );

        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function update_status($id)
    {
        $data = array(
            'status' => 1
        );

        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function get_all_fg()
    {
        $this->db->select($this->table . ".*, inv_aset.material_desc");
        $this->db->from($this->table);
        $this->db->join("inv_aset", "inv_aset.id = " . $this->table . ".aset");
        $sql = $this->db->get();

        return $sql->result_array();
    }

    public function insert_fg($id)
    {
        $this->update_status($id);
        $aset = $this->get_by_id($id)['aset'];
        $jumlah = $this->get_by_id($id)['jumlah'];
        $this->Aset_model->add_stok($aset, $jumlah);
    }

    public function report()
    {
        if ($this->input->post('tanggal')) {
            $date1 = substr($this->input->post('tanggal'), 0, 10);
            $date2 = substr($this->input->post('tanggal'), -10);
            $this->session->set_userdata(array('tanggal_produksi' => $this->input->post('tanggal')));
        } else {
            $date1 = date('Y-m-01');
            $date2 = date('Y-m-d');
        }


        if ($date1 && $date2) {
            $this->db->select($this->table . ".*, inv_aset.material_desc, inv_aset.base_unit");
            $this->db->from($this->table);
            $this->db->join("inv_aset", "inv_aset.id = " . $this->table . ".aset", "left");
            $this->db->where($this->table . '.tanggal >=', $date1);
            $this->db->where($this->table . '.tanggal <=', $date2);

            $this->db->order_by($this->table . ".tanggal", "DESC");

            $data = $this->db->get();
            if ($data->num_rows() > 0) {
                return $data->result_array();
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
}
