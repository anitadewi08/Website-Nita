<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-minuman.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from minuman where minuman_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" name="minuman_id" value="<?php echo $row['minuman_id']?>" class="form-control">
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="number" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jenis_minuman">Jenis Minuman</label>
                        <select name="jenis_minuman" id="jenis_minuman" class="form-control">
                            <option value="<?php echo $row['jenis_minuman']?>" selected><?php echo $row['jenis_minuman']?></option>
                                <option>-- Pilih Minuman --</option>
                                <option value="Aneka Jus Buah">Aneka Jus Buah</option>
                                <option value="Teh Manis Dingin">Teh Manis Dingin</option>
                                <option value="Es Buah">Es Buah</option>
                                <option value="Es Cincau Hijau">Es Cincau Hijau</option>
                                <option value="Es Cendol Nangka">Es Cendol Nangka</option>
                                <option value="Sop Buah Premium">Sop Buah Premium</option>           
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" value="<?php echo $row['jumlah']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" value="<?php echo $row['harga']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="metode_pembayaran">Metode Pembayaran</label>
                        <select name="metode_pembayaran" class="form-control">
                            <option value="<?php echo $row['metode_pembayaran']?>" selected><?php echo $row['metode_pembayaran']?></option>
                                <option>-- Pilih Pembayaran --</option>
                                <option value="COD">COD</option>
                                <option value="Transfer">Transfer</option>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>

<script src="scriptminuman.js"></script>