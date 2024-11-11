<?php 

$host = "localhost";
$user = "root";
$pass = "password";
$dbname = "school_db";

$dns = "mysql:host=$host;dbname=$dbname";
try {
   $pdo = new PDO($dns, $user, $pass);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Database connection successfully";
} catch (PDOException $th) {
    echo "database connection fail :" . $th->getMessage();
}







