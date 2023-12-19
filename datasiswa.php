<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem Sekolah</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
        }

        #sidebar h2 {
            border-bottom: 2px solid white;
            padding-bottom: 10px;
            cursor: pointer;
        }

        #sidebar a {
            color: white;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        #sidebar a:hover {
            background-color: #2c3135;
            color: #ffc107;
            /* Warna kuning, bisa disesuaikan */
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block">
                <div class="position-sticky">
                    <h2 class="text-center mb-4">Sistem Sekolah</h2>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dataguru.php">
                                Data Guru
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datasiswa.php">
                                Data Siswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Mata Pelajaran
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tadika Mesra</h1>
                </div>

                <!-- Tabel Siswa -->
                <div class="table-responsive">
                    <h2>Tabel Siswa</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tahun Ajaran</th>
                                <th>Jurusan</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Nama Orang tua</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2023/2024</td>
                                <td>Teknik Informatika</td>
                                <td>John Doe</td>
                                <td>Laki-laki</td>
                                <td>12A</td>
                                <td>Mary Doe</td>
                                <td>Jakarta, 01 Januari 2000</td>
                                <td>Islam</td>
                                <td>Jl. Contoh No. 123</td>
                                <td><a href="edit.php?id=2">Update</a> | <a href="hapus.php?id=2">Hapus</a></td>
                            </tr>
                            <!-- Tambahkan baris lain sesuai dengan data siswa -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>