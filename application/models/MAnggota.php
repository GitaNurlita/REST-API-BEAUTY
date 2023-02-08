<?php
class MAnggota extends CI_Model
{
    public $table = 'anggota';
    public $name = 'nama';
    public $no_anggota ='no_anggota';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->order_by($this->no_anggota, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_by_id($id)
    {
        $this->db->where($this->no_anggota, $id);
        return $this->db->get($this->table)->row();
    }

    public function get_by_nama($nama)
    {
        $this->db->like($this->name, $nama);
        return $this->db->get($this->table)->row();
    }

    public function total_rows()
    {
        $this->db->from($this->table);
        return $this->db->count_all_restult();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($no_anggota, $data)
    {
        $this->db->where($this->no_anggota, $no_anggota);
        $this->db->update($this->table, $data);
    }
    
    public function delete($no_anggota)
    {
        $this->db->where($this->no_anggota, $no_anggota);
        $this->db->delete($this->table);
    }

}
