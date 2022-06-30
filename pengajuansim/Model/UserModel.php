<?php

class UserModel
{
    public function get($id)
    {
        $sql = "SELECT * FROM users WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }  

}

//Array Assosiatif
// $tes = new UserModel();
// var_export($tes->get(5));
// die();