<?php

class AuthController
{
    private $model;

    /**
    * Function ini adalah constructor yang berguna menginisialisasi obyek aslab Model
    */
    public function __construct()
    {
        $this->model = new AuthModel();
    }

    // Function index berfungsi untuk mengatur tampilan login
    public function login()
    {
        require_once("view/auth/login.php");
    }
    
    public function sidebar()
    {
        require_once("view/auth/sidebar.php");
    }

    public function content_dashboard()
    {
        require_once("view/auth/dashboard.php");
    }
    public function isi_formulir()
    {
        require_once("view/auth/isi_formulir.php");
    }
    public function data_formulir()
    {
        require_once("view/auth/data_diri.php");
    }

    public function profil()
    {
        require_once("view/auth/profil.php");
    }

    public function akun()
    {
        require_once("view/auth/akun.php");
    }

    // Function index berfungsi untuk mengatur tampilan registrasi
    public function registrasi()
    {
        require_once("view/auth/registrasi.php");
    }

    public function authUser()
    {
        $username = $_POST['username']; //method post mengambil data
        $password = $_POST['password'];
        $data = $this->model->prosesAuthUser($username, $password);
       
        if($data){// ketika data ada
            $_SESSION['role'] = 'user'; //untuk berpindah kehalaman
            $_SESSION['user'] = $data;
            // var_dump($data);
            // die();
            header("location:index.php?page=user&aksi=dashboard&pesan=Berhasil Login");//lihat di index -> namanya routing
        }else{
            header("location:index.php?page=auth&aksi=login&pesan=Password atau Username salah");
        }
    }

    /**
    * Function store berfungsi untuk memproses data untuk di tambahkan 
    * Fungsi ini membutuhkan data nama,npm,password,notelp dengan metode http request POST
    */
    public function storeUser()
    {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nik = $_POST['nik'];
        if($this->model->prosesStoreUser($nama,$username,$email,$password,$nik)){
            header("location: index.php?page=auth&aksi=login&pesan=Berhasil Daftar");
        }else{
            header("location: index.php?page=auth&aksi=registrasi&pesan=Gagal Daftar");
        }
    }
    
    public function logout()
    {
        session_destroy();
        header("location:index.php?page=auth&aksi=login&pesan=Berhasil Logout");
    }
}
?>