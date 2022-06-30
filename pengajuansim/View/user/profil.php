<!-- start Content -->
<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h2 class="mt-4">Profil <?= $data['nama'] ?></h2>
                    <ol class="breadcrumb mb-4">

                    </ol>
                    <div class="row">
                        <div class="col-xl-2 col-md-6 ">
                            <div class="card bg-light text-white mb-4">
                                <div class="card-body "><img src="assets/img/kaktus.jpg" width="100" height="125" alt="Photo profil">
                                    <input type="file" id="customFile">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-md-6">
                            <div class="card mb-4">
                                <form action="" novalidate="">
                                    <div class="card-body">
                                        <div class="text-right d-flex justify-content-end mb-2">
                                            <button class="btn btn-primary">Save Edit</button>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Nomor SIM</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['nomor_sim'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['nik'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-10"> 
                                                <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['nama'] ?></span>                                                                                   
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['tempat_lahir'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['tanggal_lahir'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['jenis_kelamin'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['telepon'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['pekerjaan'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Desa</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['desa'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['kecamatan'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['kota'] ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Provinsi</label>
                                            <div class="col-sm-10">
                                            <span type="text" name="nomor_sim" class="form-control" required=""><?= $data['provinsi'] ?></span>
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