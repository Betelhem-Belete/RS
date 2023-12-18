<?php
try{
    //host 
    define('HOSTNAME', 'localhost');

    //DBNAME
    define('DBNAME','haylu');

    //user
    define('USER', 'root');

    //pass
    define('PASS', '');

    $conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";",USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn == true) {
    //     echo 'db connected';
    // } else {
    //     echo 'error';
    // }
    } catch(PDOException $e){
        die("database connection failed: " . $e->getMessage());
    }

    ?>