<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <style>
    body {
      background-image: url('image/bghome.jpg');
      /* Ganti dengan path gambar Anda */
      background-size: cover;
      /* Untuk mengatur ukuran gambar agar mencakup seluruh halaman */
      background-repeat: no-repeat;
      /* Mencegah pengulangan gambar */
    }

    /* Gaya tambahan yang bisa Anda sesuaikan sesuai kebutuhan */
    .container {
      background-color: rgba(255, 255, 255, 0.8);
      /* Menambahkan lapisan transparan pada konten */
      padding: 20px;
      border-radius: 10px;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">
        <img src="image/logo.jpg" alt="" width="30" height="30" class="rounded-circle align-top">
        SMK KONOHA
      </a>
    </div>
  </nav>

  <div class="container mt-5 text-center">
    <h2>Selamat Datang di WEB Penerimaan Siswa Baru 2023</h2>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">VISI</h5>
            <p class="card-text">Menjadi lembaga pendidikan vokasional unggulan yang menghasilkan lulusan berkualitas, handal, dan siap kerja.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">MISI</h5>
            <p class="card-text">1.Memberikan pendidikan vokasional yang relevan dengan tuntutan industri.
              <br>2.Mengembangkan keterampilan teknis dan profesionalisme siswa.
              <br>3.Menyediakan lingkungan belajar yang kondusif dan inovatif.
              <br>4.Mendorong pengembangan karakter dan kepemimpinan.
              <br>5.Menjalin kemitraan dengan industri untuk penempatan kerja siswa.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-4">
      <a href="login.php">
        <button type="button" class="btn btn-dark text-white">Login</button></a>
      <a href="daftar.php">
        <button type="button" class="btn btn-dark text-white">Daftar</button></a>
    </div>
    <!-- Konten halaman home lainnya dapat ditambahkan di sini -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>