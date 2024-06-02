<?php
require 'conetions.php';

if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $code = $_POST['code'];
    $size = $_POST['size'];
    $alamat = $_POST['alamat'];
    $status_pengiriman = $_POST['status_pengiriman'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $sql = "INSERT INTO orders (nama, code, size, alamat, status_pengiriman, status_pembayaran) VALUES (:nama, :code, :size, :alamat, :status_pengiriman, :status_pembayaran)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nama' => $nama,
        ':code' => $code,
        ':size' => $size,
        ':alamat' => $alamat,
        ':status_pengiriman' => $status_pengiriman, 
        ':status_pembayaran' => $status_pembayaran
    ]);

    header('Location: ../layout-blank.php');
    exit();
}

if (isset($_POST['update'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $code = $_POST['code'];
    $size = $_POST['size'];
    $alamat = $_POST['alamat'];
    $status_pengiriman = $_POST['status_pengiriman'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $sql = "UPDATE orders SET nama = :nama, code = :code, size = :size, alamat = :alamat, status_pengiriman = :status_pengiriman, status_pembayaran = :status_pembayaran WHERE no = :no";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':no' => $no,
        ':nama' => $nama,
        ':code' => $code,
        ':size' => $size,
        ':alamat' => $alamat,
        ':status_pengiriman' => $status_pengiriman,
        ':status_pembayaran' => $status_pembayaran
    ]);

    header('Location: ../layout-blank.php');
    exit();
}

// Delete order
// Delete order
if (isset($_POST['delete'])) {
    $no = $_POST['no'];
    $sql = "DELETE FROM orders WHERE no = :no";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':no' => $no]);

    header('Location: index.php');
    exit();
}
?>
