<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Sekolah</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <div class="row">
    <div class="col-12 mb-2">
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahModal">Tambah Data</button>
    </div>
    <div class="col-12">
      <div class="form-responsive">
        <table class="table table-bordered">
          <thead>
            <th>No</th>
            <th>Nama SD</th>
            <th title="kepala sekolah">Kepsek</th>
            <th>Rombel</th>
            <th>Guru Kelas</th>
            <th>Guru PAI</th>
            <th>Guru PJOK</th>
            <th>Penjaga</th>
            <th>Total</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>SD Ahmad Dahlan</td>
              <td>Dhian Fendina Hapsari</td>
              <td>10</td>
              <td>10</td>
              <td>10</td>
              <td>10 </td>
              <td>10</td>
              <td>50</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('app/sekolah/tambah') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah Dasar</label>
                <input type="text" class="form-control" name="nama_sekolah">
              </div>
              <div class="form-group">
                <label for="nama_kepsek">Nama</label>
                <input type="text" class="form-control" name="nama_kepsek">
              </div>
              <div class="form-group">
                <label for="rombel">Jumlah Rombel</label>
                <input type="number" class="form-control" name="rombel">
              </div>
              <div class="form-group">
                <label for="guru_kelas">Guru Kelas</label>
                <input type="number" class="form-control" name="guru_kelas">
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="guru_pai">Jumlah Guru PAI</label>
                <input type="number" class="form-control" name="guru_pai">
              </div>
              <div class="form-group">
                <label for="guru_pjok">Jumlah Guru PJOK</label>
                <input type="number" class="form-control" name="guru_pjok">
              </div>
              <div class="form-group">
                <label for="penjaga">Jumlah Penjaga</label>
                <input type="number" class="form-control" name="penjaga">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>