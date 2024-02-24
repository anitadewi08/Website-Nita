<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jenis_minuman=$_POST['jenis_minuman'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$metode_pembayaran=$_POST['metode_pembayaran'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into minuman(nama,no_hp,alamat,jenis_minuman,jumlah,harga,metode_pembayaran) 
                        values ('$nama', '$no_hp', '$alamat', '$jenis_minuman', '$jumlah', '$harga', '$metode_pembayaran')");

if($simpan==true){

    header("location:tampil-minuman.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>