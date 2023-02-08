<?php 
class MUser extends CI_Model
{
    public $table = 'user';
    public $id ='id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    //login
    function login ($username, $password)
    {
        $this->db->from($this->table);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->count_all_results();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function get_key($username)
    {
        $this->db->select('u.username, u.nama_lengkap, k.key');
        $this->db->from('user u');
        $this->db->where('u.username', $username);
        $this->db->join('keys k', 'u.id = k.user_id', 'left');
        return $this->db->get()->row();
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
        return $this->db->insert_id(); // mengambil id terakhir
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