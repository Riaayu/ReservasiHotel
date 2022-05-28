<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Penambahan Data Kamar</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk mendata data kamar baru</p>
                <form method="POST" action="/kamar/simpan"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Nomor Kamar</label>
                        <input type="text" name="txtNoKamar" class="form-control" placeholder="Masukan nomor kamar, misal : 1A" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Tipe Kamar</label>
                        <br>
                        <select class="form-control" name="txtInputTipeKamar" required>
                            <option value="">No Selected</option>
                            <option value="delux">delux</option>
                            <option value="superior">superior</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  for="exampleFormControlTextarea1" class="font-weight-bold">Deskripsi</label>
                        <textarea name="txtInputDeskripsi" class="form-control rounded-0" placholder="Masukkan keterangan fasilitas" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Tarif</label>
                        <input type="text" name="txtTarif" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Jumlah Kamar</label>
                        <input type="text" name="txtJumlah_kamar" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Foto Kamar</label>
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