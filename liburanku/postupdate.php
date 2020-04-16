<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Update</title>

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
        <a class="nav-link" href="shop/index.php">Shop</a>
      </li>
    </ul>
  </div>
</nav>

<?php

include './koneksi.php';

$email = $_POST['inputEmail'];
$Password = $_POST['inputPassword'];
$Address = $_POST['inputAddress'];
$Name = $_POST['inputName'];


$query = "UPDATE akun SET inputPassword= '$Password', inputAddress= '$Address', inputName= '$Name' WHERE inputEmail = '$email' ";

$result= mysqli_query($connect,$query);

$row= mysqli_affected_rows($connect);

if($row > 0){
    echo "Update Data Berhasil <br>";
} else{
    echo "Update Data Gagal <br>";
    echo "Error description: " . mysqli_error($result);
}
echo "<button class='btn btn-dark'><a href='manage.php'>Lihat Data</a></button>";
?>

</body>
</html>