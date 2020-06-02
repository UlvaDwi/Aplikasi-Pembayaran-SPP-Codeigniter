<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Sistem Pembayaran</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">ADMIN</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <li class="nav-item has-treeview menu-open">
        <a href="<?= base_url() ?>index.php" class="nav-link active">
          <i class="nav-icon fas fa-th"></i>
          <p>
          Dashboard</i>
        </p>
      </a>
    </li>
    <!-- Data Jurusan  -->
    <li class="nav-item">
      <a href="<?= base_url() ?>DataJurusan" class="nav-link">
        <i class="fas fa-shield-alt"></i>
        <p>
          Data Jurusan
        </p>
      </a>
    </li>

    <!-- Data Kelas -->
    <li class="nav-item">
      <a href="<?= base_url() ?>DataKelas" class="nav-link">
        <i class="fas fa-school"></i>
        <p>
          Data Kelas
        </p>
      </a>
    </li>
   
    <!-- Data Tahun Ajaran -->
    <li class="nav-item">
      <a href="<?= base_url() ?>DataTahunAjaran" class="nav-link">
        <i class="fas fa-school"></i>
        <p>
          Data Tahun Ajaran
        </p>
      </a>
    </li>
    
    <!-- JData DPPSiswa-->
    <li class="nav-item">
      <a href="<?= base_url() ?>DataDPPSiswa" class="nav-link">
        <i class="fas fa-list"></i>
        <p>
          Data DPP Siswa
        </p>
      </a>
    </li>
    <!-- Jenis SPP -->
    <li class="nav-item">
      <a href="<?= base_url() ?>DataJenisSPP" class="nav-link">
        <i class="fas fa-list"></i>
        <p>
          Jenis SPP
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?= base_url() ?>DataJenisPembayaran" class="nav-link">
        <i class="fas fa-tags"></i>
        <p>
          Jenis Pembayaran
        </p>
      </a>
    </li>
    <!-- data pembayaran -->
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fas fa-dollar-sign"></i>
        <p> Pembayaran <i class="right fas fa-angle-left"></i></p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?= base_url() ?>DataGuru" class="nav-link">
            <i class="fas fa-hand-holding-usd"></i>
            <p>
              Pembayaran DPP
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>DataGuru" class="nav-link">
            <i class="fas fa-hand-holding-usd"></i>
            Pembayaran SPP
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url() ?>DataPembayaran" class="nav-link">
          <i class="fas fa-hand-holding-usd"></i>
          <p>Pembayaran Lainnya</p>
        </a>
      </li>
    </ul>
  </li>


    <!-- data Laporan -->
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fas fa-dollar-sign"></i>
        <p> Laporan <i class="right fas fa-angle-left"></i></p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?= base_url() ?>DataGuru" class="nav-link">
            <i class="fas fa-hand-holding-usd"></i>
            <p>
              Laporan SPP
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>DataGuru" class="nav-link">
            <i class="fas fa-hand-holding-usd"></i>
            Pembayaran SPP
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url() ?>DataGuru" class="nav-link">
          <i class="fas fa-hand-holding-usd"></i>
          <p>Pembayaran Lainnya</p>
        </a>
      </li>
    </ul>
  </li>

</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>