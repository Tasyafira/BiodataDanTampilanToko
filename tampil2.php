<!doctype html>
<html lang="en">
  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">	
      <link rel="Stylesheet" type = "text/css" href = "Style2.css">
      <title>Formulir Biodata</title>

  </head>
  <body>
      <center>
<?php
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_Kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$tempatLahir = $_POST['tempat_Lahir'];
$tanggalLahir = $_POST['tanggal_Lahir'];
$hobi = $_POST['hobi'];
$cita = $_POST['cita'];
$usia = $_POST['usia'];
$asalSekolah = $_POST['asal_Sekolah'];


// menampilkan data 
echo "Nama : "  . $nama; 
echo "<br/>";
echo "Jenis kelamin : " . $jenisKelamin;
echo "<br/>";
echo "Agama : " . $agama;
echo "<br/>";
echo "Alamat : " . $alamat;
echo "<br/>";
echo "Tempat Lahir : " . $tempatLahir;
echo "<br/>";
echo "Tanggal Lahir : " . $tanggalLahir;
echo "<br/>";
echo "Hobi : " . $hobi;
echo "<br/>";
echo "Cita-Cita : " . $cita;
echo "<br/>";
echo "Usia : " . $usia;
echo "<br/>";
echo "Asal Sekolah : " . $asalSekolah;
echo "<br/>";
?>
<center>
</body>
</html>