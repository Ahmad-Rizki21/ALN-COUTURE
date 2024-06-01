<!--  -->


<?php
require 'conetions.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM data WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([':id' => $id])) {
        echo "Deleted successfully";
    } else {
        echo "Error deleting record";
    }
}
?>