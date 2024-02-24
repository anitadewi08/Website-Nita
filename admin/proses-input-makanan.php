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
$jenis_bakso=$_POST['jenis_bakso'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$metode_pembayaran=$_POST['metode_pembayaran'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into makanan(nama,no_hp,alamat,jenis_bakso,jumlah,harga,metode_pembayaran) 
                        values ('$nama', '$no_hp', '$alamat', '$jenis_bakso', '$jumlah', '$harga', '$metode_pembayaran')");

if($simpan==true){

    header("location:tampil-makanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>