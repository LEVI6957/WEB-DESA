<?php 
    $sql = mysqli_query($con, "SELECT * FROM visimisi ORDER BY date DESC");
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Input Visi Misi</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; 
                    while($data = mysqli_fetch_assoc($sql)) : ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="font-weight-bold"><?= htmlspecialchars($data['judul']) ?></td>
                            <td><?= substr(htmlspecialchars($data['konten']), 0, 100) ?>...</td>
                            <td class="text-center"><?= date('d M Y', strtotime($data['date'])) ?></td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="index.php?page=hapus-vm&id=<?= $data['id'] ?>" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="index.php?page=edit-vm&id=<?= $data['id'] ?>" class="btn btn-sm btn-outline-warning text-dark">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>