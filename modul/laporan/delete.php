<?php 
ob_start();
$id = $_GET['id'];
$result = mysqli_query($link,"delete from tm_laporan where id_laporan = '$id'");
if ($result){
	echo "<script>alert('sukses hapus');window.location.assign(\"page.php?page=laporan\")</script>";
}
else {
	echo "<script>alert('gagal hapus');window.location.assign(\"page.php?page=laporan\")</script>";
}

?>
<?php 
$delete = ob_get_clean();
?>