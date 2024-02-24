<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$no_hp = $koneksi->real_escape_string($_POST['no_hp']); 
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$jenis_minuman = $koneksi->real_escape_string($_POST['jenis_minuman']);
$jumlah = $koneksi->real_escape_string($_POST['jumlah']);
$harga = $koneksi->real_escape_string($_POST['harga']);
$metode_pembayaran = $koneksi->real_escape_string($_POST['metode_pembayaran']);


$simpan=$koneksi->query("insert into minuman(nama,no_hp,alamat,jenis_minuman,jumlah,harga,metode_pembayaran) 
                        values ('$nama', '$no_hp', '$alamat', '$jenis_minuman', '$jumlah', '$harga', '$metode_pembayaran')");

if($simpan==true){

    header("location:beli-minuman.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>