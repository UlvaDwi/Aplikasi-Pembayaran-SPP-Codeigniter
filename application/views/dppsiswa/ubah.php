<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Ubah Data DPP Siswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Data DPP Siswa</li>
            <li class="breadcrumb-item active">Ubah Data DPP Siswa</li>
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
                  <?php foreach ($ubah as $row): ?>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">NISN</label>
                        <input type="text" class="form-control disabled" name="Nisn" value="<?= $row['nisn'] ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Siswa</label>
                        <input type="text" class="form-control"name="nm_siswa" value="<?= $row['nama_siswa'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Ajaran</label>
                        <select class="form-control" name="kode_ta">
                          <?php 
                          foreach ($tahunajaran as $ta) { ?>
                            <option value="<?= $ta->kode_ta?>"><?= $ta->tahun_ajaran ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                          <label>
                            <input type="radio" class="form-group" value="laki-laki" placeholder="laki-laki" name="jk_siswa">Laki-laki
                          </label>
                          <label>
                            <input type="radio" class="form-group" value="perempuan" name="jk_siswa" placeholder="perempuan">
                            Perempuan
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmpt_lahir" value="<?= $row['tempat_lahir'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Lahir</label>
                        <input type="text" class="form-control"name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" class="form-control"name="almat" value="<?= $row['alamat'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">No Telp</label>
                        <input type="text" class="form-control"name="telp_siswa" value="<?= $row['no_telfon'] ?>">
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Masuk</label>
                        <input type="text" class="form-control"name="thn_masuk" value="<?= $row['tahun_masuk'] ?>">
                      </div> -->
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Keluar</label>
                        <select class="form-control" name="kode_ta">
                          <?php 
                          foreach ($tahunajaran as $ta) { ?>
                            <option value="<?= $ta->kode_ta?>"><?= $ta->tahun_ajaran ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">jurusan</label>
                        <select class="form-control" name="jurusan">

                          <?php 
                          foreach ($jurusan as $jur) { ?>
                            <option value="<?= $jur->kode_jurusan?>"><?= $jur->nama_jurusan ?></option>
                          <?php } ?>
                        </select>

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jenis SPP</label>
                        <select class="form-control" name="jenis_spp">
                          <?php 
                          foreach ($jenis_spp as $jspp) { ?>
                            <option value="<?= $jspp->kode_jenisspp  ?>"><?= $jspp->kategori."(".$jspp->nominal_jenis.")" ?></option>
                          <?php }
                          ?>
                        </select>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nominal DPP</label>
                        <input type="text" class="form-control"name="nmnl_dpp" value="<?= $row['nominal_dpp'] ?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Angsuran</label>
                        <input type="text" class="form-control"name="jmlh_angsuran" value="<?= $row['jumlah_angsuran'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nominal Angsuran</label>
                        <input type="text" class="form-control"name="nmnl_angsuran" value="<?= $row['nominal_angsuran'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <input type="text" class="form-control"name="stts" value="<?= $row['status'] ?>">
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save">
                    </div>
                    <!-- /.card-body -->
                  <?php endforeach ?>

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