<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EeeGame</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">


</head>

<body>
    <div class="container border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">EeeGame</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center mb-md-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="home_product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home_about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://api.whatsapp.com/send?phone=+6282278765871">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="text-end">
                    <a class="btn btn-outline-primary me-2" href="login.php">Login</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container pt-4 pb-4 border-bottom">
        <h2 class="text-center text-decoration-underline mb-3">Product</h2>
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" name="cari" class="form-control" placeholder="Seaching..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
        <?php
        include "database/koneksi.php   ";
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : " . $cari . "</b>";
        }
        ?>

        <div class="row row-cols-1 row-cols-md-3 g-4 my-3 px-3">
            <?php
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $sql = "SELECT * FROM tbl_produk WHERE nama_produk LIKE'%" . $cari . "%'";
                $tampil = mysqli_query($con, $sql);
            } else {
                $sql = "SELECT * FROM tbl_produk ORDER BY id_produk DESC";
                $tampil = mysqli_query($con, $sql);
            }
            $no = 1;
            while ($x = mysqli_fetch_array($tampil)) {
            ?>
                <?php $no++; ?>
                <div class="col">
                    <div class="card">
                        <p class="mt-4 px-5 p-2 rounded position-absolute text-white " style="background-color: rgba(246, 186, 35, 0.81);">New </p>
                        <div class="text-center p-3 border-bottom">
                            <img src="dashboard/gambar/<?php echo $x['foto_produk']; ?>" width="200px" class=" img-thumbnail border-0" alt="...">
                        </div>
                        <div class="card-body mt-3">
                            <h5 class="card-title"><?php echo $x['nama_produk']; ?></h5>
                            <p class="card-text text-secondary"><?php echo $x['detail_produk']; ?>
                            </p>
                            <p class="card-text fs-5 text-danger">
                                <?php echo "Rp. " . number_format($x['harga_produk']); ?>
                            </p>
                            <a href="https://api.whatsapp.com/send?phone=+6282278765871" target="blank" class="nav-link px-5  rounded mt-5 text-center text-white btn-primary">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


    </div>

    <footer class="container pt-4">
        <div class="row">
            <div class="col-12 col-md">
                <h3>EeeGame</h3>
                <small class="d-block mb-3 text-muted">&copy; 2021</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="boostrap/js/bootstrap.min.js"></script>
</body>

</html>