<?php

// Delete order
if (isset($_POST['delete'])) {
    $no = $_POST['no'];
    
    // Lakukan penghapusan
    $sql_delete = "DELETE FROM orders WHERE no = :no";
    $stmt_delete = $pdo->prepare($sql_delete);
    $stmt_delete->execute([':no' => $no]);
    
    // Nonaktifkan auto-increment
    $sql_disable_auto_increment = "ALTER TABLE orders AUTO_INCREMENT = 0";
    $stmt_disable_auto_increment = $pdo->prepare($sql_disable_auto_increment);
    $stmt_disable_auto_increment->execute();
    
    // Tambahkan entri palsu
    $sql_add_dummy_entry = "INSERT INTO orders (nama, code, size, alamat, status_pengiriman, status_pembayaran) VALUES ('dummy', '#', 'dummy', 'dummy', 'dummy', 'dummy')";
    $stmt_add_dummy_entry = $pdo->prepare($sql_add_dummy_entry);
    $stmt_add_dummy_entry->execute();
    
    // Hapus entri palsu
    $sql_delete_dummy_entry = "DELETE FROM orders WHERE nama = 'dummy'";
    $stmt_delete_dummy_entry = $pdo->prepare($sql_delete_dummy_entry);
    $stmt_delete_dummy_entry->execute();
    
    header('Location: ../layout-blank.php');
    exit();
}


?>