<?php

use chriskacerguis\RestServer\RestController;

class Anggota extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MAnggota');
    }

    public function index_get()
    {

        //cek parameter id
        $list_anggota = $this->MAnggota->get_all();
        if ($list_anggota) {
            $total_anggota = count($list_anggota);
            $this->response(
                array(
                    'status' => true,
                    'total_anggota' => $total_anggota,
                    'list_anggota' => $list_anggota,
                ),
                200
            );
        } else {
            $this->response(
                array(
                    'status' => false,
                    'message' => 'Anggota Tidak Ditemukan'
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
            $data_anggota = $this->MAnggota->get_by_id($id);
            if ($data_anggota) {
                $this->response(
                    array(
                        'status' => true,
                        'data_anggota' => $data_anggota
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
            $data_anggota = $this->MAnggota->get_by_nama($nama);
            if ($data_anggota) {
                $this->response(
                    array(
                        'status' => true,
                        'data_anggota' => $data_anggota
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
        $nama = $this->post('nama');
        $telepon = $this->post('telepon');
        $alamat = $this->post('alamat');
        $email = $this->post('email');
        $status = $this->post('status');

        $data_anggota = array(
            'nama' => $nama,
            'telepon' => $telepon,
            'alamat' => $alamat,
            'email' => $email,
            'status' => $status
        );

        $this->MAnggota->insert($data_anggota);
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
        $nama = $this->put('nama');
        $telepon = $this->put('telepon');
        $no_anggota = $this->put('no_anggota');
        $data_anggota = array(
            'nama' => $nama,
            'telepon' => $telepon
        );

        $this->MAnggota->update($no_anggota, $data_anggota);
        $this->response(
            array(
                'status' => true,
                'pesan' => 'Data Buku Berhasil Diubah',
                'no_anggota' => $no_anggota
            ),
            200
        );
    }

    public function index_delete()
    {
        $no_anggota = $this->delete('no_anggota');
        $this->MAnggota->delete($no_anggota);
        $this->response(
            array(
                'Status' => true,
                'Pesan' => 'Data Buku Berhasil Dihapus'
            ),
            200
        );
    }

}
