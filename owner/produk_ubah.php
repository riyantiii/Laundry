<!DOCTYPE html>
<html>
<?php
$koneksi = new mysqli ("localhost","root","","user");
if(isset($_GET['kode'])){
	$sql_cek = "SELECT * FROM tb_paket WHERE id='".$_GET['kode']."'";
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
				<h2>UBAH DATA </h2>
			</div>
			<br>
			<form method="POST" enctype="multipart/form-data">

              <div class="form-group">
					<label>ID PAKET</label>
					<input type="text" name="id" class="form-control" value="<?php echo $data_cek['id']; ?>"
					 readonly/>
				</div>

				<div class="form-group">
					<label>ID OUTLET</label>
					<input type="text" name="id_outlet" class="form-control" value="<?php echo $data_cek['id_outlet']; ?>"
					 readonly/>
				</div>

				<div class="form-group">
					<label>JENIS PAKET</label>
					<select name="jenis_paket" id="jenis_paket" class="form-control">
						<option value="">-- Pilih PAKET --</option>
						<?php
							//menhecek data yg dipilih sebelumnya
							if ($data_cek['jenis_paket'] == "kiloan") echo "<option value='kiloan' selected>kiloan</option>";
							else echo "<option value='kiloan'>kiloan</option>";

							if ($data_cek['jenis_paket'] == "selimut") echo "<option value='selimut' selected>selimut</option>";
							else echo "<option value='selimut'>selimut</option>";

                            if ($data_cek['jenis_paket'] == "bed cover") echo "<option value='bed cover' selected>bed cover</option>";
							else echo "<option value='bed cover'>bed cover</option>";

							if ($data_cek['jenis_paket'] == "kaos") echo "<option value='kaos' selected>kaos</option>";
							else echo "<option value='kaos'>kaos</option>";

                            if ($data_cek['jenis_paket'] == "lain") echo "<option value='lain' selected>lain</option>";
							else echo "<option value='lain'>lain</option>";

						?>
					</select>
				</div>

				<div class="form-group">
					<label>NAMA PAKET</label>
					<input type="text" name="nama_paket" class="form-control" value="<?php echo $data_cek['nama_paket']; ?>"
					/>
				</div>

				
				<div class="form-group">
					<label>HARGA</label>
					<input type="text" name="harga" class="form-control" value="<?php echo $data_cek['harga']; ?>"
					/>
				</div>

				<div class="form-group">
					<input type="submit" name="Simpan" value="Ubah Data" class="btn btn-primary">
					<a href="produk.php" class="btn btn-warning">Batal</a>
				</div>
			</form>
		</div>
	</div>

</body>

<?php	
    if (isset ($_POST['Simpan'])){


	if(!empty($sumber)){
        $sql_ubah = "UPDATE tb_paket SET
			id_outlet='".$_POST['id_outlet']."',
			jenis_paket='".$_POST['jenis_paket']."',
            nama_paket='".$_POST['nama_paket']."',
			harga='".$_POST['harga']."'		
            WHERE id='".$_POST['id']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
		

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_paket SET
			id_outlet='".$_POST['id_outlet']."',
			jenis_paket='".$_POST['jenis_paket']."',
            nama_paket='".$_POST['nama_paket']."',
			harga='".$_POST['harga']."'	
			WHERE id='".$_POST['id']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>alert('Ubah Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=produk.php'>";
        }else{
            echo "<script>alert('Ubah Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=produk_ubah.php'>";
        }
        }
?>

</html>
<!-- Elseif Channel -->