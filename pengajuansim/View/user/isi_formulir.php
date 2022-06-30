<div id="layoutSidenav_content">
            <!-- start Content -->
            <main>
                <div class="row m-4">
                    <div class="">
                        <div class="card">
                            <form class="needs-validation" novalidate="" action="" method="">
                                <div class="card-header">
                                    <h4>Formulir Data Diri</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Jenis SIM</label>
                                        <div class="col-sm-9">

                                            <select name="jenis_sim" class="custom-select form-control">
                                                <option value="">--Pilih Jenis SIM--</option>
                                                <?php foreach($jenis as $row) :?>
                                                    <option value="<?=$row['id']?>"><?=$row['nama'];?></option>
                                                <?php endforeach;?>
                                            </select>                                            
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Nomor SIM</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" required="" name="nomor_sim" value="<?= $data['nomor_sim'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" required="" name="nama" value="<?= $data['nama'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control datepicker" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="inlineradio1" value="option1" name="jenis_kelamin" value="<?= $data['jenis_kelamin'] ?>">
                                                <label class="form-check-label" for="inlineradio1">Laki-Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="inlineradio2" value="option2" name="jenis_kelamin" value="<?= $data['jenis_kelamin'] ?>">
                                                <label class="form-check-label" for="inlineradio2">Perempuan</label>
                                            </div>
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="telepon" value="<?= $data['telepon'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Desa</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="desa" value="<?= $data['desa'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="kecamatan" value="<?= $data['kecamatan'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Kota</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="kota" value="<?= $data['kota'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Provinsi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="provinsi" value="<?= $data['provinsi'] ?>">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-sm-3 col-form-label">Pas Foto 4x6</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input form-control" id="customFile" name="foto" value="<?= $data['foto'] ?>">
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
                                                <input type="file" class="custom-file-input form-control" id="customFile" name="berkas_sim" value="<?= $data['berkas_sim'] ?>">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>
            <!-- end content -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
