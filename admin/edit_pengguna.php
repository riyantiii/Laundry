<!DOCTYPE html>
<html>
<?php
$koneksi = new mysqli ("localhost","root","","user");
if(isset($_GET['id'])){
	$sql_cek = "SELECT * FROM pengguna WHERE id='".$_GET['id']."'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<head>
	
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
				<h2>UBAH DATA PENGGUNA</h2>
			</div>
			<br>
			<form method="POST" enctype="multipart/form-data">

        
				<input type="hidden" name="id" value="<?php echo $data_cek['id']; ?>"
					 readonly/>
		
              <div class="form-group">
					<label>NAMA</label>
					<input type="text" name="nama" class="form-control" value="<?php echo $data_cek['nama']; ?>"
					 readonly/>
				</div>

				<div class="form-group">
					<label>USERNAME</label>
					<input type="text" name="username" class="form-control" value="<?php echo $data_cek['username']; ?>"
					 readonly/>
				</div>

		
				<div class="form-group">
					<label>PASSWORD</label>
					<input type="text" name="password" class="form-control" value="<?php echo $data_cek['password']; ?>"
					/>
				</div>

				
				<div class="form-group">
					<label>LEVEL</label>
					<input type="text" name="level" class="form-control" value="<?php echo $data_cek['level']; ?>"
					/>
				</div>

				<div class="form-group">
					<input type="submit" name="Simpan" value="Ubah Data" class="btn btn-primary">
					<a href="pengguna.php" class="btn btn-warning">Batal</a>
				</div>
			</form>
		</div>
	</div>

</body>

<?php	
    if (isset ($_POST['Simpan'])){


	if(!empty($sumber)){
        $sql_ubah = "UPDATE pengguna SET
			nama='".$_POST['nama']."',
			username='".$_POST['username']."',
            password='".$_POST['password']."',
			level='".$_POST['level']."'		
            WHERE id='".$_POST['id']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
		

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE pengguna SET
			nama='".$_POST['nama']."',
			username='".$_POST['username']."',
            password='".$_POST['password']."',
			level='".$_POST['level']."'	
			WHERE id='".$_POST['id']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>alert('Ubah Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=pengguna.php'>";
        }else{
            echo "<script>alert('Ubah Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=edit_pengguna.php'>";
        }
        }
?>

</html>
<!-- Elseif Channel -->