<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document EeeGame</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">
    <p class="fs-4 fw-bold mt-3">PROGRAM STUDI TEKNIK INFORMATIKA</p>
    <p class="fs-4 fw-bold">DAFTAR GAME PEMROGRAMAN WEB DINAMIS</p>
  </div>

  <?php
  include '../database/koneksi.php';
  ?>

  <table class="table table-bordered container">
    <thead>
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">KODE PRODUK</th>
        <th scope="col">NAMA BARANG</th>
        <th scope="col">HARGA PRODUK</th>
        <th scope="col">DETAIL PRODUK</th>
        <th scope="col">CREATED PRODUK</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $sql = mysqli_query($con, "select * from tbl_produk");
      while ($data = mysqli_fetch_array($sql)) {
      ?>
        <tr>
          <td class="text-center"><?php echo $no++; ?></td>
          <td><?php echo $data['kode_produk']; ?></td>
          <td><?php echo $data['nama_produk']; ?></td>
          <td><?php echo $data['harga_produk']; ?></td>
          <td><?php echo $data['detail_produk']; ?></td>
          <td><?php echo $data['created_produk']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <script>
    window.print();
  </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>