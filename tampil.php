<?php
// menangkap data nama dengan method get
$nama = $_GET['nama'];
// menangkap data usia dengan method get
$usia = $_GET['usia'];
$hobi = $_GET['hobi'];
 // menampilkan data nama
echo "Nama kalian adalah " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Usia kalian adalah " . $usia;
echo "<br> Hobi kalian adalah " . $hobi;
?>

