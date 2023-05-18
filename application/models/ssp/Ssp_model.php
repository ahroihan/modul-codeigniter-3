<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ssp_model extends CI_Model
{

    private $table = 'ssp_example';
    protected static $column_order = array(null, 'a.id_example', 'e.villages');
    protected static $column_search = array('a.id_example', 'b.provinces', 'c.regencies', 'd.districts', 'e.villages');
    protected static $order = array('a.id_example' => 'desc');

    public function __construct()
    {
        parent::__construct();
    }

    function wilayah($id)
    {
        $this->db->select('*');
        $this->db->join('ssp_villages', 'ssp_villages.id_villages=ssp_example.id_home', 'left');
        $this->db->join('ssp_districts', 'ssp_districts.id_districts=ssp_villages.district_id', 'left');
        $this->db->join('ssp_regencies', 'ssp_regencies.id_regencies=ssp_districts.regency_id', 'left');
        $this->db->join('ssp_provinces', 'ssp_provinces.id_provinces=ssp_regencies.province_id', 'left');
        $this->db->where('id_example', $id);
        $this->db->where('ssp_example.act', '0');
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    function get_all()
    {
        $this->db->select('*');
        $this->db->join('ssp_villages', 'ssp_villages.id_villages=ssp_example.id_home', 'left');
        $this->db->join('ssp_districts', 'ssp_districts.id_districts=ssp_villages.district_id', 'left');
        $this->db->join('ssp_regencies', 'ssp_regencies.id_regencies=ssp_districts.regency_id', 'left');
        $this->db->join('ssp_provinces', 'ssp_provinces.id_provinces=ssp_regencies.province_id', 'left');
        $this->db->order_by('id_example', 'DESC');
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    public function get_by_id($id)
    {
        $this->db->where('id_example', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update($data, $id)
    {
        $this->db->update($this->table, $data, array('id_example' => $id));
    }

    function select_districts()
    {
        $this->db->select('*');
        $this->db->order_by('districts', 'ASC');
        $query = $this->db->get('ssp_districts');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    function select_regencies()
    {
        $this->db->select('*');
        $this->db->order_by('regencies', 'ASC');
        $query = $this->db->get('ssp_regencies');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    function select_provinces()
    {
        $this->db->select('*');
        $this->db->order_by('provinces', 'ASC');
        $query = $this->db->get('ssp_provinces');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    function regencies($id)
    {
        $regencies = "<optgroup label='Pilih Kabupaten/ Kota'><option value='0' disabled selected>Pilih Kabupaten/ Kota</option>";

        $this->db->order_by('regencies', 'ASC');
        $kab = $this->db->get_where('ssp_regencies', array('province_id' => $id));

        foreach ($kab->result_array() as $data) {
            $regencies .= "<option value='$data[id_regencies]'>$data[regencies]</option>";
        }
        $regencies .= "</optgroup>";
        return $regencies;
    }

    function districts($id)
    {
        $districts = "<optgroup label='Pilih Kecamatan'><option value='0' disabled selected>Pilih Kecamatan</option>";

        $this->db->order_by('districts', 'ASC');
        $kec = $this->db->get_where('ssp_districts', array('regency_id' => $id));

        foreach ($kec->result_array() as $data) {
            $districts .= "<option value='$data[id_districts]'>$data[districts]</option>";
        }
        $districts .= "</optgroup>";
        return $districts;
    }

    function villages($id)
    {
        $villages = "<optgroup label='Pilih Kelurahan/ Desa'><option value='0' disabled selected>Pilih Kelurahan/ Desa</option>";

        $this->db->order_by('villages', 'ASC');
        $kel = $this->db->get_where('ssp_villages', array('district_id' => $id));

        foreach ($kel->result_array() as $data) {
            $villages .= "<option value='$data[id_villages]'>$data[villages]</option>";
        }
        $villages .= "</optgroup>";
        return $villages;
    }

    protected static function queryDT($search, $order, $column, $dir, $length, $start, $id)
    {
        if ($id) {
            if ($length) {
                $sql = "SELECT a.*, b.provinces,c.regencies, d.districts, e.villages FROM `ssp_example` a 
                LEFT JOIN `ssp_villages` e ON e.`id_villages`=a.`id_home` 
                LEFT JOIN `ssp_districts` d ON d.`id_districts`=e.`district_id` 
                LEFT JOIN `ssp_regencies` c ON c.`id_regencies`=d.`regency_id` 
                LEFT JOIN `ssp_provinces` b ON b.`id_provinces`=c.`province_id` ";
            } else {
                $sql = "SELECT COUNT('a.id_example') as jml, a.*, b.provinces,c.regencies, d.districts, e.villages FROM `ssp_example` a 
                LEFT JOIN `ssp_villages` e ON e.`id_villages`=a.`id_home` 
                LEFT JOIN `ssp_districts` d ON d.`id_districts`=e.`district_id` 
                LEFT JOIN `ssp_regencies` c ON c.`id_regencies`=d.`regency_id` 
                LEFT JOIN `ssp_provinces` b ON b.`id_provinces`=c.`province_id` ";
            }
            $sql .= " WHERE a.id_example =  '" . $id . "' AND a.`act` = '0' ";
        } else {
            if ($length) {
                $sql = "SELECT a.*, b.provinces,c.regencies, d.districts, e.villages FROM `ssp_example` a 
                LEFT JOIN `ssp_villages` e ON e.`id_villages`=a.`id_home` 
                LEFT JOIN `ssp_districts` d ON d.`id_districts`=e.`district_id` 
                LEFT JOIN `ssp_regencies` c ON c.`id_regencies`=d.`regency_id` 
                LEFT JOIN `ssp_provinces` b ON b.`id_provinces`=c.`province_id` ";
            } else {
                $sql = "SELECT COUNT('a.id_example') as jml,a.*, b.provinces,c.regencies, d.districts, e.villages FROM `ssp_example` a 
                LEFT JOIN `ssp_villages` e ON e.`id_villages`=a.`id_home` 
                LEFT JOIN `ssp_districts` d ON d.`id_districts`=e.`district_id` 
                LEFT JOIN `ssp_regencies` c ON c.`id_regencies`=d.`regency_id` 
                LEFT JOIN `ssp_provinces` b ON b.`id_provinces`=c.`province_id` ";
            }
            $sql .= " WHERE a.`act` = '0' ";
        }


        $i = 0;

        foreach (self::$column_search as $item) // looping awal
        {
            if ($search) {
                if ($i === 0) {
                    //$this->db->group_start(); 
                    //$this->db->like($item, $search);
                    // if (isset($id)) {
                    $sql .= " AND (" . $item . " LIKE '%" . $search . "%'";
                    // } else {
                    // $sql .= " WHERE (" . $item . " LIKE '%" . $search . "%'";
                    // }
                } else {
                    //$this->db->or_like($item, $search);
                    $sql .= " OR " . $item . " LIKE '%" . $search . "%'";
                }

                if (count(self::$column_search) - 1 == $i) {
                    //$this->db->group_end(); 
                    $sql .= " ) ";
                }
            }
            $i++;
        }

        if ($order) {
            $sql .= " ORDER BY " . self::$column_order[$column] . " " . $dir;
            //$this->db->order_by(self::$column_order[$column], $dir);
        } else if (isset(self::$order)) {
            $order = self::$order;
            //$this->db->order_by(key($order), $order[key($order)]);
            $sql .= " ORDER BY " . key($order) . " " . $order[key($order)];
        }
        if ($length) {
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        return $sql;
    }

    public function get_datatables($length, $start, $search, $order, $column, $dir)
    {
        $sql = self::queryDT($search, $order, $column, $dir, $length, $start, $id = null);
        $return = $this->db->query($sql);
        return $return->result_array();
        // $query = $this->db->get($this->table);
        // return $query->row_array();
    }

    public function count_filtered($search, $order, $column, $dir)
    {
        $sql = self::queryDT($search, $order, $column, $dir, $length = null, $start = null, $id = null);
        // $return = model_ssp::find_by_sql($sql);
        // return $return;
        $return = $this->db->query($sql);
        return $return->result_array();
    }

    public function count()
    {
        $this->db->from($this->table);

        return $this->db->count_all_results();
    }
}
