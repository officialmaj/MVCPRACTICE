<?php
    $dsn = 'sql1.njit.edu';
    $username = 'sa646';
    $password = 'sweeney53';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
