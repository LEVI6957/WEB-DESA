<?php 
include "config/config.php";

// Set the number of items per page
$perPage = 3;

// Get the current page number from the URL, default is 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting point for the records
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

// Query to get the total number of posts
$totalPostsQuery = mysqli_query($con, "SELECT COUNT(*) as total FROM tbl_posts");
if (!$totalPostsQuery) {
    die("Query failed: " . mysqli_error($con));
}
$totalPosts = mysqli_fetch_assoc($totalPostsQuery)['total'];

// Calculate the total number of pages
$totalPages = ceil($totalPosts / $perPage);

// Query to get the posts for the current page
$query = mysqli_query($con, "SELECT * FROM tbl_posts ORDER BY date DESC LIMIT $start, $perPage");
if (!$query) {
    die("Query failed: " . mysqli_error($con));
}

// Check if there are posts
if (mysqli_num_rows($query) == 0) {
    echo "<h1>Maaf. Halaman tidak ditemukan!</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginated Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row g-4">
        <?php foreach($query as $data): ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card h-100 shadow-sm">
                    <img src="assets/file/post/<?= htmlspecialchars($data['img']) ?>" alt="" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><?= htmlspecialchars($data['judul']) ?></h5>
                        <p class="card-text text-muted mb-1"><i class="bi bi-calendar"></i> <?= htmlspecialchars($data['date']) ?> &nbsp;/&nbsp; <i class="bi bi-person"></i> <?= htmlspecialchars($data['author']) ?></p>
                        <p class="card-text">
                            <?= htmlspecialchars(substr($data['artikel'], 0, 100)) ?>...
                        </p>
                        <a href="index.php?page=detail&id=<?= htmlspecialchars($data['id_post']) ?>" class="btn btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
        <nav aria-label="Pagination">
            <ul class="pagination">
                <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                    <a class="page-link" href="page.php?page=<?= ($page - 1) ?>">Previous</a>
                </li>
                <?php for($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                        <a class="page-link" href="page.php?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : '' ?>">
                    <a class="page-link" href="page.php?page=<?= ($page + 1) ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
