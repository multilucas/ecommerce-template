<?php
include("../../config/connection.php");
try {
    $sql = "CREATE TABLE IF NOT EXISTS admin_user(id INT AUTO_INCREMENT PRIMARY KEY,
 email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);";
     $pdo->exec($sql);
     echo "Table 'products' created successfully!";
}catch (PDOException $e) {
    die("Error creating table: " . $e->getMessage());
}

