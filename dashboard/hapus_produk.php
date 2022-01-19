<?php
include "../database/koneksi.php";

$idProduk = $_GET['id_produk'];

$query = "DELETE FROM tbl_produk WHERE id_produk = '$idProduk'";
$hasil = mysqli_query($con, $query);

if ($hasil) {
    header('location:new_product.php');
} else {
    echo "<script>Alert('Hapus data gagal');</script>";
}
