<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">FasilitasHotel</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Fasilitas Hotel</h5>
              <p>Berikut ini daftar fasilitas hotel yang tersedia di HOTEL Hebat</p>
              <p> <a href="/fh/tambah" class="btn btn-primary btn-sm">Tambah Fasilitas</a> </p>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $htmlData=null;
                    foreach ($ListFasilitashotel as $row){
                    $htmlData ='<tr>';
                    $htmlData .='<td class="text-center">'.$row['nama_fasilitas'].'</td>';
                    $htmlData .='<td class="text-center">'.$row['deskripsi'].'</td>';
                    $htmlData .='<td>'.'<img src=" '.base_url("/gambar/".$row['foto']).'" widht="150">'.'</td>';
                    $htmlData .='<td class="text-center">';
                    $htmlData .='<a href="/fh/edit/'.$row['id_fasilitas_hotel'].'" class="btn btn-info btn-sm mr-1">Edit</a>&nbsp';
                    $htmlData .='<a href="/fh/editfoto/'.$row['id_fasilitas_hotel'].'" class="btn btn-info btn-sm mr-1">Edit Foto</a>&nbsp';
                    $htmlData .='<a href="/fh/hapus/'.$row['id_fasilitas_hotel'].'" class="btn btn-danger btn-sm">Hapus</a>';
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