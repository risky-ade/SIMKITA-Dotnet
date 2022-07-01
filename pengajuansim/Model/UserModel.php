<?php

class UserModel
{
    public function get($id)
    {       
        $sql = "SELECT * FROM users WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    } 
    
    public function getDataUser($id)
    {
        $sql = "SELECT users.nama nama, users.username username, users.email email, users.password pasword,
        users.nik nik, users.telepon telepon, users.nomor_sim nomor_sim, users.tempat_lahir tempat_lahir,
        users.tanggal_lahir tanggal_lahir, users.jenis_kelamin jenis_kelamin, users.pekerjaan pekerjaan,
        users.desa desa, users.kecamatan kecamatan, users.kota kota, users.provinsi provinsi, jenis_sim.nama jenis_sim
        FROM users JOIN jenis_sim ON users.id_jenis = jenis_sim.id WHERE users.id=$id";

        $query = koneksi()->query($sql);
        $hasil = [];
        while($data = $query->fetch_assoc())
        {
            $hasil[] = $data;
        }
        return $hasil;
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

    public function updateFormulir($foto,$nomor_sim, $nama, $tempat_lahir, $tanggal_lahir,$jenis_kelamin,$telepon,$pekerjaan,$desa,$kecamatan,$kota,$provinsi)
    {
        $sql = "UPDATE users SET foto='$foto',nomor_sim='$nomor_sim', nama='$nama', 
        tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',
        telepon='$telepon',pekerjaan='$pekerjaan',desa='$desa',kecamatan='$kecamatan',kota='$kota',provinsi='$provinsi'";
        
        $query = koneksi()->query($sql);
        return $query;
    }

}

//Array Assosiatif
// $tes = new UserModel();
// var_export($tes->getDataUser(9));
// die();