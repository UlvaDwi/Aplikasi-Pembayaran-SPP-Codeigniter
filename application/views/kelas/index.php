Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Kelas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Data kelas</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <!-- NOTIFIKASI -->
    <?php 
    if ($this->session->flashdata('flash_kelas')){ ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6>
          <i class="icon fas fa-check"></i> 
          Data Berhasil 
          <strong>
            <?= $this->session->flashdata('flash_kelas');   ?>
          </strong> 
        </h6>
      </div>
    <?php } ?>
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Tambah Data Kelas</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <?= validation_errors(); ?>
                <form action="<?= base_url() ?>DataKelas/validation_form" method="post" accept-charset="utf-8">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Kelas</label>
                      <select class="form-control" name="kelas">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>jurusan</label>
                      <select class="form-control" name="kd_jur">
                        <?php 
                        foreach ($jurusan as $jur) { ?>
                          <option value="<?= $jur->kode_jurusan?>"><?= $jur->nama_jurusan ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama kelas</label>
                      <select name="nm_kelas" class="form-control">
                        <?php 
                        foreach (range('A', 'Z') as $char) { ?>
                          <option value="<?= $char ?>"><?= $char  ?></option>
                        <?php } ?>
                      </select>
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
    <!-- list data -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- card-body -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>kelas</th>
                  <th>Jurusan</th>
                  <th>Nama Kelas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach ($kelas as $row){ ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $row->kelas ?></td>
                    <td><?= $row->nama_jurusan ?></td>
                    <td><?= $row->nama_kelas ?></td>
                    <td>
                      <a href="<?= base_url() ?>DataKelas/hapus/<?= $row->kode_kelas ?>" class="btn btn-danger" onclick="return confirm('yakin ?')">Hapus</a>
                    </td>
                  </tr>
                  <?php 
                  $no++;
                } 
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
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