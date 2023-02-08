<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

    function login()
    {
        if($this->session->userdata('is_login_user')){
            echo "<script>window.location.href='".base_url()."index.php/home/key'</script>";
        }
        $this->load->view('login');
    }
    function register()
    {
        $this->load->view('register');
    }

    function reg_save()
    {
        //load model
        $this->load->model(array('MUser','MKeys'));
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //simpan data ke tabel user
        $data_user = array(
            'nama_lengkap'=>$nama_lengkap,
            'username'=>$username,
            'password'=>$password
        );
        $id_user = $this->MUser->insert($data_user);

        //simpan data ke tabel key
        $data_keys = array(
            'user_id'=>$id_user,
            'key'=>md5(date('y-m-d H:i:s')),
            'level'=>'1',
            'date_created'=>'1'
        );
        $this->MKeys->insert($data_keys);
        echo "<script>window.location.href='".base_url()."index.php/home/login'</script>";
    }

    function validasi()
    {
        $this->load->model('MUser');
        $u = $this->input->post('username');
        $p = $this->input->post('password');
    
        $hasil_validasi = $this->MUser->login($u,$p);
        if($hasil_validasi){
            $this->session->set_userdata(array('is_login_user'=>true,'username'=>$u));
            echo "<script>window.location.href='".base_url()."index.php/home/key';</script>";
        } else{
            echo "<script>alert('Password salah');window.location.href='".base_url()."index.php/home/login';</script>";
        }  
        
    }
    public function logout(){
        $this->session->sess_destroy();
        echo "<script>window.location.href='".base_url()."index.php/home/login'</script>";
    }
    public function key(){
        if(!$this->session->userdata('is_login_user'))
        {
            echo "<script>window.location.href='".base_url()."index.php/home/login'</script>";
        }
        $this->load->model('MUser');
        $this->load->view('key', array(
            'name' => $this->session->userdata('username'),
            'key' => $this->MUser->get_key($this->session->userdata('username'))
        ));
    }
}
