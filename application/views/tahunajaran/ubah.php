Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Ubah Data Tahun Ajaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Data Tahun Ajaran</li>
            <li class="breadcrumb-item active">Ubah Data Tahun Ajaran</li>
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
                      <label for="exampleInputEmail1">Kode Tahun Ajaran</label>
                      <input type="text" class="form-control disabled" name="kd_ta" value="<?= $ubah['kode_ta'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tahun Ajaran</label>
                      <input type="text" class="form-control"name="thn_ajaran" value="<?= $ubah['tahun_ajaran'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Semester</label>
                      <select class="form-control" name="smt">
                        <option value="ganjil">Ganjil</option>
                        <option value="genap">Genap</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Status</label>
                      <select class="form-control" name="stts">
                        <option value="aktif">Aktif</option>
                        <option value="tidakaktif">Tidak Aktif</option>
                      </select>
                    </div>

                    <div>
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