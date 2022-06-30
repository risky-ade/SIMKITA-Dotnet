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
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Nik</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Id Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($data as $item)
                                    <th scope="row">{{ $item['id'] }}</th>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['username'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['nik'] }}</td>
                                    <td>{{ $item['telepon'] }}</td>
                                    <td>{{ $item['alamat'] }}</td>
                                    <td>{{ $item['idRole'] }}</td>   
                                    <td colspan="2">
                                        <a href="detail_user<?= $item['id'] ?>"><span class="btn btn-info">Detail</span></a>
                                        <a href="#"><span class="btn btn-warning">Edit</span></a>
                                        <a href="#"><span class="btn btn-danger">Hapus</span></a>
                                    </td>    
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>                           
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