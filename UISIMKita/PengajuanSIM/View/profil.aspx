<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIM KITA</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../assets/css/styles1.css" rel="stylesheet" />
        <link href="../../assets/css/test.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SIM KITA <img width="30px" src="../../assets/img/logo.png" alt="polda-jatim"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/login">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Formulir
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Data Formulir</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Isi Formulir</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Profil
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">                      
                        <div class="row mt-5">
                            <div class="col-xl-3 col-md-6">
                                <h4 class="mt-5"></h4>
                                 <div class="card text-white mb-4">
                                    <div class="card-body text-center"><img width="70px"  src="../../assets/img/phoyo1.jpg" alt="Photo Profil"></div>                                   
                                </div>
                            </div>
                            <div class="col-xl-9 col-md-6">
                                <h5 class="mt-3">Profil Pengguna</h5> 
                                   <form class="needs-validation" novalidate="">
                                       <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Jenis SIM</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="SIM A">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Nomor SIM</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="123456789">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="SUGA">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="SURABAYA">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="17/08/1995">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="Laki-Laki">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="0812********">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="MAHASISWA">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">RT/RW</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="02/01">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Desa</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="SELOSARI">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="KANDAT">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Kota</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="KEDIRI">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Provinsi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" value="JAWA TIMUR">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Berkas KTP</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input form-control" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Berkas SIM Lama</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input form-control" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                   </form>
                            </div>                                                         
                        </div> 
                        <div class="responsive">
                            <div class="gallery jumbotron-fluid mt-4 justify-content-center">
                                <img src="../../assets/img/pakpol.png" alt="pakpol">
                            </div>
                        </div>
                    </div>
                </main> 
                <footer class="py-4 bg-light mt-auto">                    
                </footer>  
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="../../assets/js/scripts1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>