<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="proses-input-makanan.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label for="no_hp">No Handphone</label>
                    <input type="number" name="no_hp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="jenis_bakso">Jenis Bakso</label>
                    <select name="jenis_bakso" id="jenis_bakso" class="form-control">
                        <option>-- Pilih Bakso --</option>
                        <option value="Bakso Mercon Jumbo">Bakso Mercon Jumbo</option>
                        <option value="Mie Ayam Pangsit">Mie Ayam Pangsit</option>
                        <option value="Bakso Tahu Mercon">Bakso Tahu Mercon</option>
                        <option value="Mie Ayam Bakso dan Ceker">Mie Ayam Bakso dan Ceker</option>
                        <option value="Bakso Urat Jumbo">Bakso Urat Jumbo</option>
                        <option value="Bakso Kuah">Bakso Kuah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control">
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="metode_pembayaran">Metode Pembayaran</label>
                    <select name="metode_pembayaran" class="form-control">
                        <option>-- Pilih Pembayaran --</option>
                        <option value="COD">COD</option>
                        <option value="Transfer">Transfer</option>
                    </select>
                </div><br>

                <input type="submit" name="kirim" value="Kirim" class="btn btn-info">
                <a href="index.php" class="btn btn-info">Kembali</a>            
            </form>
        </div>
    </div>
</div><br><br><br>

<?php include "footer.php"; ?>

<script src="script.js"></script>