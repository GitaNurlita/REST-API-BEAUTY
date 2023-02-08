<?php 
class MBarang extends CI_Model
{
    public $table = 'barang';
    public $id ='id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    //get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->select('barang.*,supplier.nama_supplier');
        $this->db->join('supplier','supplier.id=barang.id_supplier','left');
        return $this->db->get($this->table)->result();
    }

    //get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    //get total rows
    function total_rows()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    //insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    //update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    //delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
?>