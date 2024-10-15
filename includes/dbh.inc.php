
<?php

$host = 'localhost';
$dbnamne = 'messages_database';
$dbusername = 'root';
$dbpassword = '';

try {

  $pdo = new PDO("mysql:host=$host;dbname=$dbnamne",
   $dbusername,  $dbpassword );

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  die("Connection failed: " . $e->getMessage());

}

