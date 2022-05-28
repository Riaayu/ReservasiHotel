<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<section class="section">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><b>Perubahan Data Petugas</b></h2>
              <p>Silahkan gunakan form di bawah ini untuk merubah data</p>
              <form method="POST" action="/petugas/update"><b>
                    <div class="form-group">
                        <label class="font-weight-bold">Username</label>
                        <input type="text" name="txtInputUser"class="form-control" placeholder="Masukan username"value="<?=$detailPetugas[0]['username'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Lengkap</label>
                        <input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap petugas" value="<?=$detailPetugas[0]['nama_petugas'];?>"autocomplete="off" autofocous reaquire>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Password</label>
                        <input type="password" name="txtInputPassword" class="form-control" placeholder="Masukan password baru jika akan diganti" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Level Petugas</label>
                        <select name="selectLevel" class="form-control">
                            <option <?=$detailPetugas[0]['level']=='admin' ?
                            'selected':null;?> value="admin">Admin </option>
                            <option <?=$detailPetugas[0]['level']=='resepsionis' ?
                            'selected':null;?> value="resepsionis">Resepsionis</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Update Petugas</button>
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