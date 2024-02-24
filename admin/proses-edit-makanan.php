<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['makanan_id'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jenis_bakso=$_POST['jenis_bakso'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$metode_pembayaran=$_POST['metode_pembayaran'];

$ubah=$koneksi->query("update makanan set nama='$nama', no_hp='$no_hp', alamat='$alamat', jenis_bakso='$jenis_bakso', jumlah='$jumlah', harga='$harga', metode_pembayaran='$metode_pembayaran' where makanan_id='$id'");

if($ubah==true){

    header("location:tampil-makanan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>