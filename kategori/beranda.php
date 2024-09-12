<?php 
	include "config/config.php";
	$query = mysqli_query($con, "SELECT * FROM tbl_posts ORDER BY date desc");
?>

<div class="row g-4">
	<?php foreach($query as $data): ?>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card h-100 shadow-sm">
				<img src="assets/file/post/<?= $data['img'] ?>" alt="" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
				<div class="card-body">
					<h5 class="card-title text-primary"><?= $data['judul'] ?></h5>
					<p class="card-text text-muted mb-1"><i class="bi bi-calendar"></i> <?= $data['date'] ?> &nbsp;/&nbsp; <i class="bi bi-person"></i> <?= $data['author'] ?></p>
					<p class="card-text">
						<?= substr($data['artikel'], 0, 100) ?>...
					</p>
					<a href="index.php?page=detail&id=<?= $data['id_post'] ?>" class="btn btn-outline-primary">Baca Selengkapnya</a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-5">
	<nav aria-label="Pagination">
		<ul class="pagination">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			</li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>
