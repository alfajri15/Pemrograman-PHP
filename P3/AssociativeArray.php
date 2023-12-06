<?php 
    // Membuat Associative Array
    $login = [
        "id" => 786,
        "pass" => 123,
        "role" => "admin",
        "active" => 1,
        "level" => 1
    ];

    // Menampilkan Output
    echo "ID = ",$login["id"],"<br>";
    echo "Password = ",$login["pass"],"<br>";
    echo "Role = ",$login["role"],"<br>";
    echo "Status = ",$login["active"],"<br>";
    echo "Level = ",$login["level"],"<br><br><br>";

    //=======================
    // Loop Array Associative
    // Membuat Array Associative
    $umur = [
        "Ahmad" => 20,
        "Ali" => 21,
        "Dewi" => 19
    ];

    // Loop Associative Array
    foreach($umur as $key => $val){
        echo "Key : ".$key.", Umur ".$val;
        echo "<br>";
    }
?>
