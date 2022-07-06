 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
     <div class="sidebar-brand-text mx-3">
       <h10>Klinik Pratama Annisa Husada</h10><sup></sup>
     </div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
     <a class="nav-link" href="<?= base_url('admin/Dashboard'); ?>">
       <i class="fas fa-fw fa-tachometer-alt"></i>
       <span>Dashboard</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">
   <!-- Nav Item - Pages Collapse Menu -->
   <?php
    if ($akses == "administrator") {
    ?>
     <div class="sidebar-heading">
       Data
     </div>
     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin/pasien'); ?>">
         <i class="fab fa-fw fa-accessible-icon"></i>
         <span>Pasien</span></a>
     </li>
     <!--<li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/user'); ?>">
        <i class="fas fa-fw fa-user-circle"></i>
        <span>User</span></a>
      </li>-->

     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin/spesialis'); ?>">
         <i class="fas fa-chalkboard-teacher"></i>
         <span>Poliklinik</span></a>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin/dokter'); ?>">
         <i class="fas fa-stethoscope"></i>
         <span>Dokter</span></a>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin/kamar'); ?>">
         <i class="fas fa-fw fa-procedures"></i>
         <span>Kamar</span></a>
     </li>

     <hr class="sidebar-divider">
     <!-- Heading -->
     <div class="sidebar-heading">
       Data Transaksi
     </div>
     <!--<li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/rawat_jalan'); ?>">
                <i class="fas fa-address-book"></i>
                <span>Pendaftaran Rawat Jalan</span></a>
              </li> 
			   <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/pendaftaran'); ?>">
                <i class="fas fa-info-circle"></i>
                <span>Pendaftaran Rawat Inap</span></a>
              </li> -->
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-address-book"></i>
         <span>Pendaftaran</span></a>
       <div class="dropdown-menu">
         <a class="dropdown-item" href="<?= base_url('admin/hasil_periksa_jalan'); ?>">Rawat Jalan</a>
         <a class="dropdown-item" href="<?= base_url('admin/hasil_periksa_ugd'); ?>">UGD</a>
         <a class="dropdown-item" href="<?= base_url('admin/hasil_periksa'); ?>">Rawat Inap</a>
       </div>
     </li>
     <!-- <li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin/rawat'); ?>">
         <i class="fas fa-diagnoses"></i>
         <span>Rawat</span></a>
     </li> -->
     <!--<li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/pembayaran'); ?>">
                      <i class="fas fa-fw fa-cart-plus"></i>
                      <span>Pembayaran</span></a>
                    </li> -->
     <hr class="sidebar-divider">
     <!-- Heading -->
     <div class="sidebar-heading">
       Data Laporan
     </div>
     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">
         <i class="fas fa-file"></i>
         <span>Laporan Data Master</span>
       </a>
     </li>
   <?php
    } else {
    ?>
     <div class="sidebar-heading">
       Data Laporan
     </div>
     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">
         <i class="fas fa-file"></i>
         <span>Laporan Data Master</span>
       </a>
     </li>
   <?php
    }
    ?>


   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <!-- <div class="text-center d-none d-md-inline">
     <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div> -->

 </ul>
 <!-- End of Sidebar -->