<?php 
    // //penamaan variable
    // $nama_barang = "Kopi Robusta";
    // $harga = 20000;
    // $stok = 30;

    // //tampilkan variable
    // echo "Nama Barang = $nama_barang<br/>";
    // echo "Harga Kopi = $harga<br/>";
    // echo "Jumlah Stok = $stok";

    // Membuat variable baru
    // $harga1 = 1000;
    // $nama_barang = "Kopi Robusta";
    // $harga2 = 20000;
    // $stok = 30;

    // //Mengambil Nilai dari Variable
    // echo "Harga 1 Roti Gepeng adalah $harga1 <br/>";
    // echo "Konsumen membeli $nama_barang dengan harga Rp$harga2 dengan jumlah $stok pcs";

    //===========================================
    // Variable Local
    // function var_local()
    // {
    //     $angka = 11;
    //     echo "Berikut adalah Variable Local = $angka";
    // }

    // //Memanggil function var_local()
    // var_local(); 

    //Variable Global
    /*$angka = 12;
    function var_global()
    {
        //
    }

    echo "Berikut adalah Variable Global = $angka";*/

    //Variable Static
    /*function var_static()
    {
        //Definisikan Variable
        static $angka = 5;
        $nomor = 2;

        //penambahan pada variable
        $angka++;
        $nomor++;

        //Output Variable
        echo $angka,"<br/>";
        echo $nomor,"<br/>";
    }

    //Panggil function var_static()
    var_static();
    var_static();
    var_static();*/
?>

<!-- <?php 
    $nama = 'Putri Ramadhani';
    $_umur = 8;
    echo 'Nama Siswa : '.$nama.' umurnya '.$_umur.' tahun ';
?>
<br/>
<?php print($nama); ?> -->

<!-- <?php 
    if(TRUE){
        echo "elki pakai y";
    } else {
        echo "bukan elki";
    }
?> -->

<?php 
    class Salam
    {
        var $hai;
    }

    // Membuat Object hello
    $hello = new Salam();

    // Memberikan value untuk property hai pada objek hello
    $hello->hai="Hello World!";

    // mencetak nilainya (Pengolahan Data)
    echo $hello->hai;

    

?>

