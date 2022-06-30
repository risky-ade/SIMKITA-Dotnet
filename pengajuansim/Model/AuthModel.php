<?php

class AuthModel
{
    public function prosesAuthUser($username,$password){
        $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesStoreUser($nama,$username,$email,$password,$nik)
    {
        $sql = "INSERT INTO users(nama,username,email,password,nik) VALUES('$nama','$username','$email','$password','$nik')";
        return koneksi()->query($sql);
    }

}

//Array Assosiatif
// $tes = new AuthModel();
// var_export($tes->prosesAuthUser('mila','123'));
// die();