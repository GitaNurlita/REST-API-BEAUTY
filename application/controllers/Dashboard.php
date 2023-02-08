<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        //Construct the parent class
        parent::__construct();
        $this->load->model('MBarang');
        $this->load->model('MSupplier');
        $this->load->model('MUsers');
    }
	public function index()
	{
        if($this->session->userdata('is_login')){
            echo "<script>window.location.href='".base_url()."index.php/dashboard/barang'</script>";   
        }
        $this->load->view('dashboard/login');
	}
    public function validasi(){
        $username=$this->input->post("username");
        $password=$this->input->post("password");
        if ($username=="admin" && $password=="admin1"){
            $this->session->set_userdata(array('is_login'=>true));
            echo "<script>window.location.href='".base_url()."index.php/dashboard/barang'</script>";
        }
        else{
            echo "<script>alert('Password salah');window.location.href='".base_url()."index.php/dashboard';</script>";
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        echo "<script>window.location.href='".base_url()."index.php/dashboard'</script>";
    }
    public function barang(){
        if(!$this->session->userdata('is_login')){
            echo "<script>window.location.href='".base_url()."index.php/dashboard'</script>";   
        }
        $list_barang = $this->MBarang->get_all();

		$this->load->view('dashboard/barang',array(
            'list_barang' => $list_barang
        ));
    }

    public function addBarang(){
        $list_supplier = $this->MSupplier->get_all();
		$this->load->view('dashboard/add-barang',array('supplier'=>$list_supplier));
    }

    public function saveBarang(){
        $nama_barang = $this->input->post('nama_barang');
        $satuan = $this->input->post('satuan');
        $id_supplier = $this->input->post('id_supplier');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $data_barang = array (
            'nama_barang' => $nama_barang,
            'satuan' => $satuan,
            'id_supplier' => $id_supplier,
            'harga' => $harga,
            'stok' => $stok
        );
        $this->MBarang->insert($data_barang);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/barang'</script>";
    }

    public function editBarang(){
        $list_supplier = $this->MSupplier->get_all();
        $id = $this->input->get('id');
        $data_barang = $this->MBarang->get_by_id($id);

		$this->load->view('dashboard/update-barang', array(
            'data_barang' => $data_barang,
            'id' => $id,
            'supplier'=>$list_supplier
        ));
    }

    public function updateBarang(){
        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $satuan = $this->input->post('satuan');
        $id_supplier = $this->input->post('id_supplier');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $data_barang = array (
            'nama_barang' => $nama_barang,
            'satuan' => $satuan,
            'id_supplier' => $id_supplier,
            'harga' => $harga,
            'stok' => $stok
        );
        $this->MBarang->update($id, $data_barang);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/barang'</script>";
    }

    public function deleteBarang(){
        $id = $this->input->get('id');
        $this->MBarang->delete($id);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/barang'</script>";
    }
    public function supplier(){
        if(!$this->session->userdata('is_login')){
            echo "<script>window.location.href='".base_url()."index.php/dashboard'</script>";   
        }
        $list_supplier = $this->MSupplier->get_all();

		$this->load->view('dashboard/supplier',array(
            'list_supplier' =>  $list_supplier
        ));
    }

    public function addSupplier(){
		$this->load->view('dashboard/add-supplier');
    }

    public function saveSupplier(){
        $nama_supplier = $this->input->post('nama_supplier');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $data_supplier = array (
            'nama_supplier' => $nama_supplier,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
 
        );
        $this->MSupplier->insert($data_supplier);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/supplier'</script>";
    }

    public function editSupplier(){
        $id = $this->input->get('id');
        $data_supplier = $this->MSupplier->get_by_id($id);

		$this->load->view('dashboard/update-supplier', array(
            'data_supplier' => $data_supplier,
            'id' => $id
        ));
    }

    public function updateSupplier(){
        $id = $this->input->post('id');
        $nama_supplier = $this->input->post('nama_supplier');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $data_supplier = array (
            'nama_supplier' => $nama_supplier,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );
        $this->MSupplier->update($id, $data_supplier);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/supplier'</script>";
    }

    public function deleteSupplier(){
        $id = $this->input->get('id');
        $this->MSupplier->delete($id);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/supplier'</script>";
    }
    
    public function user(){
        if(!$this->session->userdata('is_login')){
            echo "<script>window.location.href='".base_url()."index.php/dashboard'</script>";   
        }
        $list_user = $this->MUsers->get_all();

		$this->load->view('dashboard/user',array(
            'list_user' =>  $list_user
        ));
    }

    public function addUser(){
		$this->load->view('dashboard/add-user');
    }

    public function saveUser(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data_user = array (
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'password' => $password,
 
        );
        $this->MUsers->insert($data_user);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/user'</script>";
    }

    public function editUser(){
        $id = $this->input->get('id');
        $data_user = $this->MUsers->get_by_id($id);

		$this->load->view('dashboard/update-user', array(
            'data_user' => $data_user,
            'id' => $id
        ));
    }

    public function updateUser(){
        $id = $this->input->post('id');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data_user = array (
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'password' => $password,
        );
        $this->MUsers->update($id, $data_user);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/user'</script>";
    }

    public function deleteUser(){
        $id = $this->input->get('id');
        $this->MUsers->delete($id);
        echo "<script>window.location.href='".base_url()."index.php/dashboard/user'</script>";
    }
    public function apiteman()
    {
        if(!$this->session->userdata('is_login')){
            echo "<script>window.location.href='".base_url()."index.php/dashboard'</script>";   
        }
        $headers = [
            'x-api-key: 169ee959032f68828a807e7991d6adde'
        ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://redha.d3mi2020.com/index.php/barang/index",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => $headers
        ));
        
        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $data['result'] = array('error' => true);
        } else {
            $data['result'] = (json_decode($response));
        }
        return $this->load->view('dashboard/apiteman',$data);
    }
    public function detailapiteman()
    {
        if(!$this->session->userdata('is_login')){
            echo "<script>window.location.href='".base_url()."index.php/dashboard'</script>";   
        }
        $id = $this->input->get('id');
        $headers = [
            'x-api-key: 169ee959032f68828a807e7991d6adde'
        ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://redha.d3mi2020.com/index.php/barang/by_id?id=".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => $headers
        ));
        
        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $data['data_barang'] = array('error' => true);
        } else {
            $data['data_barang'] = (json_decode($response));
        }
        return $this->load->view('dashboard/detailapi',$data);
    }
}
