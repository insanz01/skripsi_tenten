<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
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
            <th>Nama Guru</th>
            <th>NIP</th>
            <th title="jenis kelamin">JK</th>
            <th>Bidang</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Gol/Ruang</th>
            <th>Tempat Tugas</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Fitriana Puspa</td>
              <td>16000018021</td>
              <td>Perempuan</td>
              <td>Informatika</td>
              <td>Banjarnegara</td>
              <td>Kepala Lab</td>
              <td>A/X</td>
              <td>Laboratorium</td>
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
      <form action="<?= base_url('app/guru/tambah') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="NIP">NIP</label>
                <input type="text" class="form-control" name="nip">
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <br>
                <input type="radio" name="jenis_kelamin" value="pria" checked> Pria
                <input type="radio" name="jenis_kelamin" value="wanita"> Wanita
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="" cols="30" rows="4"></textarea>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="jurusan">S1 / Jurusan</label>
                <input type="text" class="form-control" name="jurusan">
              </div>
              <div class="form-group">
                <label for="gol_ruang">Gol/Ruang</label>
                <input type="text" class="form-control" name="gol_ruang">
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan">
              </div>
              <div class="form-group">
                <label for="tempat_tugas">Tempat Tugas</label>
                <input type="text" class="form-control" name="tempat_tugas">
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