<?php
//load library
use chriskacerguis\RestServer\RestController ;

class Barang extends RestController
{
    function __construct()
    {
        //Construct the parent class
        parent::__construct();
        $this->load->model('MBarang');
    }
    //mendapatkan data
    public function index_get()
    {
        //jika ada parameter id
        $list_barang = $this->MBarang->get_all();
        if($list_barang){
            $total_barang = count ($list_barang);
            $this->response(
                array(
                    'status' => true, 
                    'total_barang' => $total_barang,
                    'list_barang'  => $list_barang
                ),
                200
            );//200 being the HTTP response code
        } else {
            $this->response(
                array(
                    'status' => false, 
                    'pesan' => 'Tidak  ada data barang',
                    
                ),
               404
            );

        }
    }
    public function by_id_get()
    {
        //jika ada parameter id
        $id = $this->get('id');
        if($id){
            $data_barang = $this->MBarang->get_by_id($id);
            if ($data_barang){
                $this->response(
                    array(
                        'status' => true, 
                        'total_barang' => $data_barang,
                    ),
                    200
                );// 200 being the HTTP response code
            } else {
            $this->response(
                array(
                    'status' => false, 
                    'pesan' => 'ID' . $id . 'tidak ditemukan',    
                ),
               404
            );
        }
        } else {
            $this->response(
                array(
                    'status' => false, 
                    'pesan' => 'Silahkan Masukan parameter id',    
                ),
               404
            );
          }
        }
        //tambah data
        public function index_post()
        {
            $nama_barang = $this->post('nama_barang');
            $satuan = $this->post('satuan');
            $id_supplier = $this->post('id_supplier');
            $harga = $this->post('harga');
            $stok = $this->post('stok');
            $data_barang = array (
                'nama_barang' => $nama_barang,
                'satuan' => $satuan,
                'id_supplier' => $id_supplier,
                'harga' => $harga,
                'stok' => $stok
            );
            $this->MBarang->insert($data_barang);
            $this->response(
                array(
                    'satatus' => true,
                    'pesan' => "Data barang berhasil disimpan"
                ),
                200
            );//200 being the HTTP response code
        }
        //ubah data
      public function index_put()
         {
            $id = $this->put('id');
            $nama_barang = $this->put('nama_barang');
            $satuan = $this->put('satuan');
            $id_supplier = $this->put('id_supplier');
            $harga = $this->put('harga');
            $stok = $this->put('stok');
            $data_barang = array (
                'nama_barang' => $nama_barang,
                'satuan' => $satuan,
                'id_supplier' => $id_supplier,
                'harga' => $harga,
                'stok' => $stok
            );
             $this->MBarang->update($id, $data_barang);
             $this->response(
                 array(
                     'status' => true,
                     'pesan' => "Data barang berhasil diubah"
            
                 ),
                 200
             );//200 being the HTTP response code
         }
         //delete
         public function index_delete()
         {
             $id = $this->delete('id');
             $this->MBarang->delete($id);
             $this->response(
                 array(
                     'status' => true,
                     'pesan' => "Data barang berhasil dihapus"
                 ),
                 200
             );//200 being the HTTP response code
            
         }
    }

    ?>