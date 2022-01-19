<?php
include "../database/koneksi.php";
header('Content-Type: text/xml');
$query = "SELECT * FROM tbl_produk";
$hasil = mysqli_query($con, $query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil)) {
    echo "<Produk>";
    echo "<kode_produk>", $data['kode_produk'], "</kode_produk>";
    echo "<nama_produk>", $data['nama_produk'], "</nama_produk>";
    echo "<harga_produk>", $data['harga_produk'], "</harga_produk>";
    echo "<detail_produk>", $data['detail_produk'], "</detail_produk>";
    echo "<created_produk>", $data['created_produk'], "</created_produk>";
    echo "</Produk>";
}
echo "</data>";
