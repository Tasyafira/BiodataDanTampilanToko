<?php
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'],
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'],
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'],
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'],

);

echo $siswa[0]['nama']."<br>";
echo $siswa[0]['kelas']."<br>";
echo $siswa[0]['jurusan']."<br>";


$n = count($siswa);
for($i=0; $i<$n; $i++){
    foreach($siswa[$i] as $key => $value){
        echo $value . "<br>";
        //nama : Firdaus
    }
}

?>