<?php 
// ob_start();

// phpinfo(INFO_MODULES);
$dsn = 'mysql:host=127.0.0.1;dbname=corona';
$username = 'qurbani'; // Replace with your MySQL username
$password = '1992'; // Replace with your MySQL password

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




?>