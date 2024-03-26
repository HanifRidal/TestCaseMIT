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
    <div class="container mt-5 ">
        <!-- <img class="" src="uploads/stok-barang.jpg" width="400px" height="400px" alt=""> -->
            <div class="card login-form">             
                <div class="card-body">
                    <h2 class="card-title">Pengadaan Barang Lur</h2>
                    <h6 class="card-subtitle text-muted fw-bold">Please login here!</h6>
                
                    <div class="d-grid mt-5 mb-4">
                        <button type="submit" class="btn btn-light btn-gmail">
                        <img src="uploads/google.png" alt="Gmail" class="img-google me-2" width="20px" height="20px">Sign up with Gmail</button>
                    </div>

                    <h6 class="card-subtitle text-muted mb-4 text-center">Login with your Account</h6>

                    <form method="post" action="login.php">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Your Username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="password1" placeholder="Your Password">
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" onclick="show()" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" >Lihat Password</label>
                            </div>

                            <div>
                                <a href="#" class="link">Forgot Password ?</a>
                            </div>
                        </div>

                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-success btn-login" name="login">Login</button>
                        </div>

                        <div class="mt-3">
                            <label>Not registered yet ? <a href="#" class="link">Create an account</a></label>
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }  
        }
    </script>
</body>
</html>