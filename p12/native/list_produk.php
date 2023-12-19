<?php 
    require_once 'dbkoneksi.php';
    require_once 'class_produk.php';

    $obj = new produk($dbh);
    $rsproduk = $obj->getAllProduk();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
</head>
<body>
    <h3>Daftar Produk</h3>    
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nomor = 1;
                foreach($rsproduk as $row){
                    echo '<tr><td align="center">'.$nomor.'</td>
                    <td>'.$row->nama.'</td>
                    <td align="center">'.$row->stok.'</td>
                    <td>'.$row->harga.'</td>
                    <td align="center">
                    <a href = "edit.php?id='.$row->id.'">Edit</a> |
                    <a href = "delete.php?id='.$row->id.'">Del</a>
                    </td></tr>';
                    $nomor++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>
