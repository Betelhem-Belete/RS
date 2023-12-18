<?php
try {
    // host
    define('HOSTNAME', 'localhost');

    // DBNAME
    define('DBNAME', 'haylu');

    // user
    define('USER', 'root');

    // pass
    define('PASS', '');
    $conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the connection is successful
    if ($conn) {
        echo 'Database connected successfully';
    } else {
        echo 'Database connection failed';

    }
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>