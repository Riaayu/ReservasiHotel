<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Kamar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Kamar</h5>
              <p>Berikut ini daftar kamar yang tersedia di HOTEL Hebat</p>
              <p> <a href="/kamar/tambah" class="btn btn-primary btn-sm">Tambah Kamar</a> </p>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No Kamar</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Fasilitas Kamar</th>
                    <th scope="col">Fasilitas Kamar</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tarif</th>
                    <th scope="col">Jumlah Kamar</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $htmlData=null;
                    foreach ($ListKamar as $row){
                    $htmlData ='<tr>';
                    $htmlData .='<td class="text-center">'.$row['no_kamar'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['tipe_kamar'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['id_fasilitas_kamar'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['deskripsi'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['tarif'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['jumlah_kamar'].'</td>';
                    $htmlData .='<td class="text-center">'.'<img src=" '.base_url("/gambar/".$row['foto']).'" widht="150">'.'</td>';
                    $htmlData .='<td class="text-center">';
                    $htmlData .='<a href="/kamar/edit/'.$row['id_kamar'].'" class="btn btn-info btn-sm mr-1">Edit</a>&nbsp';
                    $htmlData .='<a href="/kamar/editfoto/'.$row['id_kamar'].'" class="btn btn-info btn-sm mr-1">Edit Foto</a>&nbsp';
                    $htmlData .='<a href="/kamar/hapus/'.$row['id_kamar'].'" class="btn btn-danger btn-sm">Hapus</a>';
                    $htmlData .='</td>';
                    $htmlData .='</tr>';
                    echo $htmlData;
                    }
                ?>                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?= $this->endSection() ?>