
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
                    <h6 class="text-white text-capitalize ps-3">Update Barang</h6>
                </div>
               
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form role="form" class='container-fluid p-5' action="<?php echo base_url()."index.php/dashboard/updateBarang"?>" method="post">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Nama Barang</label>
                      <input type="text" name="nama_barang" class="form-control" value="<?php echo $data_barang->nama_barang?>">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $id?>">

                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Satuan</label>
                      <input type="text" name="satuan" class="form-control" value="<?php echo $data_barang->satuan?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Harga</label>
                      <input type="number" name="harga" class="form-control" value="<?php echo $data_barang->harga?>">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Stok</label>
                      <input type="number" name="stok" class="form-control" value="<?php echo $data_barang->stok?>">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Supplier</label>
                      <select  name="id_supplier" class="form-control">
                      <?php foreach ( $supplier as $item ) :?>
                        <option value='<?php echo $item->id?>' selected='<?php echo $item->id==$data_barang->id_supplier?>'><?php echo $item->nama_supplier?></option>
                        <?php endforeach ?>

                      </select>                    </div>
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Simpan</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>

<?php $this->load->view('dashboard/component/footer');?>