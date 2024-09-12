<?php 

include "../config/config.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Prepare and execute the delete statement
    $stmt = $con->prepare("DELETE FROM tbl_pengumuman WHERE id_pengumuman = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "<script>alert('Berhasil Menghapus')</script>";
            echo "<script>window.location.href='index.php?page=data'</script>";
        } else {
            echo "<script>alert('Gagal Menghapus Data')</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Gagal mempersiapkan pernyataan SQL.')</script>";
    }
} else {
    echo "<script>alert('ID tidak valid.')</script>";
}

?>
