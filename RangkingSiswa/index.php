<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>RANGKING XI RPL</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-primary"  href="#">Ranking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Input Data</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.html">Daftar Ranking</a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
        <div class="row">
            <div class="col-4">
                <h3>Input Data</h3>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" name="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nilai">Nilai</label>
                        <input id="nilai" type="number" name="nilai" class="form-control">
                    </div>
                </form>
                <button class="btn btn-primary" type="submit">KIRIM</button>
                <hr>
            </div>
            <div class="col-8">
                <h3>Rangking Siswa</h3>
                <table border="1" class="table-bordered table text-center">
                    <thead class="table-secondary">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $key => $d): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['score'] ?></td>
                        </tr>
                        <?php endforeach ?> 
                        </tbody>
                    <tfoot class="table-secondary">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
<footer class="p-3 mb-2 bg-primary text-white text-center">
    <p class="fw-bold">© Copyright 2023 Handhika Tia Saputro</p>
</footer>
</body>
</html>