<?php 
                    include_once 'controllers/class_produk.php';
                    // ciptakan object dari class Produk
                    $id = $_REQUEST['id'];
                    $obj = new Produk($dbh);
                    // panggil method tampilkan data produk
                    $rs = $obj->getProduk($id);
                  ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                            <div class="col-md-4">
                                <img src="dist/img/<?= $rs->foto; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $rs->nama; ?></h5>
                                <p class="card-text">
                                    Kode : <?= $rs->kode; ?>
                                    <br/>Kondisi : <?= $rs->kondisi; ?>
                                    <br/>Harga : Rp.<?= number_format($rs->harga,0,',','.'); ?>
                                    <br/>Stok : <?= $rs->stok; ?>
                                    <br/>Kategori : <?= $rs->kategori; ?>
                                </p>
                                <a href="index.php" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                     </div>
                </div>
