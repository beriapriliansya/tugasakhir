<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data Siswa Baru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Form Update Data Siswa Baru</h2>
        <form>
            <div class="mb-3">
                <label for="tahunAjaran" class="form-label">Tahun Ajaran</label>
                <input type="text" class="form-control" id="tahunAjaran" placeholder="Contoh: 2023/2024" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Contoh: Sistem Informasi" required>
            </div>
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap Lu" required>
            </div>
            <div class="mb-3">
                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" placeholder="Contoh : Lampung" required>
            </div>
            <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir" required>
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin" required>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" placeholder="Contoh: Islam" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
