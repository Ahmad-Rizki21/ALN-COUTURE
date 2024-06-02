<?php
require 'conetions.php';

$sql = "SELECT * FROM orders";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$data) {
    $data = [];
}

?>