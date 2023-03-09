<?php 
$host = "localhost";
$dbname = 'menu_restaurant';
$user = "root";
$password = "";

try {
    $dbb = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


  ?>