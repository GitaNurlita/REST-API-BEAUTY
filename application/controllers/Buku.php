<?php
//load library
use chriskacerguis\RestServer\RestController ;

class Buku extends RestController
{
    function __construct()
    {
        //Construct the parent class
        parent::__construct();
        $this->load->model('MBuku');
    }
    //mendapatkan data
    public function index_get()
    {
        //jika ada parameter id
        $list_buku = $this->MBuku->get_all();
        if($list_buku){
            $total_buku = count ($list_buku);
            $this->response(
                array(
                    'status' => true, 
                    'total_buku' => $total_buku,
                    'list_buku'  => $list_buku
                ),
                200
            );//200 being the HTTP response code
        } else {
            $this->response(
                array(
                    'status' => false, 
                    'pesan' => 'Tidak  ada data buku',
                    
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
            $data_buku = $this->MBuku->get_by_id($id);
            if ($data_buku){
                $this->response(
                    array(
                        'status' => true, 
                        'total_buku' => $data_buku,
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
            $judul = $this->post('judul');
            $pengarang = $this->post('pengarang');
            $penerbit = $this->post('penerbit');
            $isbn = $this->post('isbn');
            $data_buku = array (
                'judul' => $judul,
                'pengarang' => $pengarang,
                'penerbit' => $penerbit,
                'isbn' => $isbn
            );
            $this->MBuku->insert($data_buku);
            $this->response(
                array(
                    'satatus' => true,
                    'pesan' => "Data buku berhasil disimpan"
                ),
                200
            );//200 being the HTTP response code
        }
        //ubah data
      public function index_put()
         {
             $judul = $this->put('judul');
             $pengarang = $this->put('pengarang');
             $id = $this->put('id');
             $data_buku = array (
                 'judul' => $judul,
                 'pengarang' => $pengarang,
    
             );
             $this->MBuku->update($id, $data_buku);
             $this->response(
                 array(
                     'status' => true,
                     'pesan' => "Data buku berhasil diubah"
            
                 ),
                 200
             );//200 being the HTTP response code
         }
         //delete
         public function index_delete()
         {
             $id = $this->delete('id');
             $this->MBuku->delete($id);
             $this->response(
                 array(
                     'status' => true,
                     'pesan' => "Data buku berhasil dihapus"
                 ),
                 200
             );//200 being the HTTP response code
            
         }
    }

    ?>