<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <?php

  $nim = $_GET['nim'];
  $nama = $_GET['nama_lengkap'];
  $matkul = $_GET['matkul'];
  $uts = $_GET['uts'];
  $uas = $_GET['uas'];
  $tugas = $_GET['praktik'];


  $nsNew  = ['nim' => $nim, 'nama' => $nama, 'matkul' => $matkul, 'uts' => $uts, 'uas' => $uas, 'tugas' => $tugas];
  $ns1 = ['nim' => '0110110006', 'nama' => 'Wahyu Adi Pramudya', 'matkul' => 'Pemrograman WEB2', 'uts' => 70, 'uas' => 74, 'tugas' => 80];
  $ns2 = ['nim' => '0112110013', 'nama' => 'Muhammad Nassuha Muntaha', 'matkul' => 'Pemrograman WEB2', 'uts' => 80, 'uas' => 90, 'tugas' => 88];
  $ns3 = ['nim' => '0113110027', 'nama' => 'Muhammad Al Hafizh', 'matkul' => 'Pemrograman WEB2', 'uts' => 85, 'uas' => 90, 'tugas' => 90];
  $ns4 = ['nim' => '0113110013', 'nama' => 'Rian', 'matkul' => 'Pemrograman WEB2', 'uts' => 90, 'uas' => 100, 'tugas' => 100];
  $ns_arr = [$ns1, $ns2, $ns3, $ns4];
  array_push($ns_arr, $nsNew);

  ?>
  <div class="container">
    <div class="data">
      <h1>Data Nilai Mahasiswa</h1>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Mata Kuliah </th>
            <th scope="col">UTS </th>
            <th scope="col">UAS</th>
            <th scope="col">Praktikum</th>
            <th scope="col">Nilai Akhir</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($ns_arr as $row) :
          ?>
            <tr>
              <th scope="row"><?= $nomor ?></th>
              <td><?= $row['nim'] ?></td>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['matkul'] ?></td>
              <td><?= $row['uts'] ?></td>
              <td><?= $row['uas'] ?></td>
              <td><?= $row['tugas'] ?></td>
              <td><?= ($row['uts'] * 30 / 100) + ($row['uas'] * 35 / 100) + ($row['tugas'] * 35 / 100) ?></td>
            </tr>
          <?php
            $nomor++;
          endforeach;
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>