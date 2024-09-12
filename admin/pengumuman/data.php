<?php 
    // Assuming $con is your database connection
    $sql = mysqli_query($con, "SELECT * FROM tbl_pengumuman");

    // Check if the query was successful
    if (!$sql) {
        die('Query failed: ' . mysqli_error($con));
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5>Data Pengumuman</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <!-- <th>Image</th> -->
                        <th>Actions</th>
                    </tr>
                    <?php 
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($sql)):
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($data['Judul']); ?></td>
                            <td><?= htmlspecialchars(substr($data['isi'] ?? 'No Content', 0, 100)) ?><?php if (strlen($data['isi'] ?? '') > 100) echo '...'; ?></td>
                            <!-- <td class="text-center">
                                <img src="../assets/file/pengumuman/<?= htmlspecialchars($data['img'] ?? '') ?>" width="80" height="50" alt="Image">
                            </td> -->
                            <td class="text-center">
                                <a href="index.php?page=hapus&id=<?= urlencode($data['id_pengumuman'] ?? '') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="index.php?page=edit&id=<?= urlencode($data['id_pengumuman'] ?? '') ?>" class="btn btn-warning text-white">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
// Close the connection
mysqli_close($con);
?>
