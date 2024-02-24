<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p><a class="btn btn-warning btn-lg" href="tampil-makanan.php" role="button">Data Makanan</a>
						<a class="btn btn-warning btn-lg" href="tampil-munuman.php" role="button">Data Minuman</a>
						<a class="btn btn-danger btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron --><br><br><br><br><br><br><br><br><br>
<?php include "footer.php";?>