
Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data DPP Siswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Data DPP Siswa</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- NOTIFIKASI -->
    <?php 
    if ($this->session->flashdata('flash_dppsiswa')){ ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6>
          <i class="icon fas fa-check"></i> 
          Data Berhasil 
          <strong>
            <?= $this->session->flashdata('flash_dppsiswa');   ?>
          </strong> 
        </h6>
      </div>
    <?php } ?>
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Tambah Data DPP Siswa</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <?= validation_errors(); ?>
                <form action="<?= base_url() ?>DataDPPSiswa/validation_form" method="post" accept-charset="utf-8">
                  <div class="card-body">
                    <!-- data Input Siswa -->

                    <h3>Data Siswa</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">NISN</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="Nisn">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Siswa</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="nm_siswa">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tahun Ajaran</label>
                          <select class="form-control" name="kd_ta">

                            <?php 
                            foreach ($tahunajaran as $row) { ?>
                              <option value="<?= $row->kode_ta?>"><?= $row->tahun_ajaran ?></option>
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
                          <input type="text" class="form-control" id="exampleInputPassword1" name="tmpt_lahir">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_lahir">
                        </div>
                      </div>
                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="exampleInputPassword1">Alamat</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="almat">
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">No Telp</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="telp_siswa">
                        </div>
                        
                        <!-- <div class="form-group">
                          <label for="exampleInputPassword1">Tahun Keluar</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="thn_keluar">
                        -->
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tahun Keluar</label>
                          <select class="form-control" name="kd_ta">

                            <?php 
                            foreach ($tahunajaran as $row) { ?>
                              <option value="<?= $row->kode_ta?>"><?= $row->tahun_ajaran ?></option>
                            <?php } ?>
                          </select>
                          
                          
                        </div>
                        <!-- diambil dari tbl jurusan -->
                        <div class="form-group">
                          <label for="exampleInputPassword1">jurusan</label>
                          <select class="form-control" name="jurusan">

                            <?php 
                            foreach ($jurusan as $jur) { ?>
                              <option value="<?= $jur->kode_jurusan?>"><?= $jur->nama_jurusan ?></option>
                            <?php } ?>
                          </select>
                          
                        </div>             
                        <!-- diambil dari tbl jenis spp -->             
                        <div class="form-group">
                          <label for="exampleInputPassword1">Jenis SPP</label>
                          <select class="form-control" name="jenis_spp">
                            <?php 
                            foreach ($jenis_spp as $row) { ?>
                              <option value="<?= $row->kode_jenisspp  ?>"><?= $row->kategori."(".$row->nominal_jenis.")" ?></option>
                            <?php }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <hr style="border-top:1px dotted #000;">
                    <hr style="border-top:1px dotted #000;">
                    <!-- Data Input DPP -->
                    <h3>Data DPP</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nominal DPP</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="nmnl_dpp">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Jumlah Angsuran</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="jmlh_angsuran">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nominal Angsuran</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="nmnl_angsuran">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Status</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="stts">
                        </div>
                      </div>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save">
                  </div>
                  <!-- /.card-body -->
                </form>
              </div>
              <div class="col-md-6">

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
                  <th>NISN</th>
                  <!-- <th>Nama Siswa</th> -->
                  <th>Nominal DPP</th>
                  <th>Jumlah Angsuran</th>
                  <th>Nominal Angsuran</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach ($dppsiswa as $row){ ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $row->nisn ?></td>
                    <!-- <td><?= $row->nama_siswa ?></td> -->
                    <td><?= $row->nominal_dpp ?></td>
                    <td><?= $row->jumlah_angsuran ?></td>
                    <td><?= $row->nominal_angsuran ?></td>
                    <td><?= $row->status ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="<?= base_url() ?>DataDPPSiswa/hapus/<?= $row->nisn ?>" class="btn btn-primary" onclick="return confirm('yakin ?')">Detail Siswa</a>
                        <a href="<?= base_url() ?>DataDPPSiswa/hapus/<?= $row->nisn ?>" class="btn btn-danger" onclick="return confirm('yakin ?')">Hapus</a>
                        <a href="<?= base_url() ?>DataDPPSiswa/ubah/<?= $row->nisn ?>" class="btn btn-warning">update</a>
                      </div>
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