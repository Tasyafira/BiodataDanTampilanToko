<!doctype html>
<html lang="en">
  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">	
      <link rel="stylesheet" type = "text/css" href = "style1.css">
      <title>TOKO HP</title>

  </head>
  <body>
  <div class="px-1 py-2 my-2 text-center">
                <h2 class="display-5 fw-bold">TOPSELL</h2>
        <div class="px-1 py-2 my-2 text-center">
                <h5 class="lead mb-4">Jl. Basuki Rahmat No.88, Kampungdalem, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur 66212</h5>
        </div>
        </div>
    <center>
        <div class="col-auto d-none d-lg-block">
              <img src = "S21.jpg" width="400" height="250">
              <img src = "A71.jpg" width="400" height="250">
              <img src = "iPhone.jpg" width="400" height="250">    
            </div>
            <br></br>
    </center>


    <?php
    $dataProduk = array(
        //nama, merk, harga, status
        array("Galaxy S21", "Samsung", 19000000, true),
        array("Galaxy A71", "Samsung", 6999000, false),
        array("iPhone 12 Pro Max", "Apple", 20999000, true),
        array("iPhone 12 Mini", "Apple", 10999000, false),
    );
    
    $n = count($dataProduk);
    echo "<div class=row>";
    for($i=0; $i<$n; $i++){
    echo "<div class = 'box1 col-md-3'>";
    echo $dataProduk[$i][1]."<br>";
    echo $dataProduk[$i][0]."<br>";
    echo "Rp. " .$dataProduk[$i][2]."<br>";
    $stok = $dataProduk[$i][3];
    if($stok == true){
        echo "Stok Tersedia";
        echo "<br></br>";
        echo "<button>Order</button>";
    }else{
        echo "Stok Habis";
    }
    echo "</div> <br>";
    }
    echo "</div>";
    ?>
</body>
</html>

