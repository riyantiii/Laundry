<!DOCTYPE html>
<html>
<?php
$koneksi = new mysqli ("localhost","root","","user");
if(isset($_GET['id_outlet'])){
	$sql_cek = "SELECT * FROM tb_outlets WHERE id_outlet='".$_GET['id_outlet']."'";
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
				<h2><B><I>UBAH DATA OUTLET</h2>
			</div>
			<br>
			<form method="POST" enctype="multipart/form-data">

				<div class="form-group">
					<label>ID OUTLET</label>
					<input type="text" name="id_outlet" class="form-control" value="<?php echo $data_cek['id_outlet']; ?>"
					 readonly/>
				</div>

				<div class="form-group">
					<label>NAMA</label>
					<input type="text" name="nama" class="form-control" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
				

				<div class="form-group">
					<label>ALAMAT</label>
					<input type="text" name="alamat" class="form-control" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>

				<div class="form-group">
					<label>NO TELEPON</label>
					<input type="text" name="tlp" class="form-control" value="<?php echo $data_cek['tlp']; ?>"
					/>
				</div>

				<div class="form-group">
					<input type="submit" name="Simpan" value="Ubah Data" class="btn btn-primary">
					<a href="outlet.php" class="btn btn-warning">Batal</a>
				</div>
			</form>
		</div>
	</div>

</body>

<?php	
    if (isset ($_POST['Simpan'])){


	if(!empty($sumber)){
        $sql_ubah = "UPDATE tb_outlets SET
			nama='".$_POST['nama']."',
			alamat='".$_POST['alamat']."',
			tlp='".$_POST['tlp']."'		
            WHERE id_outlet='".$_POST['id_outlet']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
		

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_outlets SET
			nama='".$_POST['nama']."',
			alamat='".$_POST['alamat']."',
			tlp='".$_POST['tlp']."'	
			WHERE id_outlet='".$_POST['id_outlet']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>alert('Ubah Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=outlet.php'>";
        }else{
            echo "<script>alert('Ubah Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=edit.php'>";
        }
        }
?>

</html>
<!-- Elseif Channel -->