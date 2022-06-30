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
        require_once("view/user/isi_formulir.php");
    }

    public function akun()
    {
        require_once("view/user/akun.php");
    }

    public function dashboard()
    {        
        require_once("view/user/dashboard.php");
    }


}
?>