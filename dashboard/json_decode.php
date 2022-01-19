<?php
$url = "http://localhost/EeeGame/dashboard/cetak_ws.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
    echo "<p>";
    echo "Kode Produk : " . $r->kode_produk . "<br />";
    echo "Nama Produk : " . $r->nama_produk . "<br />";
    echo "Harga Produk : " . $r->harga_produk . "<br />";
    echo "Detail Produk : " . $r->detail_produk . "<br />";
    echo "Created Produk : " . $r->created_produk . "<br />";
    echo "</p>";
}
