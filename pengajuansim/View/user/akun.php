



<div class="container-fluid px-4">
                    <h1 class="mt-4"></h1>
                    <ol class="breadcrumb mb-4">
<!-- start Content -->
<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    
                    <form action="index.php?page=user&aksi=update" method="post" novalidate="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-2 col-md-6 mt-5">
                            <div class="card bg-light text-white mb-4 mt-4">
                                <div class="card-body"><img src="<?php echo $data['foto'] ?>" name="foto" width="150" height="200" alt="Photo profil">
                                    <input type="file" id="customFile" name="foto" class="mt-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-md-6">
                            <h1 class="mt-4">Akun</h1>
                            <div class="card mb-4">
                                <form action="" novalidate="">
                                    <div class="card-body">
                                        <div class="text-right d-flex justify-content-end mb-2">
                                            <button class="btn btn-primary">Save Edit</button>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="username" value="<?= $data['username'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                            <input type="email" class="form-control" required="" name="email" value="<?= $data['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="nik" value="<?= $data['nik'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                            <input type="password" class="form-control" required="" name="password" value="<?= $data['password'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted"></div>
                        <div>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end content -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>