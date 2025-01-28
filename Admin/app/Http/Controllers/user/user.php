<?php
include("../../../../config/connection.php");

try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO admin_user (email, password) 
                           VALUES (:email, :password)");

    // Execute the statement with provided parameters
    $stmt->execute([
        "email" => $_POST["email"],
        "password" => password_hash($_POST["password"], PASSWORD_DEFAULT), // Hash the password for security
    ]);

    echo "User added successfully.";
} catch (PDOException $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage();
}
?>




