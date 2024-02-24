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
                <form action="proses-edit-makanan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from makanan where makanan_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" name="makanan_id" value="<?php echo $row['makanan_id']?>" class="form-control">
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
                        <label for="jenis_bakso">Jenis Bakso</label>
                        <select name="jenis_bakso" id="jenis_bakso" class="form-control">
                            <option value="<?php echo $row['jenis_bakso']?>" selected><?php echo $row['jenis_bakso']?></option>
                                <option>-- Pilih Bakso --</option>
                                <option value="Bakso Mercon Jumbo">Bakso Mercon Jumbo</option>
                                <option value="Mie Ayam Pangsit">Mie Ayam Pangsit</option>
                                <option value="Bakso Tahu Mercon">Bakso Tahu Mercon</option>
                                <option value="Mie Ayam Bakso dan Ceker">Mie Ayam Bakso dan Ceker</option>
                                <option value="Bakso Urat Jumbo">Bakso Urat Jumbo</option>
                                <option value="Bakso Kuah">Bakso Kuah</option>                        </select>
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
                                <option>-- Pilih Bakso --</option>
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

<script src="script.js"></script>