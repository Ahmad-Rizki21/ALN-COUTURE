<?php
require 'conetions.php';

// CREATE
if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $code = $_POST['code'];
    $size = $_POST['size'];
    $alamat = $_POST['alamat'];
    $status_pengiriman = $_POST['status_pengiriman'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $sql = "INSERT INTO data (nama, code, size, alamat, status_pengiriman, status_pembayaran) VALUES (:nama, :code, :size, :alamat, :status_pengiriman, :status_pembayaran)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nama' => $nama, 'code' => $code, 'size' => $size, 'alamat' => $alamat, 'status_pengiriman' => $status_pengiriman, 'status_pembayaran' => $status_pembayaran]);
    header("Location: ../layout-blank.php");
}

// READ
$sql = "SELECT * FROM data";
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $code = $_POST['code'];
    $size = $_POST['size'];
    $alamat = $_POST['alamat'];
    $status_pengiriman = $_POST['status_pengiriman'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $sql = "UPDATE data SET nama = :nama, code = :code, size = :size, alamat = :alamat, status_pengiriman = :status_pengiriman, status_pembayaran = :status_pembayaran WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nama' => $nama, 'code' => $code, 'size' => $size, 'alamat' => $alamat, 'status_pengiriman' => $status_pengiriman, 'status_pembayaran' => $status_pembayaran, 'id' => $id]);
    header("Location: ../layout-blank.php");
}

// DELETE
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM data WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    header("Location: ../layout-blank.php");
}
?>