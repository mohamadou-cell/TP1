<?php 
$servername = 'localhost'; $username = 'root'; $password = 'laf99f@11'; 
try{ 
$dbco = new PDO("mysql:host=$servername;dbname=users", $username, $password); 
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);} 
catch(PDOException $e){ echo "Erreur : " . $e->getMessage();} 
?>