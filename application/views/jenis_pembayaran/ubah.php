Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Ubah Jenis SPP</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Jenis SPP</li>
            <li class="breadcrumb-item active">Ubah Jenis Pembayaran/li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Ubah Data</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <?= validation_errors(); ?>
                <form action="" method="post" accept-charset="utf-8">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kode Jenis Pembayaran</label>
                      <input type="text" class="form-control disabled" name="kode_jenispembayaran" value="<?= $ubah['kode_jenispembayaran'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Pembayaran</label>
                      <input type="text" class="form-control"name="nama_pembayaran" value="<?= $ubah['nama_pembayaran'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nominal Pembayaran</label>
                      <input type="text" class="form-control"name="nominal" value="<?= $ubah['nominal'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tahun</label>
                      <input type="text" class="form-control"name="tahun" value="<?= $ubah['tahun'] ?>">
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save">
                  </div>
                  <!-- /.card-body -->
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper