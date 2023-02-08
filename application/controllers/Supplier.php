<?php

use chriskacerguis\RestServer\RestController;

class Supplier extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MSupplier');
    }

    public function index_get()
    {

        //cek parameter id
        $list_supplier = $this->MSupplier->get_all();
        if ($list_supplier) {
            $total_supplier = count($list_supplier);
            $this->response(
                array(
                    'status' => true,
                    'total_supplier' => $total_supplier,
                    'list_supplier' => $list_supplier,
                ),
                200
            );
        } else {
            $this->response(
                array(
                    'status' => false,
                    'message' => 'supplier Tidak Ditemukan'
                ),
                400
            );
        }
    }

    public function by_id_get()
    {
        // jika ada parameter id
        $id = $this->get('id');
        if ($id) {
            $data_supplier = $this->MSupplier->get_by_id($id);
            if ($data_supplier) {
                $this->response(
                    array(
                        'status' => true,
                        'data_supplier' => $data_supplier
                    ),
                    200
                );
            } else {
                $this->response(
                    array(
                        'status' => false,
                        'pesan' => 'ID ' . $id . ' Tidak Ditemukan'
                    ),
                    404
                );
            }
        } else {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Silahkan Masukkan Parameter Nama'
                ),
                404
            );
        }
    }

    public function by_nama_get()
    {
        $nama = $this->get('nama');
        if ($nama) {
            $data_supplier = $this->MSupplier->get_by_nama($nama);
            if ($data_supplier) {
                $this->response(
                    array(
                        'status' => true,
                        'data_supplier' => $data_supplier
                    ),
                    200
                );
            } else {
                $this->response(
                    array(
                        'status' => false,
                        'pesan' => 'Nama ' . $nama . ' Tidak Ditemukan'
                    ),
                    404
                );
            }
        } else {
            $this->response(
                array(
                    'status' => false,
                    'pesan' => 'Silahkan Masukkan Parameter Nama'
                ),
                404
            );
        }
    }

    public function index_post()
    {
        $nama_supplier = $this->post('nama_supplier');
        $no_telp = $this->post('no_telp');
        $alamat = $this->post('alamat');
    

        $data_supplier = array(
            'nama_supplier' => $nama_supplier,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );

        $this->MSupplier->insert($data_supplier);
        $this->response(
            array(
                'status' => true,
                'pesan' => 'Data Berhasil Disimpan'
            ),
            200
        );
    }
    
    public function index_put()
    {
        $id= $this->put('id');
        $nama_supplier = $this->put('nama_supplier');
        $no_telp = $this->put('no_telp');
        $alamat = $this->put('alamat');
    
        $data_supplier = array(
            'nama_supplier' => $nama_supplier,
            'no_telp' => $no_telp,
            'alamat' => $alamat,

        );
        $this->MSupplier->update($id, $data_supplier);
        $this->response(
            array(
                'status' => true,
                'pesan' => 'Data Supplier Berhasil Diubah',
            ),
            200
        );
    }
 //delete
    public function index_delete()
    {
        $id = $this->delete('id');
        $this->MSupplier->delete($id);
        $this->response(
            array(
                'status' => true,
                'pesan' => "Data Supplier berhasil dihapus"
            ),
            200
        );//200 being the HTTP response code
        
    }
}
