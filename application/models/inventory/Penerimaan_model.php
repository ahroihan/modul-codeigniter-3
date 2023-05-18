<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerimaan_model extends CI_Model
{

    protected $table = "inv_penerimaan";

    public function get_all()
    {
        $this->db->select("tanggal, inv_aset.material_desc as aset, jumlah, inv_purchasing.id, status");
        $this->db->from($this->table);
        $this->db->join("inv_aset", "inv_aset.id = " . $this->table . ".aset");
        $sql = $this->db->get();

        return $sql->result_array();
    }

    public function insert($id)
    {
        $tanggal = date('Y-m-d');
        $data = array(
            'id' => $this->id(),
            'purchase' => $id,
            'tanggal' => $tanggal,
        );
        $this->db->insert($this->table, $data);
        $this->Purchasing_model->update_status($id);
        $aset = $this->Purchasing_model->get_by_id($id)['aset'];
        $jumlah = $this->Purchasing_model->get_by_id($id)['jumlah'];
        $this->Aset_model->add_stok($aset, $jumlah);
    }

    private function id()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);

        $query  = $this->db->get($this->table);
        $row = $query->row_array();
        $id = substr($row['id'], 2) + 1;
        $kode = 'PN';

        return $kode . str_pad($id, 5, '0', STR_PAD_LEFT);
    }

    private function id_detail()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);

        $query  = $this->db->get($this->table . "_detail");
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
        $this->db->where('id', $id);

        $query = $this->db->get($this->table);

        return $query->row_array();
    }

    public function get_detail($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get($this->table);

        return $query->row_array();
    }

    // public function get_permintaan_detail($id)
    // {
    //     $this->db->select("inv_aset.id as aset, inv_aset.material_desc as aset_merk, inv_aset.base_unit as aset_type, permintaan_detail.jumlah");
    //     $this->db->from($this->table . "_detail");
    //     $this->db->join($this->table, $this->table . ".id = " . $this->table . "_detail." . $this->table, "left");
    //     $this->db->join("inv_aset", $this->table . "_detail.aset = inv_aset.id", "left");
    //     $this->db->where($this->table, $id);
    //     $this->db->where(array($this->table . "_detail.permintaan" => $id, $this->table . "_detail.hapus" => 0, $this->table . ".status" => 1));
    //     $query = $this->db->get();

    //     return $query->result_array();
    // }

    public function get_penerimaan($id = null)
    {
        $this->db->select("inv_permintaan_detail.id, inv_permintaan.tanggal, inv_aset.id as aset, inv_aset.material_desc, inv_aset.base_unit, inv_permintaan_detail.jumlah");
        $this->db->from("inv_permintaan_detail");
        $this->db->join("inv_permintaan", "inv_permintaan.id = inv_permintaan_detail.permintaan", "left");
        $this->db->join("inv_aset", "inv_permintaan_detail.aset = inv_aset.id", "left");
        if ($id) {
            $this->db->where(array("inv_permintaan_detail.hapus" => 0, "inv_permintaan.status" => 1, "inv_permintaan_detail.id" => $id));
        } else {
            $this->db->where(array("inv_permintaan_detail.hapus" => 0, "inv_permintaan.status" => 1));
        }
        $this->db->order_by("inv_permintaan.tanggal", "desc");
        $this->db->limit(10, 0);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function update($id)
    {
        $aset = $this->input->post('aset');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'id' => $id,
            'aset' => $aset,
            'tanggal' => $tanggal,
            'jumlah'    => $jumlah,
            'status' => 0
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

    public function report()
    {
        if ($this->input->post('tanggal')) {
            $date1 = substr($this->input->post('tanggal'), 0, 10);
            $date2 = substr($this->input->post('tanggal'), -10);
            $this->session->set_userdata(array('tanggal_penerimaan' => $this->input->post('tanggal')));
        } else {
            $date1 = date('Y-m-01');
            $date2 = date('Y-m-d');
        }


        if ($date1 && $date2) {
            $this->db->select($this->table . ".*, inv_purchasing.aset, inv_purchasing.jumlah, inv_purchasing.tanggal as tanggal_beli, inv_aset.material_desc as barang, inv_aset.base_unit");
            $this->db->from($this->table);
            $this->db->join("inv_purchasing", "inv_purchasing.id = " . $this->table . ".purchase");
            $this->db->join("inv_aset", "inv_purchasing.aset = inv_aset.id", "left");
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
