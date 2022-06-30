<?php

class UserModel
{
    public function get($id)
    {
        $sql = "SELECT * FROM users WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }  

    public function jenis_sim()
    {
        $sql = "SELECT * FROM jenis_sim";
        $query = koneksi()->query($sql);
        $hasil = [];
        while($data = $query->fetch_assoc())
        {
            $hasil[] = $data;
        }
        return $hasil;
    }

}

//Array Assosiatif
// $tes = new UserModel();
// var_export($tes->jenis_sim());
// die();