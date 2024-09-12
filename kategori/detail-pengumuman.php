<?php 
	include "config/config.php";

	$id = $_GET['id'];

	$query = mysqli_query($con, "SELECT * FROM tbl_pengumuman WHERE 	id_pengumuman='$id'");
	$data = mysqli_fetch_array($query);
	
 ?>

 <div class="col-lg-10 col-xs-12">
	<h3><?= $data['Judul'] ?></h3>	
	<img src="assets/file/post/<?= $data['img'] ?>" class="img-fluid">		
	<p class="mt-4 text-justify"><?= $data['isi'] ?></p>
 </div>
 <div class="col-lg-2"></div>