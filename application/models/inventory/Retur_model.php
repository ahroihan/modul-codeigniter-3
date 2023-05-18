<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Retur_model extends CI_Model
{

    protected $table = "inv_return";

    public function get_all()
    {
        $this->db->select($this->table . ".*, inv_aset.id as asetid, inv_aset.material_desc as aset, " . $this->table . ".jumlah as jrt");
        $this->db->from($this->table);
        $this->db->join("inv_permintaan_detail", "inv_return.permintaan_detail = inv_permintaan_detail.id", "left");
        $this->db->join("inv_aset", "inv_aset.id = inv_permintaan_detail.aset");
        $sql = $this->db->get();
        return $sql->result_array();
    }

    public function returned()
    {
        $data = array(
            'id' => '',
            'permintaan_detail' => '',
            'jumlah' => '',
            'tanggal' => date('Y-m-d'),
            'keterangan' => '',
        );

        return $data;
    }

    public function insert()
    {
        $pc = explode("/", $this->input->post('permintaan_detail'));
        $jumlah_po = $this->input->post('jumlah_po');
        $jumlah = $this->input->post('jumlah');
        $aset = end($pc);

        $data = array(
            'id' => $this->id(),
            'permintaan_detail' => $aset,
            'tanggal' => $this->input->post('tanggal') . ' ' . date('H:i:s'),
            'jumlah' => $jumlah,
            'keterangan' => $this->input->post('keterangan')
        );

        $this->db->insert($this->table, $data);

        // $this->db->set('stock', 'stock -' . $jumlah, FALSE);
        // $this->db->where('id', $aset);
        // $this->db->update("inv_aset");
        // $return = $this->db->get_where($this->table, array('id' => $id))->row();
        $this->db->select($this->table . ".*, inv_permintaan_detail.aset");
        $this->db->from($this->table);
        $this->db->join("inv_permintaan_detail", "inv_return.permintaan_detail = inv_permintaan_detail.id", "left");
        $this->db->where(array('inv_permintaan_detail.id' => $aset));
        $return = $this->db->get()->row_array();
        $this->Aset_model->add_stok($return['aset'], $jumlah);
    }

    public function update($id)
    {
        $pc = explode("/", $this->input->post('permintaan_detail'));
        $jumlah = $this->input->post('jumlah');
        $aset = end($pc);

        // $return = $this->db->get_where($this->table, array('permintaan_detail' => $id))->row();
        $this->db->select($this->table . ".*, inv_permintaan_detail.aset, inv_permintaan_detail.jumlah as jminta");
        $this->db->from($this->table);
        $this->db->join("inv_permintaan_detail", "inv_return.permintaan_detail = inv_permintaan_detail.id", "left");
        $this->db->where(array('inv_permintaan_detail.id' => $aset));
        $return = $this->db->get()->row_array();
        // print_r($return);
        // exit(0);
        if ($return['jminta'] < $jumlah) {
            echo "error";
        } else {
            if ($jumlah < $return['jumlah']) {
                $stock_tambahan = $return['jumlah'] - $jumlah;
                $this->Aset_model->delete_stok($return['aset'], $stock_tambahan);
            } else {
                $stock_tambahan = $jumlah - $return['jumlah'];
                $this->Aset_model->add_stok($return['aset'], $stock_tambahan);
            }
            $data = array(
                'permintaan_detail' => $aset,
                'tanggal' => $this->input->post('tanggal') . ' ' . date('H:i:s'),
                'jumlah' => $jumlah,
                'keterangan' => $this->input->post('keterangan')
            );

            $this->db->where('id', $id);
            $this->db->update($this->table, $data);
        }
    }

    public function delete($id)
    {
        $this->db->select($this->table . ".*, inv_permintaan_detail.aset");
        $this->db->from($this->table);
        $this->db->join("inv_permintaan_detail", "inv_return.permintaan_detail = inv_permintaan_detail.id", "left");
        $this->db->where(array('inv_return.id' => $id));
        $return = $this->db->get()->row_array();
        $this->Aset_model->delete_stok($return['aset'], $return['jumlah']);
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
        $kode = 'RT';

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

    public function get_by_id($id)
    {
        $this->db->select($this->table . ".*, inv_aset.id as aset, inv_aset.material_desc, inv_aset.stock, inv_permintaan_detail.jumlah as jminta");
        $this->db->from($this->table);
        $this->db->join("inv_permintaan_detail", "inv_return.permintaan_detail = inv_permintaan_detail.id", "left");
        $this->db->join("inv_aset", "inv_aset.id = inv_permintaan_detail.aset", "left");
        $this->db->where($this->table . '.id', $id);
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
        $this->db->join("inv_aset", $this->table . "_detail.aset = aset.id");
        $this->db->where($this->table, $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_pemakaian()
    {
        $this->db->select("inv_permintaan_detail.id, inv_permintaan.tanggal, inv_return.id as idrt, inv_aset.id as asetid, inv_aset.material_desc, inv_permintaan_detail.jumlah, inv_return.jumlah as jrt, inv_return.keterangan");
        $this->db->from("inv_permintaan_detail");
        $this->db->join("inv_permintaan", "inv_permintaan.id = inv_permintaan_detail.permintaan", "left");
        $this->db->join("inv_aset", "inv_permintaan_detail.aset = inv_aset.id", "left");
        $this->db->join("inv_return", "inv_permintaan_detail.id = inv_return.permintaan_detail", "left");
        $this->db->where(array("inv_permintaan_detail.hapus" => 0, "inv_permintaan.status" => 1));
        $this->db->order_by("inv_permintaan.tanggal", "desc");
        // $this->db->limit(10, 0);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function report()
    {
        if ($this->input->post('tanggal')) {
            $date1 = substr($this->input->post('tanggal'), 0, 10);
            $date2 = substr($this->input->post('tanggal'), -10);
            $this->session->set_userdata(array('tanggal_return' => $this->input->post('tanggal')));
        } else {
            $date1 = date('Y-m-01');
            $date2 = date('Y-m-d');
        }

        if ($date1 && $date2) {
            $this->db->select($this->table . ".*, inv_permintaan_detail.id as id_pp, inv_aset.material_desc as aset, inv_permintaan_detail.jumlah as jpp, " . $this->table . ".jumlah as jrt");
            $this->db->from($this->table);
            $this->db->join("inv_permintaan_detail", $this->table . ".permintaan_detail = inv_permintaan_detail.id");
            $this->db->join("inv_aset", "inv_aset.id = inv_permintaan_detail.aset");
            $this->db->where($this->table . '.tanggal >=', $date1);
            $this->db->where($this->table . '.tanggal <=', $date2);

            $this->db->order_by("tanggal", "DESC");

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

    public function report_pemakaian()
    {
        if ($this->input->post('tanggal')) {
            $date1 = substr($this->input->post('tanggal'), 0, 10);
            $date2 = substr($this->input->post('tanggal'), -10);
            $this->session->set_userdata(array('tanggal_pemakaian' => $this->input->post('tanggal')));
        } else {
            $date1 = date('Y-m-01');
            $date2 = date('Y-m-d');
        }

        if ($date1 && $date2) {
            $this->db->select("inv_permintaan_detail.id, inv_permintaan.tanggal, inv_return.id as idrt, inv_aset.id as asetid, inv_aset.material_desc, inv_permintaan_detail.jumlah, inv_return.jumlah as jrt, inv_return.keterangan");
            $this->db->from("inv_permintaan_detail");
            $this->db->join("inv_permintaan", "inv_permintaan.id = inv_permintaan_detail.permintaan", "left");
            $this->db->join("inv_aset", "inv_permintaan_detail.aset = inv_aset.id", "left");
            $this->db->join("inv_return", "inv_permintaan_detail.id = inv_return.permintaan_detail", "left");
            $this->db->where(array("inv_permintaan_detail.hapus" => 0, "inv_permintaan.status" => 1));
            $this->db->where('inv_permintaan.tanggal >=', $date1);
            $this->db->where('inv_permintaan.tanggal <=', $date2);

            $this->db->order_by("inv_permintaan.tanggal", "DESC");

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
