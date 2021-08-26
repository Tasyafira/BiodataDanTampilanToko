<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href = "Style2.css">
    <title>Formulir Biodata</title>


  </head>
  <body>
        <div class="px-1 py-2 my-2 text-center">
                <h2 class="display-5 fw-bold">Formulir Biodata</h2>
        <div class="px-1 py-2 my-2 text-center">
                <h5 class="lead mb-4">Siswa SMK Telkom Malang</h5>
        </div>
        </div>

        <form method="post"action="tampil2.php">
                
        <table>
                <tr>
                        <label><td>Nama Lengkap</td></label>
                        <td> : </td>
                        <td><input type="text" name="nama"></td>
                        </div>
                        </div>
                </tr>

                <tr>
                        <label><td>Jenis Kelamin</td></label>
                        <td> : </td>
                        <td>
                                <input type="radio" name="jenis_Kelamin" value = "Laki-Laki"> Laki-Laki
                                <input type="radio" name="jenis_Kelamin" value = "Perempuan"> Perempuan
                        </td>
                </tr>

                <tr>
                        <label><td>Agama</td></label>
                        <td> : </td>
                        <td>
                                <select name = "agama" >
                                        <option>--Agama--</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Budha</option>
                                        <option>Hindu</option>
                                        <option>Konghucu</option>
                                </select>

                        </td>
                </tr>

                <tr>
                        <label><td>Alamat</td></label>
                        <td> : </td>
                        <td><textarea name="alamat"></textarea></td>
                </tr>

                <tr>
                        <label><td>Tempat Lahir</td></label>
                        <td> : </td>
                        <td><input type="text" name="tempat_Lahir"></td>
                </tr>

                <tr>
                        <label><td>Tanggal Lahir</td></label>
                        <td> : </td>
                        <td><input type="date" name="tanggal_Lahir"></td>
                </tr>

                <tr>
                        <label><td>Hobi</td></label>
                        <td> : </td>
                        <td><input type="text" name="hobi"></td>
                </tr>

                <tr>
                        <label><td>Cita-Cita</td></label>
                        <td> : </td>
                        <td><input type="text" name="cita"></td>
                </tr>

                <tr>
                        <label><td>Usia</td></label>
                        <td> : </td>
                        <td><input type="text" name="usia"></td>
                </tr>

                <tr>
                        <label><td>Asal Sekolah</td></label>
                        <td> : </td>
                        <td><input type="text" name="asal_Sekolah"></td>
                </tr>

        </table>

        <br></br>

        <div class="col-lg-6 mx-auto">
        <button type="submit" value="Kirim">Kirim</button>
        <button type="reset" value="Reset">Reset</button>
        </div>

        </form>


        <footer class="pt-3 mt-4 text-muted border-top">
                &copy; Tasya Syafira Sinrani / XI RPL 2 / 37
        </footer>

</body>
</html>

