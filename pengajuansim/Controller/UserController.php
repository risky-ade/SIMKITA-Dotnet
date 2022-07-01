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
        $rand = rand();
        $target_dir = "assets/berkas/foto/";
        $target_file = $target_dir . basename($rand.$_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        // if ($_FILES["foto"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    //   echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
        // $rand = rand();
        // $ekstensi =  array('png','jpg','jpeg');
        // $filename = $_FILES['foto']['name'];
        // var_dump($filename);
        // die();
        // $ukuran = $_FILES['foto']['size'];
        // $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        // if(!in_array($ext,$ekstensi) ) {
        //     header("location:index.php?alert=Ekstensi Tidak Sesuai");
        // }else{
        //     if($ukuran < 1044070){		
        //         $xx = $rand.'_'.$filename;
        //         move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/berkas/foto/'.$rand.'_'.$filename);

        //         if($this->model->updateFormulir($xx,$nomor_sim, $nama, $tempat_lahir, $tanggal_lahir,$jenis_kelamin,$telepon,$pekerjaan,$desa,$kecamatan,$kota,$provinsi)){
        //             header("location: index.php?page=user&aksi=isiFormulir&pesan=Berhasil Ubah Data");
        //         }
        //     }else{
        //         header("location: index.php?page=user&aksi=isiFormulir&pesan=Gagal Ubah Data");
        //     }
        // }
        

        if($this->model->updateFormulir($target_file,$nomor_sim, $nama, $tempat_lahir, $tanggal_lahir,$jenis_kelamin,$telepon,$pekerjaan,$desa,$kecamatan,$kota,$provinsi)){
            header("location: index.php?page=user&aksi=isiFormulir&pesan=Berhasil Ubah Data");
        }else{
            header("location: index.php?page=user&aksi=isiFormulir&pesan=Gagal Ubah Data");
        }
    }

}
?>