<!-- start Content -->
<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h2 class="mt-4">Profil <?= $data['nama'] ?></h2>
                    <ol class="breadcrumb mb-4">

                    </ol>
                    <form action="index.php?page=user&aksi=update" method="post" novalidate="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-2 col-md-6 ">
                            <div class="card bg-light text-white mb-4">
                                <div class="card-body"><img src="<?php echo $data['foto'] ?>" name="foto" width="150" height="200" alt="Photo profil">
                                    <input type="file" id="customFile" name="foto" class="mt-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-md-6">
                            <div class="card mb-4">
                                
                                    <div class="card-body">
                                        <div class="text-right d-flex justify-content-end mb-2">
                                            <button class="btn btn-primary">Save Edit</button>
                                        </div>                                        
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Nomor SIM</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="nomor_sim" value="<?= $data['nomor_sim'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="nik" value="<?= $data['nik'] ?>">                                        
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-10"> 
                                            <input type="text" class="form-control" required="" name="nama" value="<?= $data['nama'] ?>">                                                                                 
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                            <input type="date" class="form-control" required="" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" placeholder="yyyy-mm-dd">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">                                   
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineradio1" name="jenis_kelamin" value="L" <?php if($data['jenis_kelamin']=='L') echo 'checked'?>>
                                                    <label class="form-check-label" for="inlineradio1">Laki-Laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineradio2" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin']=='P') echo 'checked'?>>
                                                    <label class="form-check-label" for="inlineradio2">Perempuan</label>
                                                </div>
                                                <div class="invalid-feedback">
                                                    What's your name?
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="telepon" value="<?= $data['telepon'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Desa</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="desa" value="<?= $data['desa'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="kecamatan" value="<?= $data['kecamatan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="kota" value="<?= $data['kota'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Provinsi</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" name="provinsi" value="<?= $data['provinsi'] ?>">
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