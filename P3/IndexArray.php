<?php 
   // Membuat Indexed Array
   $kendaraan = ["Mobil", "Sepeda", "Truk", "Motor", "Bus"];
   // Menampilkan Output
   echo "Nama-nama Alat Transportasi: </br>";
   echo $kendaraan[0],"</br>";
   echo $kendaraan[1],"</br>";
   echo $kendaraan[2],"</br>";
   echo $kendaraan[3],"</br>";
   echo $kendaraan[4],"</br><br><br>";

   // Quiz, 
   $hewan = ["Kucing", 
            "Kelinci", 
            "Kambing", 
            "Sapi", 
            "Keledai", 
            "Banteng", 
            "Iguana",
            "Buaya",
            "Kancil",
            "Kadal"];

    echo "Nama-nama Hewan:","<br>";
    echo $hewan[5],"<br>";//ilman
    echo $hewan[7],"<br>";//Abil
    echo $hewan[0],"<br>";//Hilman
    echo $hewan[6],"<br>";//Irsyad
    echo $hewan[1],"<br>";//Hasan
    echo $hewan[3],"<br>";//Baihaqi
    echo $hewan[9],"<br>";//Erik
    echo $hewan[2],"<br>";//Nanto
    echo $hewan[4],"<br>";//Nadvi
    echo $hewan[8],"<br><br><br>";

    $_fruits = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    $jml_data = count($_fruits);

    for($i = 0;$i<$jml_data;$i++){
        echo "Buah Index - "." adalah ".$_fruits[$i];
        echo "<br>";
    }

?>
