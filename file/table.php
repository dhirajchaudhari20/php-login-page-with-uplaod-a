<?php

$dsn = "mysql:host=localhost;dbname=mydb";
$usernameDB = "root";
$passwordDB = "";

try {
    $pdo = new PDO($dsn, $usernameDB, $passwordDB);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS uploaded_files (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL,
                file_name VARCHAR(255) NOT NULL,
                file_path VARCHAR(255) NOT NULL,
                upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

    $pdo->exec($sql);

    echo "Table created successfully";
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
} finally {
    $pdo = null;
}

?>
