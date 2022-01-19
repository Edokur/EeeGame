<?php
// memanggil library FPDF
require('fpdf184/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Times', 'B', 16);
// mencetak string
$pdf->Cell(300, 7, 'PROGRAM STUDI TEKNIK INFORMATIKA', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(300, 7, 'DAFTAR GAME PEMROGRAMAN WEB DINAMIS', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(8, 6, 'NO', 1, 0, 'C');
$pdf->Cell(40, 6, 'KODE PRODUK', 1, 0, 'C');
$pdf->Cell(50, 6, 'NAMA PRODUK', 1, 0, 'C');
$pdf->Cell(42, 6, 'HARGA PRODUK', 1, 0, 'C');
$pdf->Cell(90, 6, 'DETAIL PRODUK', 1, 0, 'C');
$pdf->Cell(45, 6, 'CREATED PRODUK', 1, 1, 'C');
$pdf->SetFont('Times', '', 10);
$no = 1;
include "../database/koneksi.php";
$SQL = mysqli_query($con, "select * from tbl_produk");
while ($row = mysqli_fetch_array($SQL)) {
    $pdf->Cell(8, 6, $no++, 1, 0, 'C',);
    $pdf->Cell(40, 6, $row['kode_produk'], 1, 0, 'C',);
    $pdf->Cell(50, 6, $row['nama_produk'], 1, 0, 'C');
    $pdf->Cell(42, 6, "Rp. " . number_format($row['harga_produk']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row['detail_produk'], 1, 0, 'L');
    $pdf->Cell(45, 6, $row['created_produk'], 1, 1, 'C');
}
$pdf->Output();
