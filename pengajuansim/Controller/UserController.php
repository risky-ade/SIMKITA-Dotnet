<?php

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function profil()
    {
        // var_dump($_SESSION);
        // die();
        $id = $_SESSION['user']['id'];        
        $data = $this->model->get($id);
        extract($data);
        require_once("View/user/profil.php");
    }

    // public function dashboard()
    // {        
    //     require_once("view/user/sidebar.php");
    //     require_once("view/user/dashboard.php");
    // }

    public function isi_formulir()
    {
        $id = $_SESSION['user']['id'];        
        $data = $this->model->get($id);
        $jenis = $this->model->jenis_sim();
        extract($data);
        extract($jenis);
        require_once("view/user/isi_formulir.php");
    }

    public function akun()
    {
        $id = $_SESSION['user']['id'];        
        $data = $this->model->get($id);
        extract($data);
        require_once("view/user/akun.php");
    }

    public function dashboard()
    {        
        require_once("view/user/dashboard.php");
    }

    public function update()
    {        
        $nomor_sim = $_POST['nomor_sim'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $telepon = $_POST['telepon'];
        $pekerjaan = $_POST['pekerjaan'];
        $desa = $_POST['desa'];
        $kecamatan = $_POST['kecamatan'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        

        if($this->model->updateFormulir($nomor_sim, $nama, $tempat_lahir, $tanggal_lahir,$jenis_kelamin,$telepon,$pekerjaan,$desa,$kecamatan,$kota,$provinsi)){
            header("location: index.php?page=user&aksi=isiFormulir&pesan=Berhasil Ubah Data");
        }else{
            header("location: index.php?page=user&aksi=isiFormulir&pesan=Gagal Ubah Data");
        }
    }

}
?>