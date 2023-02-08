
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
                    <h6 class="text-white text-capitalize ps-3">Barang</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="<?php echo base_url().'index.php/dashboard/addBarang'?>" class="btn btn-sm btn-secondary">Add Barang</a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Satuan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Supplier</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody class="p-5">
                    
                    <?php foreach ( $list_barang as $item ) :?>
                    <tr>
                      <td>
                        <?php echo $item->nama_barang;?>
                      </td>
                      <td>
                        <?php echo $item->satuan;?>

                      </td>
                      <td class="align-middle text-center text-sm">
                        <?php echo $item->harga;?>
                      </td>
                      <td class="align-middle text-center">
                        <?php echo $item->stok;?>
                      </td>
                      <td class="align-middle text-center">
                        <?php echo $item->nama_supplier;?>
                      </td>
                      <td class="align-middle">
                        <a href="<?php echo base_url().'index.php/dashboard/editBarang?id='.$item->id?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a> | 
                        <a 
                        href="#"
                        onClick="konfirmasi('<?php echo base_url().'index.php/dashboard/deleteBarang?id='.$item->id?>')"
                        class="text-secondary font-weight-bold text-xs" 
                        data-toggle="tooltip" 
                        data-original-title="Edit user">
                          Hapus
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