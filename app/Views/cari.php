<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
      <div class="container">
        <h2>Reservasi Kamar</h2>
        <p>Di HOTEL Hebat tersedia berbagai macam kamar yang sangat nyaman, bersih, wangi, desain kamar yang elegan dan di sertai fasilitas-fasilitas yang mudah di gunakan.  </p>
      </div>
    </div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

      
      <table class="table table-sm table-hovered">
<thead class="bg-light text-center">
<tr>
<th>Nama Pemesan</th>
<th>Email Pemesan</th>
<th>Nama Tamu</th>
<th>Tanggal Cek In</th>
<th>Tanggal Cek Out</th>
<th>Jumlah Kamar Dipesan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody  class="bg-light text-center">
<?php
$htmlData=null;
foreach ($tamu as $row){
$htmlData ='<tr>';
$htmlData .='<td>'.$row['nama_pemesan'].'</td>';
$htmlData .='<td>'.$row['email'].'</td>';
$htmlData .='<td>'.$row['nama_tamu'].'</td>';
$htmlData .='<td>'.$row['tgl_cek_in'].'</td>';
$htmlData .='<td>'.$row['tgl_cek_out'].'</td>';
$htmlData .='<td>'.$row['jumlah_kamar_dipesan'].'</td>';
$htmlData .='<td class="text-center">';
$htmlData .='<a href="/inv/'.$row['id_reservasi'].'" class="btn btn-info btn-sm mr-1">Print</a>';
$htmlData .='</td>';
$htmlData .='</tr>';
echo $htmlData;
}
?>
</tbody>
</table>
                </div>
    </section><!-- End Courses Section -->

  <?= $this->endSection() ?>