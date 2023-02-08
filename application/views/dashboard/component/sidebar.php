
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="<?php echo base_url();?>asset-dashboard/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Menu REST API BEAUTY</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url()?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Landing page</span>
          </a>
        </li>
        <li class="nav-item">
          
          <a class="nav-link text-white <?php echo $this->uri->segment(2)=="barang"?"active bg-gradient-primary":""?> " href="<?php echo base_url()?>index.php/Dashboard/barang">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"> List Barang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $this->uri->segment(2)=="supplier"?"active bg-gradient-primary":""?> " href="<?php echo base_url()?>index.php/Dashboard/supplier">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">List Supplier</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $this->uri->segment(2)=="user"?"active bg-gradient-primary":""?>" href="<?php echo base_url()?>index.php/Dashboard/user">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">face</i>
            </div>
            <span class="nav-link-text ms-1">List User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $this->uri->segment(2)=="apiteman"?"active bg-gradient-primary":""?>" href="<?php echo base_url()?>index.php/Dashboard/apiteman">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">sports_soccer</i>
            </div>
            <span class="nav-link-text ms-1">Akses Api</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $this->uri->segment(2)=="logout"?"active bg-gradient-primary":""?>" href="<?php echo base_url()?>index.php/Dashboard/logout">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      
    </div>
  </aside>
  
