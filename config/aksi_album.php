<?php
session_start();
include'koneksi.php';

if(isset($_POST['tambah'])){
	$namaalbum =$_POST['namaalbum'];
	$deskripsi =$POST['deksripsi'];
	$tanggal = date('Y-m-d');
	$userid = $_SESSION['userid'];
	$sql = mysqli_query($koneksi, "INSERT INTO album VALUES('','$namaalbum','$deksripsi','$tanggal','$userid')");

	echo "<script>
	alert('data berhasil disimpan')
	location.href='../admin/album.php';
	</script>";

}

if(isset($_POST['edit'])){
	$albumid = $_POST['albumid'];
	$namaalbum =$_POST['namaalbum'];
	$deskripsi =$POST['deksripsi'];
	$tanggal = date('Y-m-d');
	$userid = $_SESSION['userid'];
	$sql = mysqli_query($koneksi, "UPDATE album SET namaalbum='$namaalbum',deskripsi='$deskripsi',tanggaldibuat='$tanggal' WHERE albumid='$albumid'");

	echo "<script>
	alert('data berhasil diperbaharui')
	location.href='../admin/album.php';
	</script>";

}
if (isset($_POST['hapus'])){
	$albumid = $_POST['albumid'];
	$sql=mysqli_query($koneksi, "DELETE FROM album WHERE albumid='$albumid'");

	echo "<script>
	alert('data berhasil dihapus')
	location.href='../admin/album.php';
	</script>";
}
?>