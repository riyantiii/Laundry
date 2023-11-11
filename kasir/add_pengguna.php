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
				<h2>TAMBAH DATA PENGGUNA</h2>
			</div>
			<br>
			<form method="POST" enctype="multipart/form-data">
				

				<div class="form-group">
					<label><b>NAMA</label>
					<input type="text" name="nama" class="form-control" required>
				</div>

                <div class="form-group">
					<label><b>USERNAME</label>
					<input type="text" name="username" class="form-control" required>
				</div>

				<div class="form-group">
					<label><b>PASSWORD</label>
					<input type="text" name="password" class="form-control" required>
				</div>

				<div class="form-group">
					<label><b>LEVEL</label>
					<input type="text" name="level" class="form-control" required>
				</div>


				<div class="form-group">
					<input type="submit" name="Simpan" value="Simpan Data" class="btn btn-primary">
					<a href="pengguna.php" class="btn btn-warning">Batal</a>
				</div>
			</form>
		</div>
	</div>

</body>

<?php	
    if (isset ($_POST['Simpan'])){

        
        $sql_simpan = "INSERT INTO pengguna (`id`, `nama`, `username`, `password`, `level`) VALUES (
			'".$_POST['id']."',
			'".$_POST['nama']."',
			'".$_POST['username']."',
            '".$_POST['password']."',
			'".$_POST['level']."')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);

        if ($query_simpan) {
            echo "<script>alert('Tambah Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=pengguna.php'>";
        }else{
            echo "<script>alert('Tambah Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=add_pengguna.php'>";
        }
        }
?>

</html>
<!-- Elseif Channel -->