<?php
$koneksi = new mysqli ("localhost","root","","user");
if(isset($_GET['id'])){
	$sql_cek = "SELECT * FROM pengguna WHERE id='".$_GET['id']."'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php
  

    $sql_hapus = "DELETE FROM pengguna WHERE id='".$_GET['id']."'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);
    if ($query_hapus) {
        echo "<script>alert('Hapus Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=pengguna.php'>";
        }else{
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data siswa berhasil dihapus.
          </div>";
            echo "<meta http-equiv='refresh' content='0; url=pengguna.php'>";
    }

?>

<!-- end -->