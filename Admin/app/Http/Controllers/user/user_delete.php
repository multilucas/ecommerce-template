<?php
include("../../../../config/connection.php");

try {
    if (isset($_POST['id'])) {
        $id = $_POST['id']; 
        echo "Received ID: " . $id . "<br>";

        // Check if ID exists in the database before deleting
        $checkSql = "SELECT * FROM admin_user WHERE id = :id";
        $checkStmt = $pdo->prepare($checkSql);
        $checkStmt->bindParam(':id', $id, PDO::PARAM_INT);
        $checkStmt->execute();
        
        if ($checkStmt->rowCount() > 0) {
            echo "User found. Proceeding to delete...<br>";

            
            $sql = "DELETE FROM admin_user WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            echo "User deleted successfully!";
        } else {
            echo "Error: User not found!";
        }
    } else {
        echo "Error: ID is missing!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

