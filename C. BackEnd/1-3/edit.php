<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <title>Pengadaan Barang</title>
</head>
<body>
    <?php
        //call connection
        include "dbconnection.php";

        //makke query SELECT FROM WHERE
        $query = "SELECT * FROM tb_produk WHERE kd_barang ='$_GET[id]'";
        
        //run query
        $barang = mysqli_query ($db_connection, $query);

        //extract data from query result
        $data = mysqli_fetch_assoc ($barang);
    ?>
    <div class="container">
        <div class="card_container">
            
            <form  method="POST" action="update.php" enctype="multipart/form-data" >
                <div>
                    <h2 class="text-center">Edit Data Item</h2>
                    <p class="hint-text">Fill below form.</p>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?= ($data['nama_barang'])?>" required="true">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Harga HPP</label>
                    <input type="number" class="form-control" name="harga_hpp" value="<?= ($data['harga_hpp'])?>" required="true"">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Harga Retail</label>
                    <input type="number" class="form-control" name="harga_retail" value="<?= ($data['harga_retail'])?>" required="true"">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Harga Distributor</label>
                    <input type="number" class="form-control" name="harga_distributor" value="<?= ($data['harga_distributor'])?>" required="true"">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Gambar Sekarang</label>
                    <img src="<?= ($data['gambar'])?>" alt="" width="50" height="50">
                    <input type="file" class="form-control" name="new_gambar">
                    <!-- <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span> -->
                </div>      
                
                
                <div class="mb-1">
                        <input type="submit" class="btn btn-success" name="save" value="SAVE">
                        <input type="reset" class="btn btn-danger" name="reset" value="RESET">
                        <input type="hidden" name="kd_barang" value="<?=$data['kd_barang']?>">
                        <input type="hidden" name="gambar" value="<?=$data['gambar']?>">
                    </div>
                </form>
                <a href="list_barang.php">CANCEL</a>

            </form>

        </div>
    </div>
</body>
</html>