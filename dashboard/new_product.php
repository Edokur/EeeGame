<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Data</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">

    <!-- Validasi PHP -->
    <?php
    include "../database/koneksi.php";
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../login.php");
    }
    ?>
    <?php
    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'gagal_ekstensi') {
    ?>
            <div class="alert alert-danger alert-dismissible show fade text-center">
                <h4>Peringatan</h4>
                <p>Ekstensi Tidak Diperbolehkan</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        } elseif ($_GET['alert'] == "gagal_ukuran") {
        ?>
            <div class="alert alert-warning alert-dismissible show fade text-center">
                <h4>Peringatan</h4>
                <p>Ukuran File Terlalu Besar</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        } elseif ($_GET['alert'] == "berhasil") {
        ?>
            <div class="alert alert-success alert-dismissible show fade text-center">
                <h4>Succes</h4>
                <p>Berhasil Disimpan</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
        }
    }
    ?>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                                <h2>EeeGame</h2>
                                <h6>Welcome <?php echo $_SESSION['emailUser']; ?></h6>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="index_dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item active">
                            <a href="new_product.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Kelola Data</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Keluar</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Followers</h6>
                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Following</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Form Data</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="col bg-white p-2 rounded">
                                            <form action="new_proses.php" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Kode Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="kode_Produk" placeholder="Masukan Kode Produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_Produk" placeholder="Masukan Nama Produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Harga Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="harga_Produk" placeholder="Masukan Harga Produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Stock Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="stock_Produk" placeholder="Masukan Stock Produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="floatingTextarea2" class="form-label">Detail Produk</label>
                                                    <textarea class="form-control" placeholder="Masukan Detail Produk" name="detail_Produk" id="floatingTextarea2" style="height: 200px"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Created Produk</label>
                                                    <input type="date" class="form-control" id="exampleFormControlInput1" name="created_Produk" placeholder="Masukan Waktu Produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Gambar Produk</label>
                                                    <input class="form-control text-center" type="file" id="formFile" name="gambar_Produk">
                                                    <p class="text-danger p-3">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 text-center">
                                                        <button type="Reset" class="btn btn-danger my-3 text-center px-5">Reset Data</button>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <input type="submit" value="Kirim data" class="btn btn-primary my-3 text-center px-5">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>All Data</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table border bg-white text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Foto Produk</th>
                                                    <th scope="col">Kode Produk</th>
                                                    <th scope="col">Nama Produk</th>
                                                    <th scope="col">Harga Produk</th>
                                                    <th scope="col">Stock Produk</th>
                                                    <th scope="col">Detail Produk</th>
                                                    <th scope="col">Created Produk</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $batas = 10;
                                                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                                                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
                                                $previous = $halaman - 1;
                                                $next = $halaman + 1;
                                                $data = mysqli_query($con, "SELECT * FROM tbl_produk");
                                                $jumlah_data = mysqli_num_rows($data);
                                                $total_halaman = ceil($jumlah_data / $batas);

                                                if (isset($_GET['cari'])) {
                                                    $cari = $_GET['cari'];
                                                    $data = mysqli_query($con, "SELECT * FROM tbl_produk WHERE nama_produk like '%" . $cari . "%'");
                                                } else {
                                                    $data = mysqli_query($con, "SELECT * FROM tbl_produk");
                                                }

                                                $sql = "SELECT * FROM tbl_produk ORDER BY id_produk DESC LIMIT $halaman_awal, $batas";
                                                $no = $halaman_awal + 1;
                                                $data = mysqli_query($con, $sql);
                                                while ($x = mysqli_fetch_array($data)) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><img src="gambar/<?php echo $x['foto_produk']; ?>" class="img-thumbnail" width="100px" alt=""></td>
                                                        <td><?php echo $x['kode_produk']; ?></td>
                                                        <td><?php echo $x['nama_produk']; ?></td>
                                                        <td><?php echo "Rp. " . number_format($x['harga_produk']); ?></td>
                                                        <td><?php echo $x['stock_produk']; ?></td>
                                                        <td><?php echo $x['detail_produk']; ?></td>
                                                        <td><?php echo $x['created_produk']; ?></td>
                                                        <td>
                                                            <a href="update_produk.php?id_produk=<?php echo $x['id_produk']; ?>">EDIT</a>
                                                            <a href="hapus_produk.php?id_produk=<?php echo $x['id_produk']; ?>">HAPUS</a>
                                                            <a target="_blank" href="cetak_produk.php?id_produk=<?php echo $x['id_produk']; ?>">PDF</a> ||
                                                            <a href="cetak_ws.php?id_produk=<?php echo $x['id_produk']; ?>">WS</a> ||
                                                            <a href="cetak_xml.php?id_produk=<?php echo $x['id_produk']; ?>">XML</a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>`
                                        <nav>
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" <?php if ($halaman > 1) {
                                                                                echo "href='?halaman=$Previous'";
                                                                            } ?>>Previous</a>
                                                </li>
                                                <?php
                                                for ($x = 1; $x <= $total_halaman; $x++) {
                                                ?>
                                                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                                <?php
                                                }
                                                ?>
                                                <li class="page-item">
                                                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                                echo "href='?halaman=$next'";
                                                                            } ?>>Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- /.container-fluid -->

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; EeeCompany</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://www.instagram.com/edokrrnawan_/">Edo Kurniawan</a></p>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>

    <script src="../assets/js/main.js"></script>
</body>

</html>