<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$no_hp = $koneksi->real_escape_string($_POST['no_hp']); 
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$jenis_bakso = $koneksi->real_escape_string($_POST['jenis_bakso']);
$jumlah = $koneksi->real_escape_string($_POST['jumlah']);
$harga = $koneksi->real_escape_string($_POST['harga']);
$metode_pembayaran = $koneksi->real_escape_string($_POST['metode_pembayaran']);


$simpan=$koneksi->query("insert into makanan(nama,no_hp,alamat,jenis_bakso,jumlah,harga,metode_pembayaran) 
                        values ('$nama', '$no_hp', '$alamat', '$jenis_bakso', '$jumlah', '$harga', '$metode_pembayaran')");

if($simpan==true){

    header("location:beli-makanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>