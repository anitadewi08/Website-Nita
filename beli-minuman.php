<?php include "header.php"; ?><br><br><br><br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12">

                <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                                    <div class="alert alert-success">
                                    Terima kasih, pesanan anda sudah terkirim!
                                    </div>
                    <?php

                    }

                    ?>


            <form action="proses-beli-minuman.php" method="POST">
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
                    <label for="jenis_minuman">Jenis Minuman</label>
                    <select name="jenis_minuman" id="jenis_minuman" class="form-control">
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
                <a href="minuman.php" class="btn btn-info">Kembali</a>            
            </form>
        </div>
    </div>
</div><br><br><br>

<?php include "footer.php"; ?>

<script src="scriptminuman.js"></script>
