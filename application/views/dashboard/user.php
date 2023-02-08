
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
                    <h6 class="text-white text-capitalize ps-3">User</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="<?php echo base_url().'index.php/dashboard/addUser'?>" class="btn btn-sm btn-secondary">Add User</a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama User</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody class="p-5">
                    <?php foreach ( $list_user as $item ) :?>
                    <tr>
                      <td>
                        <?php echo $item->nama_lengkap;?>
                      </td>
                      <td>
                        <?php echo $item->username;?>

                      </td>
                      <td class="align-middle text-center text-sm">
                        <?php echo $item->password;?>
                      </td> 
                      <td class="align-middle">
                        <a href="<?php echo base_url().'index.php/dashboard/editUser?id='.$item->id?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit User">
                          Edit
                        </a> | 
                        <a 
                        href="#"
                        onClick="konfirmasi('<?php echo base_url().'index.php/dashboard/deleteUser?id='.$item->id?>')"
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