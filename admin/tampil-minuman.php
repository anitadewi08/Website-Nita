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
        <h2>Data Pesanan Minuman</h2>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Nama</th><th>No Handphone</th><th>Alamat</th><th>Jenis Minuman</th><th>Jumlah</th><th>Harga</th><th>Metode Pembayaran</th>
                <th>
                    <a href="input-minuman.php">
                        <button class="btn btn-success">Tambah</button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from minuman order by no_hp ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['jenis_minuman']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['metode_pembayaran']?></td>
                <td>

                <a href="edit-minuman.php?id=<?php echo $row['minuman_id']?>">
                    <button class="btn btn-xs btn-primary">Edit</button>
                </a>

                <a href="hapus-minuman.php?id=<?php echo $row['minuman_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-danger">Hapus</button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div><br><br><br><br><br><br>


<?php include "footer.php";?>