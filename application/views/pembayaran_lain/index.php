Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Transaksi Pembayaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Transaksi Pembayaran</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


 
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
                  <th>Nisn</th>
                  <th>Nama Siswa</th>
                  <th>Jumlah Tagihan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach ($pembayaran as $row){ ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $row->nisn?></td>
                    <td><?= $row->nama_siswa?></td>
                    <td><?= $row->j ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="<?= base_url() ?>DataJenisPembayaran/hapus/<?= $row->kode_jenispembayaran ?>" class="btn btn-danger" onclick="return confirm('Apakah Anada Akan Menghapus Data Ini ?')">Hapus</a>
                        <a href="<?= base_url() ?>DataJenisPembayaran/ubah/<?= $row->kode_jenispembayaran?>" class="btn btn-warning">update</a>
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