<?php 

	include "../config/config.php";
	
	$id = $_GET['id'];

	$sql = mysqli_query($con, "DELETE FROM visimisi WHERE id='$id'");

	if($sql) {
		echo "<script>alert('Berhasil Menghapus')</script>";
		echo "<script>window.location.href='index.php?page=data-vm'</script>";
	}

 ?>