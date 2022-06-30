<?php
//koneksi 
require_once("Koneksi.php");

//Memanggil Model
require_once("Model/AuthModel.php");
require_once("Model/UserModel.php");

//Memanggil Controller
require_once("Controller/AuthController.php");
require_once("Controller/UserController.php");


//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    
    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new AuthController();
        if ($aksi == 'login') {
            $auth->login();
        } else if ($aksi == 'registrasi') {
            $auth->registrasi();
        }  else if ($aksi == 'logout') {
            $auth->logout();
        } else if ($aksi == 'storeUser') {
            $auth->storeUser();
        }else if ($aksi == 'authUser') {
            $auth->authUser();
        } 
        else {
            echo "Method Not Found";
        }
    } else if($page == "user"){
        require_once("View/user/sidebar.php");

        if($_SESSION['role'] == 'user')
        {
            $user = new UserController();
            if ($aksi == 'dashboard') {
                $user->dashboard();
            }else if ($aksi == 'isiFormulir') {
                $user->isi_formulir();
            }else if ($aksi == 'profil') {
                $user->profil();
            }else if ($aksi == 'akun') {
                $user->akun();
            }
            else {
                echo "Method Not Found";
            }
         } else {
            header("location: index.php?page=auth&aksi=login");
         }      
    }
    else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=login"); //Jangan ada spasi habis location
}
