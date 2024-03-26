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
    <div class="container">
        <div class="card_container">
            
            <div class="card-body">
                <a class="btn btn-primary mb-3" role="button" href="add_barang.php"><span class="glyphicon glyphicon-plus"></span>ADD</a>
                <table class="table table-striped text-center" cellspacing="0" cellpadding="10">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga HPP</th>
                        <th>Harga Retail</th>
                        <th>Harga Distributor</th>
                        <th>Gambar</th>
                        <th colspan="2">Action</th>
                    </tr>

                    <?php
                        include "dbconnection.php"; //call connection
                        $query = "SELECT * FROM tb_produk"; //make a sql query
                        $barangs = mysqli_query($db_connection, $query); //run query
                        
                        $i = 1;
                        foreach ($barangs as $barang) : //loop to extract data from database
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?= $barang['nama_barang']; ?></a></td>
                        <td><?= $barang['harga_hpp']; ?></td>
                        <td><?= $barang['harga_retail'] ?></td>
                        <td><?= $barang['harga_distributor'] ?></td>
                        <td><img src="<?= $barang['gambar'] ?>" width="50" height="50"></td>
                        <td><a class="btn btn-outline-warning" href="edit.php?id=<?= $barang['kd_barang'] ?>">Edit</a></td>
                        <td><a class="btn btn-outline-danger" href="delete.php?id=<?= $barang['kd_barang'] ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

        </div>
    </div>
    <a class="btn btn-outline-danger" href="logout.php" onclick="return confirm('Are you sure?')">Log Out</a>
</body>
</html>