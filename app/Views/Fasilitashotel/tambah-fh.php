<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Penambahan Data Fasilitas Hotel</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk mendata data fasilitas hotel baru</p>
                <form method="POST" action="/fh/simpan"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Fasilitas</label>
                        <input type="text" name="txtNamaFasilitas" class="form-control" placeholder="Masukkan nama fasilitas" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <label  for="exampleFormControlTextarea1" class="font-weight-bold">Deskripsi</label>
                        <input name="txtInputDeskripsi" class="form-control rounded-0" placholder="Masukkan keterangan fasilitas" id="exampleFormControlTextarea1" rows="10">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Foto</label>
                        <input type="file" name="txtFoto" class="form-control"required>
                    </div>               
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </br>
                </b>
                </form>
                </div>
          </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>