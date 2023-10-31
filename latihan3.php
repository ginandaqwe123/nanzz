<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello Web</title>
  </head>
  <body>
  <div class="container">
        <h1 class="text-left">Aplikasi Penilaian</h1>
        <p class="text-md-start">Program aplikasi sederhana untuk menghitung Penilaian</p>
    </div>
    <div class="container">
        <form action="" method="POST" name="Penilaian">
    <div class="mb-3">
        <label form="Nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label form="Kelas" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
        <div class="mb-3">
        <label form="Mapel" class="form-label">Mapel</label>
        <input type="text" class="form-control" id="mapel" name="mapel">
        </div>
        <div class="mb-3">
        <label form="nilai_A" class="form-label">Nilai Adaptif</label>
        <input type="text" class="form-control" id="nilai_A" name="nilai_A">
        </div>
        <div class="mb-3">
        <label form="Nilai_P" class="form-label">Nilai Produktif</label>
        <input type="text" class="form-control" id="nilai_P" name="nilai_P">
        </div>
        <div class="mb-3">
        <label form="nilai_M" class="form-label">Nilai Mulok</label>
        <input type="text" class="form-control" id="nilai_M" name="nilai_M">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
    </form>

  <div class="container">
    </div>
    <?php 
 if(isset($_POST['submit'])){
     $nama = $_POST['nama'];
     $kelas = $_POST['kelas'];
     $nilai_A = $_POST['nilai_A'];
     $nilai_P = $_POST['nilai_P'];
     $nilai_M = $_POST['nilai_M'];

     if ($nilai_A > 90){
       $gradea = "A";
       $keta = "Lulus";
     } else if ($nilai_A > 80) {
      $gradea = "B";
      $keta = "Lulus";
     } else if ($nilai_A > 70) {
      $gradea = "C";
      $keta = "Lulus";
     } else if ($nilai_A > 60) {
      $gradea = "D";
      $keta = "Lulus";
    } else if ($nilai_A > 50) {
      $gradea = "E";
      $keta = "Tidak Lulus";
     }

     if ($nilai_P > 90){
       $gradep = "A";
       $ketp = "Lulus";
     } else if ($nilai_P > 80) {
      $gradep = "B";
      $ketp = "Lulus";
     } else if ($nilai_P > 70) {
      $gradep = "C";
      $ketp = "Lulus";
     } else if ($nilai_P > 60) {
      $gradep = "D";
      $ketp = "Tidak Lulus";
     }else if ($nilai_P > 50) {
      $gradep = "E";
      $ketp = "Tidak Lulus";
     }

     if ($nilai_M > 90){
      $gradem = "A";
      $ketm = "Lulus";
     } else if ($nilai_M > 80) {
      $gradem = "B";
      $ketm = "Lulus";
     } else if ($nilai_M > 70) {
      $gradem = "C";
      $ketm = "Lulus";
     } else if ($nilai_M > 60) {
      $gradem = "D";
      $ketm = "Lulus";
     } else if ($nilai_M > 50) {
      $gradem = "E";
      $ketm = "Tidak Lulus";
    }

    $rata_rata = ($nilai_A + $nilai_P + $nilai_M) / 3;

  ?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">mapel</th>
      <th scope="col">grade</th>
      <th scope="col">keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Produktif</td>
      <td> <?php echo $nilai_A ?> </td>
      <td> <?php echo $gradea ?></td>
      <td> <?php echo $keta ?> </td>
    </tr> 
    <tr>
      <th scope="row">2</th>
      <td>Adaptif</td>
      <td> <?php echo $nilai_P ?> </td>
      <td> <?php echo $gradep ?> </td>
      <td> <?php echo $ketp ?> </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mulok</td>
      <td> <?php echo $nilai_M ?> </td>
      <td> <?php echo $gradem ?> </td>
      <td> <?php echo $ketm ?> </td>
    </tr>
  </tbody>
</table>
  </div>
<?php } ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>