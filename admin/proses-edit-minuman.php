<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['minuman_id'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jenis_minuman=$_POST['jenis_minuman'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$metode_pembayaran=$_POST['metode_pembayaran'];

$ubah=$koneksi->query("update minuman set nama='$nama', no_hp='$no_hp', alamat='$alamat', jenis_minuman='$jenis_minuman', jumlah='$jumlah', harga='$harga', metode_pembayaran='$metode_pembayaran' where minuman_id='$id'");

if($ubah==true){

    header("location:tampil-minuman.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>