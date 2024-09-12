<?php 
    $sql = mysqli_query($con, "SELECT * FROM tbl_posts ORDER BY date DESC");
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Data Postingan Beranda</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Judul</th>
                            <th>Artikel</th>
                            <!-- <th>Image</th> -->
                            <th>Date</th>
                            <th>Kategori</th>
                            <th>Author</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($sql as $data): ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="font-weight-bold"><?= $data['judul'] ?></td>
                            <td><?= substr($data['artikel'], 0, 100) ?>...</td>
                            <!-- <td class="text-center">
                                <img src="../assets/file/post/<?= $data['img'] ?>" class="img-fluid rounded" width="80" height="50">
                            </td> -->
                            <td class="text-center"><?= date('d M Y', strtotime($data['date'])) ?></td>
                            <td class="text-center"><?= $data['kategori'] ?></td>
                            <td class="text-center"><?= $data['author'] ?></td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="index.php?page=hapus-beranda&id=<?=$data['id_post'] ?>" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="index.php?page=edit-beranda&id=<?=$data['id_post'] ?>" class="btn btn-sm btn-outline-warning text-dark">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
