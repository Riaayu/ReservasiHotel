<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Hotel Hebat</h1>
      <h2>Selamat Datang di Website Hotel Hebat</h2>
      <p>
           
    
    <form action="/cek" method="post" >
        <div>
        <input type="text" class="form" placeholder="Masukan Email Tamu" name="keyword" id="keyword" required>
        <button class="btn-get-started" type="submit" id="submit">Cek Reservasi</button>
        </div>
</div>
  </section><!-- End Hero -->
  <?= $this->endSection() ?>