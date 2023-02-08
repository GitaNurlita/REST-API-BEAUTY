
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
                    <h6 class="text-white text-capitalize ps-3">Tambah Supplier</h6>
                </div>
               
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form role="form" class='container-fluid p-5' action="<?php echo base_url()."index.php/dashboard/saveSupplier"?>" method="post">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Nama Supplier</label>
                      <input type="text" name="nama_supplier" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">No Telepon</label>
                      <input type="text" name="no_telp" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" name="alamat" class="form-control">
                    </div>

                    
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Simpan</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>

<?php $this->load->view('dashboard/component/footer');?>