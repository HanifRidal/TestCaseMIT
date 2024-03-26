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
            
            <form  method="POST" action="create.php" enctype="multipart/form-data" >
                <div>
                    <h2 class="text-center">Fill Data Item</h2>
                    <p class="hint-text">Fill below form.</p>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" required="true">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Harga HPP</label>
                    <input type="number" class="form-control" name="harga_hpp" required="true"">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Harga Retail</label>
                    <input type="number" class="form-control" name="harga_retail" required="true"">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Harga Distributor</label>
                    <input type="number" class="form-control" name="harga_distributor" required="true"">
                </div>
                
                <div class="form-group">
                    <label class="form-label">gambar</label>
                    <input type="file" class="form-control" name="gambar"  required="true">
                    <!-- <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span> -->
                </div>      
                
                
                <div class="mb-1">
                    <input class="btn btn-success" type="submit" name="save" value="SAVE">
                    <input class="btn btn-danger" type="reset" name="reset" value="RESET">
                </div>
            </form>

        </div>
    </div>
</body>
</html>