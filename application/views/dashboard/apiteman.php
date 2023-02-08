<?php $this->load->view('dashboard/component/head');?>
<?php $this->load->view('dashboard/component/sidebar');?>
  
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                <div class="col-6">
                    <h6 class="text-white text-capitalize ps-3">API TEMAN</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah Stok</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>

                    </tr>
                  </thead>
                  <tbody class="p-5">
                    
                    <?php foreach ( $result->list_barang as $item ) :?>
                    <tr>
                      <td>
                        <?php echo $item->nama_barang;?>
                      </td>
                      <td>
                        <?php echo $item->jumlah_stok;?>

                      </td>
                      <td class="align-middle text-center text-sm">
                        <?php echo $item->harga;?>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <a href="<?php echo base_url().'index.php/dashboard/detailapiteman?id='.$item->id_barang?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Cek Detail
                        </a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php $this->load->view('dashboard/component/footer');?>