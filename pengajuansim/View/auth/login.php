<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body{
            background-image: url(assets/img/polisi.jpg);
            background-repeat: no-repeat;
            background-size: cover;            
        }
        
    </style>
    <title>Login</title>
</head>
<body>
<div class="container-fluid bg">
        <div class="row mt-5">
            <div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12 mt-5">
            <div class="card">
                  <form action="index.php?page=auth&aksi=authUser" method="POST">
                    <div class="card-header">
                      <h4>Login</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control is-valid" value="" required="" placeholder="Username">
                        <!-- <div class="valid-feedback">
                          Good job!
                        </div> -->
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <!-- is-invalid -->
                        <input type="password" name="password" class="form-control is-valid" required="" value="" placeholder="Password">
                        <!-- <div class="invalid-feedback">
                          Oh no! Password is invalid.
                        </div> -->
                      </div> 
                      <label for="">Belum punya akun?</label>
                      <a href="index.php?page=auth&aksi=registrasi" class="text-left">Buat akun</a>                                           
                    </div>                    
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Login</button>
                    </div>
                  </form>
                </div>  
            </div>
            <div class="col-md-4 col-sm-12"></div>
        </div>
</div>
</body>
</html>