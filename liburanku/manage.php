<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #50BFF7;">
  <img src="logo.png" height="100" width="100">
  <h1>Kick's Store</h1>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">Kick's Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="shop/index.php">Shop<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./manage.php">Account Managemen</a>
      </li>
    </ul>
  </div>
</nav>
<center><h1>DATA PENGGUNA</h1>
    <table border="3" width="50%"></center>
    <tr>
    <th bgcolor="#3300CC">Email</th>
    <th bgcolor="#3300CC">Address</th>
    <th bgcolor="#3300CC">Username</th>
    <th bgcolor="#3300CC">Action</th>
    </tr>
<?php
include "koneksi.php";
  $query = "SELECT * FROM akun";
  $sql = mysqli_query($connect,$query);

  while($data = mysqli_fetch_array($sql)){
      echo "<tr>";
      echo "<td>".$data['inputEmail']. "</td>";
      echo "<td>".$data['inputAddress']. "</td>";
      echo "<td>".$data['inputName']. "</td>";
      echo "<td><button><a href='update.php?inputEmail=".$data['inputEmail']."'>Ubah<a></button>
      <button><a href='delete.php?inputEmail=".$data['inputEmail']."' 
      onclick = 'return confirm (\"Apakah Anda Yakin Ingin Menghapus data?\")'>Hapus<a></button></td>";
      echo "</tr>";
    }
?> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>