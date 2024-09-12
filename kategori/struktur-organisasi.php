<?php 
    include "config/config.php";

    // Fetch data from the database
    $sql = mysqli_query($con, "SELECT * FROM tbl_organisasi");

    if (!$sql) {
        die("Query failed: " . mysqli_error($con));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Viewer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .img-container {
            text-align: center; /* Centers the image horizontally */
        }

        .img-thumbnail {
            width: 100%; /* Adjust the width as needed */
            max-width: 4000px; /* Optional: Set a maximum width */
            height: auto; /* Maintain aspect ratio */
            cursor: pointer; /* Shows pointer cursor on hover */
            display: inline-block; /* Ensures the image is centered */
        }
    </style>
</head>
<body>
    <div class="img-container">
        <?php 
            // Check if there are any rows in the result
            if (mysqli_num_rows($sql) > 0):
                while ($data = mysqli_fetch_assoc($sql)):
                    $imagePath = "assets/img/struktur/" . $data['image']; // Adjust column name if necessary
        ?>
                    <!-- Image Thumbnail -->
                    <img src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') ?>" alt="Image" class="img-thumbnail" data-toggle="modal" data-target="#imageModal" data-src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') ?>">
        <?php 
                endwhile;
            else: 
        ?>
            <p>No image available</p>
        <?php endif; ?>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
