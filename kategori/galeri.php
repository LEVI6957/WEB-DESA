<?php 
	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_gallery");
?>
<div class="row text-center">
	<?php foreach($sql as $data): ?>
		<div class="col-md-4 col-xs-12 mt-3">
			<img src="assets/img/<?= $data['nama'] ?>" alt="<?= $data['nama'] ?>" class="img-thumbnail" data-toggle="modal" data-target="#imageModal" data-src="assets/img/<?= $data['nama'] ?>">
		</div>
	<?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="imageModalLabel">Image</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img id="modalImage" src="" alt="Image" class="img-fluid">
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript to update modal image source
    $('#imageModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var imageSrc = button.data('src'); // Extract info from data-* attributes
        var modal = $(this);
        modal.find('#modalImage').attr('src', imageSrc);
    });
</script>
</body>
</html>