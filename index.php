<!DOCTYPE html>
<html>
<head>
	<title> Daftar Buku Tamu</title>
	<link rel="stylesheet" type="text/css" href="docs/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="docs/css/bootstrap.min.css">
	<script type="text/javascript" src="docs/js/jquery-latest-slim.min.js"></script>
	<script type="text/javascript" src="docs/js/jquery-ui-custom.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/keyboard.css">
	<script type="text/javascript" src="js/jquery.keyboard.js"></script>
</head>

<body>
	<!-- koneksi ke database -->
	<?php
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "db_bukutamu";
		

		$koneksi= mysqli_connect($server, $user, $password, $database) or die (mysqli_error($koneksi));

		// tombol simpan
		if(isset($_POST['bsimpan'])){
			$simpan = mysqli_query($koneksi,"INSERT into tamu (nama, alamat, nope)
			VALUES('$_POST[nama]','$_POST[alamat]','$_POST[nope]')");

			if ($simpan){
			echo "<script>
				alert('Simpan Data Sukses, Terima Kasih sdr/i $_POST[nama] atas kunjungannya');
				document.location='index.php';
			</script>";
				} 
			}	
	?>
	<!-- akhir -->


	<div class="container">
		<div class="col-md-12">
			<form class="form" method="post">
				<center><h1><b>Progate B-21</b></h1></center>
				<div class="panel panel-warning">
					<div class="panel-heading text-center">
						<b>Daftar Buku Tamu</b>
					</div>

					<div class="panel-body">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Disini ">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Disini ">
						</div>
						<div class="form-group">
							<label>Nomor Hp</label>
							<input type="text" name="nope" id="nope" class="form-control" placeholder="Masukan Nomor Hp Disini ">
						</div>
						<button type="submit" name="bsimpan" class="btn btn-success center-block">Simpan</button>

					</div>
				</div>
			</form>

			<div class="panel panel-danger">
				<div class="panel-heading text-center">
					<b>Daftar Pengunjung</b>
				</div>
				
					<div class="panel-body">
						<table class="table table-bordered table-striped">
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Nomor Hp</th>
								<th>Tanggal</th>
							</tr>

							<?php
								$tampil = mysqli_query($koneksi, "SELECT * from tamu order by id desc");
								$no=1;
								while($data = mysqli_fetch_array($tampil)):
							?>

								<tr>
									<td><?=$no++?></td>
									<td><?=$data['nama']?></td>
									<td><?=$data['alamat']?></td>
									<td><?=$data['nope']?></td>
									<td><?=$data['tanggal']?></td>
								</tr>
							<?php endwhile;?>

							
						</table>
					</div>
			</div>
			
		</div>
	</div>

</body>
</html>

<script type="text/javascript" src="js/script.js"></script>