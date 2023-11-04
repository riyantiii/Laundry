<!DOCTYPE html>
<html>
<?php
$koneksi = new mysqli ("localhost","root","","user");
?>

<head>
	<title>APLIKASI CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<div class="col-lg-8">
			<div class="page-header">
				<br>
				<br>
				<h2>TAMBAH DATA OUTLET</h2>
			</div>
			<br>
			<form method="POST" enctype="multipart/form-data">
				

				<div class="form-group">
					<label><b>ID OUTLET</label>
					<input type="text" name="id_outlet" class="form-control" required>
				</div>

				<div class="form-group">
					<label><b>NAMA</label>
					<input type="text" name="nama" class="form-control" required>
				</div>


				<div class="form-group">
					<label><b>ALAMAT</label>
					<input type="text" name="alamat" class="form-control" required>
				</div>

				<div class="form-group">
					<label><b>NO TELEPON</label>
					<input type="text" name="tlp" class="form-control" required>
				</div>


				<div class="form-group">
					<input type="submit" name="Simpan" value="Simpan Data" class="btn btn-primary">
					<a href="outlet.php" class="btn btn-warning">Batal</a>
				</div>
			</form>
		</div>
	</div>

</body>

<?php	
    if (isset ($_POST['Simpan'])){

        
        $sql_simpan = "INSERT INTO tb_outlet (`id_outlet`, `nama`, `alamat`, `tlp`) VALUES (
			'".$_POST['id_outlet']."',
			'".$_POST['nama']."',
			'".$_POST['alamat']."',
			'".$_POST['tlp']."')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);

        if ($query_simpan) {
            echo "<script>alert('Tambah Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=outlet.php'>";
        }else{
            echo "<script>alert('Tambah Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=add.php'>";
        }
        }
?>

</html>
<!-- Elseif Channel -->