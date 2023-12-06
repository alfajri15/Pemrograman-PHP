<?php 
    // membuat Multidimensi Array
    $kendaraan = [
        "transportasi" => ["Mobil","Sepeda","Truk","Motor","Bus"],
        "Mobil" => ["Merk" => "Toyota","Type" => "Vios","Year" => 2016],
        "Motor" => ["Honda","Yamaha","Suzuki"]
    ];

    // Menampilkan Output
    echo "Ini Array Kendaraan <br>";
    echo "<br>",$kendaraan["transportasi"][0];
    echo "<br><br>";
    //=========================
    // Loop Array Multidimensi
    $ar_jus = [
        ["buah" => "Mangga","harga"=>8000],
        ["buah"=> "Alpukat","harga"=>10000],
        ["buah"=> "Durian","harga"=>14000]
    ];

    foreach($ar_jus as $jus){
        echo " Jus ".$jus["buah"]." harganya : ".$jus["harga"]."<br>";  
    }

?>
