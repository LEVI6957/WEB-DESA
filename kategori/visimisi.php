<?php
include "config/config.php"; // Ensure the path to this file is correct

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve data
$sql = mysqli_query($con, "SELECT * FROM visimisi");

// Check if the query was successful
if (!$sql) {
    die("Query failed: " . mysqli_error($con));
}
?>
<style>
    .content-wrapper {
        text-align: center; /* Center text within the wrapper */
        padding: 20px; /* Add padding around the content */
    }

    .card {
        background-color: #f8f9fa; /* Light background for better contrast */
        border: 1px solid #dee2e6; /* Subtle border */
        border-radius: 10px; /* Rounded corners */
        padding: 15px; /* Padding inside the card */
        margin: 15px 0; /* Margin between cards */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
        transition: transform 0.2s; /* Smooth scaling on hover */
        text-align: left; /* Left-align text in the card */
    }

    .card:hover {
        transform: scale(1.02); /* Scale up the card slightly on hover */
    }

    h2 {
        font-size: 24px; /* Adjust font size */
        color: #343a40; /* Darker text color */
        margin-bottom: 10px; /* Space below the heading */
    }

    p {
        font-size: 16px; /* Adjust paragraph font size */
        color: #495057; /* Slightly lighter text color */
        line-height: 1.5; /* Improve line spacing */
        text-align: justify; /* Justify text in the paragraph */
    }
</style>

<div class="content-wrapper">
    <div class="row">
        <?php while ($data = mysqli_fetch_assoc($sql)): ?>
            <div class="col-md-4 col-xs-12 mt-3">
                <div class="card">
                    <h2><?= htmlspecialchars($data['judul']) ?></h2>
                    <p><?= htmlspecialchars($data['konten']) ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
