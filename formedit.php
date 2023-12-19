<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA - Edit Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">UPDATE DATA SISWA</h2>
                <form action="proses_edit.php" method="post">
                    <div class="mb-3">
                        <label for="namaSiswa" class="form-label">Nama Siswa:</label>
                        <input type="text" class="form-control" id="namaSiswa" name="namaSiswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin:</label>
                        <select class="form-select" id="jenisKelamin" name="jenisKelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas:</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                    </div>

                    <div class="mb-3">
                        <label for="namaOrangTua" class="form-label">Nama Orang Tua:</label>
                        <input type="text" class="form-control" id="namaOrangTua" name="namaOrangTua" required>
                    </div>

                    <div class="mb-3">
                        <label for="tempatTanggalLahir" class="form-label">Tempat Tanggal Lahir:</label>
                        <input type="text" class="form-control" id="tempatTanggalLahir" name="tempatTanggalLahir" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
